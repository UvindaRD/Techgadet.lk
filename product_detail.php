<?php
// Database connection
$db = new mysqli('localhost', 'root', '', 'tech_gadget_lk');

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Get product ID from URL
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Fetch product details
$stmt = $db->prepare("SELECT * FROM products WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$product = $result->fetch_assoc();

if (!$product) {
    die("Product not found");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($product['name']); ?> - Product Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .image-gallery {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .main-image-container {
            margin-bottom: 1rem;
        }
        
        .main-image {
            width: 100%;
            max-height: 500px;
            object-fit: contain;
        }
        
        .thumbnails-container {
            display: flex;
            justify-content: center;
            gap: 1rem;
        }
        
        .thumbnail {
            width: 80px;
            height: 80px;
            object-fit: cover;
            cursor: pointer;
            border: 2px solid transparent;
            border-radius: 8px;
        }
        
        .thumbnail.active {
            border-color: #4CAF50;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-6xl mx-auto">
            <!-- Back Button -->
            <a href="javascript:history.back()" class="inline-flex items-center mb-6 text-blue-600 hover:text-blue-800">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Back to Products
            </a>

            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Image Gallery -->
                    <div class="image-gallery">
                    <div class="main-image-container">
                        <img id="mainImage" src="<?php echo htmlspecialchars($product['image1']); ?>" alt="Product Image" class="main-image">
                    </div>
                    <div class="thumbnails-container">
                        <img src="<?php echo htmlspecialchars($product['image1']); ?>" alt="Image 1" class="thumbnail active" onclick="changeImage(this)">
                        <img src="<?php echo htmlspecialchars($product['image2']); ?>" alt="Image 2" class="thumbnail" onclick="changeImage(this)">
                        <img src="<?php echo htmlspecialchars($product['image3']); ?>" alt="Image 3" class="thumbnail" onclick="changeImage(this)">
                        <img src="<?php echo htmlspecialchars($product['image4']); ?>" alt="Image 4" class="thumbnail" onclick="changeImage(this)">
                    </div>
                </div>

                    <!-- Product Details -->
                    <div class="product-details">
                        <h1 class="text-3xl font-bold mb-4"><?php echo htmlspecialchars($product['name']); ?></h1>
                        <div class="text-2xl font-bold text-blue-600 mb-4"><?php echo number_format($product['price'], 2); ?> LKR</div>
                        
                        <div class="mb-6">
                            <h2 class="text-xl font-semibold mb-2">Key Features</h2>
                            <ul class="list-disc list-inside space-y-2 text-gray-600">
                                <?php
                                $features = explode("\n", $product['main_features']);
                                foreach ($features as $feature) {
                                    echo "<li>" . htmlspecialchars($feature) . "</li>";
                                }
                                ?>
                            </ul>
                        </div>

                        <form action="cart.php" method="POST" class="mb-6">
                            <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                            <input type="hidden" name="product_name" value="<?php echo htmlspecialchars($product['name']); ?>">
                            <input type="hidden" name="product_price" value="<?php echo $product['price']; ?>">
                            <button type="submit" name="add_to_cart" 
                                class="w-full bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700 transition duration-300">
                                Add to Cart
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Product Description -->
                <div class="mt-12">
                    <h2 class="text-2xl font-bold mb-4">Product Description</h2>
                    <div class="prose max-w-none text-gray-600">
                        <p class="mb-4"><?php echo nl2br(htmlspecialchars($product['long_description'])); ?></p>
                        
                        <h3 class="text-xl font-semibold mt-6 mb-3">Detailed Specifications</h3>
                        <ul class="list-disc list-inside space-y-2">
                            <?php
                            $specs = explode("\n", $product['specifications']);
                            foreach ($specs as $spec) {
                                echo "<li>" . htmlspecialchars($spec) . "</li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function changeImage(clickedThumbnail) {
            // Update main image
            const mainImage = document.getElementById('mainImage');
            mainImage.src = clickedThumbnail.src;
            
            // Update active thumbnail
            const thumbnails = document.getElementsByClassName('thumbnail');
            for(let thumbnail of thumbnails) {
                thumbnail.classList.remove('active');
            }
            clickedThumbnail.classList.add('active');
        }
    </script>
</body>
</html>