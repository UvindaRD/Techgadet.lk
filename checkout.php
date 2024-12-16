<?php
session_start();

// Database connection
$host = 'localhost';
$dbname = 'tech_gadget_lk';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}

// Get cart total
$stmt = $pdo->prepare("SELECT SUM(price * quantity) as total FROM cart WHERE user_id = ?");
$stmt->execute([$_SESSION['user_id']]);
$result = $stmt->fetch();
$total = $result['total'] ?? 0;

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);
    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_SPECIAL_CHARS);

    try {
        // Insert order into database
        $stmt = $pdo->prepare("INSERT INTO customer_orders (user_id, name, email, phone, address, total_amount) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$_SESSION['user_id'], $name, $email, $phone, $address, $total]);
        
        // Get cart items for WhatsApp message
        $stmt = $pdo->prepare("SELECT * FROM cart WHERE user_id = ?");
        $stmt->execute([$_SESSION['user_id']]);
        $cart_items = $stmt->fetchAll();
        
        // Format WhatsApp message
        $message = "New Order Received!\n\n";
        $message .= "Customer Details:\n";
        $message .= "Name: $name\n";
        $message .= "Phone: $phone\n";
        $message .= "Address: $address\n\n";
        $message .= "Order Details:\n";
        
        foreach ($cart_items as $item) {
            $message .= "{$item['product_name']} x {$item['quantity']} - " . 
                       number_format($item['price'] * $item['quantity']) . " LKR\n";
        }
        
        $message .= "\nTotal Amount: " . number_format($total) . " LKR";
        
        // Encode message for URL
        $encoded_message = urlencode($message);
        
        // Clear cart after successful order
        $stmt = $pdo->prepare("DELETE FROM cart WHERE user_id = ?");
        $stmt->execute([$_SESSION['user_id']]);
        
        // Redirect to success page with WhatsApp link
        $_SESSION['whatsapp_message'] = $encoded_message;
        header("Location: order-success.php");
        exit();
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Tech Gadget LK</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .form-input {
            transition: border-color 0.3s ease;
        }
        
        .form-input:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        .error {
            color: #dc2626;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }

        .loading {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.8);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .loading-spinner {
            width: 50px;
            height: 50px;
            border: 5px solid #f3f3f3;
            border-top: 5px solid #3498db;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="loading">
        <div class="loading-spinner"></div>
    </div>

    <div class="max-w-2xl mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-8">Checkout</h1>
        
        <div class="bg-white rounded-lg shadow-md p-6">
            <form id="checkoutForm" method="POST" action="checkout.php" class="space-y-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" id="name" name="name" required
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm form-input p-2 border">
                    <div class="error" id="nameError"></div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" id="email" name="email" required
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm form-input p-2 border">
                    <div class="error" id="emailError"></div>
                </div>

                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                    <input type="tel" id="phone" name="phone" required
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm form-input p-2 border">
                    <div class="error" id="phoneError"></div>
                </div>

                <div>
                    <label for="address" class="block text-sm font-medium text-gray-700">Delivery Address</label>
                    <textarea id="address" name="address" rows="3" required
                              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm form-input p-2 border"></textarea>
                    <div class="error" id="addressError"></div>
                </div>

                <div class="border-t pt-4">
                    <div class="flex justify-between items-center">
                        <span class="text-xl font-bold">Total:</span>
                        <span class="text-xl font-bold"><?php echo number_format($total); ?> LKR</span>
                    </div>
                </div>

                <div class="mt-6">
                    <button type="submit" class="w-full bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700">
                        Place Order
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('checkoutForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Reset errors
            document.querySelectorAll('.error').forEach(error => error.textContent = '');
            
            let isValid = true;
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const address = document.getElementById('address').value;

            // Validate name
            if (name.trim().length < 3) {
                document.getElementById('nameError').textContent = 'Name must be at least 3 characters long';
                isValid = false;
            }

            // Validate email
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                document.getElementById('emailError').textContent = 'Please enter a valid email address';
                isValid = false;
            }

            // Validate phone
            const phoneRegex = /^\d{10}$/;
            if (!phoneRegex.test(phone.replace(/\D/g, ''))) {
                document.getElementById('phoneError').textContent = 'Please enter a valid 10-digit phone number';
                isValid = false;
            }

            // Validate address
            if (address.trim().length < 10) {
                document.getElementById('addressError').textContent = 'Please enter a complete address';
                isValid = false;
            }

            if (isValid) {
                document.querySelector('.loading').style.display = 'flex';
                this.submit();
            }
        });
    </script>
</body>
</html>