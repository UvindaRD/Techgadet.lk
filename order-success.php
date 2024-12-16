<?php
session_start();

if (!isset($_SESSION['whatsapp_message'])) {
    header("Location: index.html");
    exit();
}

$whatsapp_message = $_SESSION['whatsapp_message'];
$seller_phone = '94767132571'; // Replace with seller's phone number
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Success - Tech Gadget LK</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <div class="max-w-2xl mx-auto px-4 py-16 text-center">
        <div class="bg-white rounded-lg shadow-md p-8">
            <div class="text-green-600 mb-4">
                <svg class="w-20 h-20 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
            
            <h1 class="text-3xl font-bold mb-4">Order Successful!</h1>
            <p class="text-gray-600 mb-8">Thank you for your order. We'll process it right away.</p>
            
            <a href="https://wa.me/<?php echo $seller_phone; ?>?text=<?php echo $whatsapp_message; ?>" 
               target="_blank"
               class="inline-block bg-green-600 text-white px-6 py-3 rounded-md hover:bg-green-700">
                Contact Seller on WhatsApp
            </a>
            
            <a href="index.html" class="block mt-4 text-blue-600 hover:text-blue-800">
                Return to Homepage
            </a>
        </div>
    </div>
</body>
</html>