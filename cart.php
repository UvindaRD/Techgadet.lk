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

// Initialize session user_id (assuming user authentication is implemented)
if (!isset($_SESSION['user_id'])) {
    $_SESSION['user_id'] = session_id(); // Temporary solution for guest users
}

// Handle adding items to cart
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_to_cart'])) {
    $product_id = filter_input(INPUT_POST, 'product_id', FILTER_SANITIZE_NUMBER_INT);
    $product_name = filter_input(INPUT_POST, 'product_name', FILTER_SANITIZE_SPECIAL_CHARS);
    $product_price = filter_input(INPUT_POST, 'product_price', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $user_id = $_SESSION['user_id'];

    try {
        // Check if item exists in cart
        $stmt = $pdo->prepare("SELECT quantity FROM cart WHERE user_id = ? AND product_id = ?");
        $stmt->execute([$user_id, $product_id]);
        $existing_item = $stmt->fetch();

        if ($existing_item) {
            // Update quantity
            $stmt = $pdo->prepare("UPDATE cart SET quantity = quantity + 1 WHERE user_id = ? AND product_id = ?");
            $stmt->execute([$user_id, $product_id]);
        } else {
            // Insert new item
            $stmt = $pdo->prepare("INSERT INTO cart (user_id, product_id, product_name, price, quantity) VALUES (?, ?, ?, ?, 1)");
            $stmt->execute([$user_id, $product_id, $product_name, $product_price]);
        }

        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
        exit();
    }
}

// Handle removing items from cart
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['removeItem'])) {
    $product_id = filter_input(INPUT_POST, 'remove_item', FILTER_SANITIZE_NUMBER_INT);
    $user_id = $_SESSION['user_id'];

    try {
        $stmt = $pdo->prepare("SELECT quantity FROM cart WHERE user_id = ? AND product_id = ?");
        $stmt->execute([$user_id, $product_id]);
        $item = $stmt->fetch();

        if ($item['quantity'] > 1) {
            $stmt = $pdo->prepare("UPDATE cart SET quantity = quantity - 1 WHERE user_id = ? AND product_id = ?");
        } else {
            $stmt = $pdo->prepare("DELETE FROM cart WHERE user_id = ? AND product_id = ?");
        }
        $stmt->execute([$user_id, $product_id]);

        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
        exit();
    }
}

// Function to get cart total
function getCartTotal($pdo, $user_id) {
    $stmt = $pdo->prepare("SELECT SUM(price * quantity) as total FROM cart WHERE user_id = ?");
    $stmt->execute([$user_id]);
    $result = $stmt->fetch();
    return $result['total'] ?? 0;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - Tech Gadget LK</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-8">Shopping Cart</h1>
        
        <?php
        $stmt = $pdo->prepare("SELECT * FROM cart WHERE user_id = ?");
        $stmt->execute([$_SESSION['user_id']]);
        $cart_items = $stmt->fetchAll();
        
        if (empty($cart_items)):
        ?>
            <p class="text-gray-600">Your cart is empty</p>
        <?php else: ?>
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="space-y-4">
                    <?php foreach ($cart_items as $item): ?>
                        <div class="flex justify-between items-center border-b pb-4">
                            <div>
                                <h3 class="font-semibold"><?php echo htmlspecialchars($item['product_name']); ?></h3>
                                <p class="text-gray-600">Quantity: <?php echo $item['quantity']; ?></p>
                            </div>
                            <div class="text-right">
                                <p class="font-bold"><?php echo number_format($item['price'] * $item['quantity']); ?> LKR</p>
                                <form action="cart.php" method="POST" class="inline">
                                    <input type="hidden" name="remove_item" value="<?php echo $item['product_id']; ?>">
                                    <button type="submit" name="removeItem" class="text-red-600 hover:text-red-800">Remove</button>
                                </form>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                
                <div class="mt-6 border-t pt-4">
                    <div class="flex justify-between items-center">
                        <span class="text-xl font-bold">Total:</span>
                        <span class="text-xl font-bold"><?php echo number_format(getCartTotal($pdo, $_SESSION['user_id'])); ?> LKR</span>
                    </div>
                </div>
                
                <div class="mt-6 space-x-4">
                    <a href="index.php" class="inline-block bg-gray-600 text-white px-6 py-3 rounded-md hover:bg-gray-700">
                        Continue Shopping
                    </a>
                    <a href="checkout.php" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700">
                        Proceed to Checkout
                    </a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>