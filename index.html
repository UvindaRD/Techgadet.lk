<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Gadget LK - Premium Mobile Accessories</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        .slider-container {
        position: relative;
        overflow: hidden;
        width: 100%;
        padding-top: 75%;
    }

    .slider {
        position: absolute;
            top: 0;
            left: 0;
            width: 500%; /* Adjust based on number of images (5 images * 100% each) */
            height: 100%;
            display: flex;
            animation: slide 12s infinite;
    }

    .slider img {
        width: 20%; /* Each image takes 20% of the total width (since 5 images = 500% width) */
            height: 100%;
            object-fit: cover;
    }

    

       .slider-container {
        position: relative;
        overflow: hidden;
        width: 100%;
        height: 250px;
    }

    .slider {
        display: flex;
        width: 100%; /* Number of images * 100% */
        animation: slide 12s infinite; /* Change duration as needed */
    }

    .slider img {
        width: 100%;
        flex-shrink: 0;
    }

    @keyframes slide {
        0% { transform: translateX(0%); }
        20% { transform: translateX(0%); }
        25% { transform: translateX(-100%); }
        45% { transform: translateX(-100%); }
        50% { transform: translateX(-200%); }
        70% { transform: translateX(-200%); }
        75% { transform: translateX(-300%); }
        95% { transform: translateX(-300%); }
        100% { transform: translateX(-400%); }
    }
    
       

        .hero-gradient {
            background: linear-gradient(90deg, #000851, #1CB5E0);
        }

        .card-hover:hover {
            transform: translateY(-5px);
            transition: transform 0.3s ease;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

       

        .custom-shape-divider-bottom-1684489764 {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0%;
            overflow: hidden;
            line-height: 0;
        }

        .custom-shape-divider-bottom-1684489764 svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 150px;
        }

        .custom-shape-divider-bottom-1684489764 .shape-fill {
            fill: #FFFFFF;
        }





       
        #chat-widget {
            font-family: Arial, sans-serif;
        }
        
        .whatsapp-button {
            display: inline-block;
            background-color: #25D366;
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            text-decoration: none;
            margin-top: 8px;
            transition: background-color 0.3s;
        }
        
        .whatsapp-button:hover {
            background-color: #128C7E;
        }
        
        .message-container {
            margin-bottom: 1rem;
        }
        
        .user-message {
            display: flex;
            justify-content: flex-end;
        }
        
        .bot-message {
            display: flex;
            justify-content: flex-start;
        }
       






 </style>


 <script>
    document.addEventListener('DOMContentLoaded', function() {
        const chatButton = document.getElementById('chat-button');
        const chatWindow = document.getElementById('chat-window');
        const closeChat = document.getElementById('close-chat');
        const chatForm = document.getElementById('chat-form');
        const chatInput = document.getElementById('chat-input');
        const chatMessages = document.getElementById('chat-messages');

        // Replace with actual seller's WhatsApp number (international format without '+')
        const sellerWhatsApp = '94767132571';
        
        // Keywords that trigger WhatsApp connection
        const contactKeywords = ['phone', 'contact', 'number', 'whatsapp', 'wa', 'call', 'connect'];

        // Toggle chat window
        chatButton.addEventListener('click', () => {
            chatWindow.classList.toggle('hidden');
            if (!chatWindow.classList.contains('hidden')) {
                chatInput.focus();
            }
        });

        closeChat.addEventListener('click', () => {
            chatWindow.classList.add('hidden');
        });

        // Handle message submission
        chatForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const message = chatInput.value.trim();
            
            if (message) {
                // Add user message to chat
                addMessage(message, true);
                chatInput.value = '';

                // Check if message contains contact keywords
                if (contactKeywords.some(keyword => message.toLowerCase().includes(keyword))) {
                    await handleContactRequest();
                } else {
                    // Add bot response
                    addMessage("How else can I assist you?", false);
                }
            }
        });

        function addMessage(message, isUser) {
            const messageDiv = document.createElement('div');
            messageDiv.className = `flex mb-4 ${isUser ? 'justify-end' : ''}`;
            
            const innerDiv = document.createElement('div');
            innerDiv.className = `rounded-lg p-3 max-w-[80%] ${isUser ? 'bg-blue-600 text-white' : 'bg-gray-200'}`;
            
            const p = document.createElement('p');
            p.className = 'text-sm';
            p.textContent = message;
            
            innerDiv.appendChild(p);
            messageDiv.appendChild(innerDiv);
            chatMessages.appendChild(messageDiv);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        function addCustomMessage(htmlContent) {
            const messageDiv = document.createElement('div');
            messageDiv.className = 'flex mb-4';
            messageDiv.innerHTML = htmlContent;
            chatMessages.appendChild(messageDiv);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        async function handleContactRequest() {
            try {
                // Show loading message
                addMessage("Connecting you with our seller...", false);

                // Send notification to seller
                await notifySeller();

                // Prepare WhatsApp message
                const whatsappMsg = encodeURIComponent("Hello! I'm interested in your products and would like to know more.");
                const whatsappLink = `https://wa.me/${sellerWhatsApp}?text=${whatsappMsg}`;

                // Add response message with WhatsApp button
                const whatsappResponse = `
                    <div class="bg-gray-200 rounded-lg p-3 max-w-[80%]">
                        <p class="text-sm">Great! I've notified the seller. Click below to start a WhatsApp conversation:</p>
                        <a href="${whatsappLink}" target="_blank" class="whatsapp-button">
                            <i class="fab fa-whatsapp"></i> Connect on WhatsApp
                        </a>
                    </div>
                `;
                addCustomMessage(whatsappResponse);

                // Automatically open WhatsApp after a short delay
                setTimeout(() => {
                    window.open(whatsappLink, '_blank');
                }, 1500);

            } catch (error) {
                console.error('Error handling contact request:', error);
                addMessage("I apologize, but I'm having trouble connecting to the seller. Please try again later.", false);
            }
        }

        async function notifySeller() {
            try {
                // Replace with your actual API endpoint
                const response = await fetch('/api/notify-seller', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        type: 'contact_request',
                        timestamp: new Date().toISOString(),
                        message: 'A customer has requested to connect via WhatsApp',
                        customerInfo: {
                            timestamp: new Date().toISOString(),
                            userAgent: navigator.userAgent,
                            pageUrl: window.location.href
                        }
                    })
                });

                if (!response.ok) {
                    throw new Error('Failed to notify seller');
                }

                return await response.json();
            } catch (error) {
                console.error('Error notifying seller:', error);
                // Continue even if notification fails
                return null;
            }
        }
    });
</script>





</head>

<!-- Chat Widget -->
<div id="chat-widget" class="fixed bottom-4 right-4 z-50">
    <button id="chat-button" class="bg-blue-600 text-white rounded-full p-4 shadow-lg hover:bg-blue-700 focus:outline-none">
        <i class="fas fa-comments text-2xl"></i>
    </button>

    <div id="chat-window" class="hidden fixed bottom-20 right-4 w-80 bg-white rounded-lg shadow-xl">
        <div class="bg-blue-600 text-white p-4 rounded-t-lg flex justify-between items-center">
            <h3 class="font-bold">Live Chat</h3>
            <button id="close-chat" class="text-white hover:text-gray-200 focus:outline-none">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <div id="chat-messages" class="p-4 h-80 overflow-y-auto">
            <div class="flex mb-4">
                <div class="bg-gray-200 rounded-lg p-3 max-w-[80%]">
                    <p class="text-sm">Hello! How can we help you today?</p>
                </div>
            </div>
        </div>

        <div class="border-t p-4">
            <form id="chat-form" class="flex gap-2">
                <input type="text" id="chat-input" 
                    class="flex-1 border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-600"
                    placeholder="Type your message...">
                <button type="submit" 
                    class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 focus:outline-none">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </div>
</div>








<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <span class="text-2xl font-bold text-blue-600">Tech Gadget LK</span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="hover:text-blue-600">Home</a>
                    <a href="#products" class="hover:text-blue-600">Products</a>
                    <a href="Aboutus.php" class="hover:text-blue-600">About</a>
                    <a href="contect.php" class="hover:text-blue-600">Contact</a>

                    
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                    <a href="cart.php"><i class="fas fa-shopping-cart mr-2"></i>Cart</a>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-gradient relative min-h-screen flex items-center pt-16">
        <div class="max-w-7xl mx-auto px-4 py-20">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div class="text-white">
                    <h1 class="text-4xl md:text-6xl font-bold mb-6">Premium Mobile Accessories</h1>
                    <p class="text-xl mb-8">Discover our collection of high-quality mobile accessories for the perfect tech upgrade.</p>
                    <button class="bg-white text-blue-600 px-8 py-3 rounded-md hover:bg-gray-100">
                        Shop Now
                    </button>
                </div>
                <div class="relative">
                    <div class="bg-white p-4 rounded-lg shadow-xl transform rotate-3">
                        <div class="slider-container bg-gray-200 rounded-lg aspect-video overflow-hidden">
                            <div class="slider">
                                <!-- Add Images Here -->
                                <img src="front\Tech (1).png" alt="Image 1" class="w-full h-full object-cover">
                                <img src="front\lk (1).png" alt="Image 2" class="w-full h-full object-cover">
                                <img src="front\p1.jpg.jpg" alt="Image 3" class="w-full h-full object-cover">
                                <img src="front\img4.jpg" alt="Image 4" class="w-full h-full object-cover">
                                <img src="front\img5.jpg" alt="Image 5" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom-shape-divider-bottom-1684489764">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>


    <!-- Featured Products -->
    <section id="products" class="py-20">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Featured Products</h2>
            <div class="product-grid">


                <!-- Product 1 -->
                <div class="bg-white rounded-lg shadow-md p-6 card-hover">
                    <div class="bg-gray-200 rounded-lg aspect-square mb-4"></div>
                    <h3 class="font-semibold mb-2">Ultra-Fast Wireless Charger</h3>
                    <p class="text-gray-600 mb-4">15W Charging Power</p>
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-lg">10,500 LKR</span>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                            Add to Cart
                        </button>
                    </div>
                </div>
                <!-- More products (similar structure) -->

                <!-- Product 1 -->
                 
                <div class="bg-white rounded-lg shadow-md p-6 card-hover">
                <a href="product_detail.php?id=1" class="block">
                    <!-- Image Slider Section -->
                    <div class="slider-container bg-gray-200 rounded-lg mb-4">
                        <div class="slider">
                            <img src="Baseus_chager\img1.jpg.jpg" alt="Ultra-Fast Wireless Charger" class="w-full h-full object-cover rounded-lg">
                            <img src="Baseus_chager\img2.jpg.jpg" alt="Ultra-Fast Wireless Charger" class="w-full h-full object-cover rounded-lg">
                            <img src="Baseus_chager\img3.jpg.jpg" alt="Ultra-Fast Wireless Charger" class="w-full h-full object-cover rounded-lg">
                            <img src="Baseus_chager\img4.jpg.jpg" alt="Ultra-Fast Wireless Charger" class="w-full h-full object-cover rounded-lg">
                            <img src="Baseus_chager\img5.jpg.jpg" alt="Ultra-Fast Wireless Charger" class="w-full h-full object-cover rounded-lg">
                        </div>
                    </div>
                
                    <!-- Product Details -->
                    <h3 class="font-semibold mb-2">Baseus Fast Charger</h3>
                    <p class="text-gray-600 mb-4">20W Charging Power</p>
                    </a>
                    
                        <div class="flex justify-between items-center">
                        <span class="font-bold text-lg">3,490 LKR</span>
                        <!-- Modify each "Add to Cart" button like this -->
                    <form action="cart.php" method="POST">
                        <input type="hidden" name="product_id" value="1">
                        <input type="hidden" name="product_name" value="Baseus Fast Charger">
                        <input type="hidden" name="product_price" value="3490">
                        <button type="submit" name="add_to_cart" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                            Add to Cart
                        </button>
</form>
                    </div>
                </div>


                <!-- Product 2 -->
                <div class="bg-white rounded-lg shadow-md p-6 card-hover">
                 <a href="product_detail.php?id=2" class="block">
                 <!-- Image Slider Section -->
                 <div class="slider-container bg-gray-200 rounded-lg mb-4">
                 <div class="slider">
                <img src="ugreen2\u1.jpg.jpg" alt="Ultra-Fast Wireless Charger" class="w-full h-full object-cover rounded-lg">
                <img src="ugreen2\u2.jpg.jpg" alt="Ultra-Fast Wireless Charger" class="w-full h-full object-cover rounded-lg">
                <img src="ugreen2\u3.jpg.jpg" alt="Ultra-Fast Wireless Charger" class="w-full h-full object-cover rounded-lg">
                <img src="ugreen2\u4.jpg.jpg" alt="Ultra-Fast Wireless Charger" class="w-full h-full object-cover rounded-lg">
            </div>
        </div>
    
        <!-- Product Details -->
        <h3 class="font-semibold mb-2">UGREEN Fast Charger</h3>
        <p class="text-gray-600 mb-4">20W Charging Power</p>
    </a>
                    
                        <div class="flex justify-between items-center">
                        <span class="font-bold text-lg">3,990 LKR</span>
                       <!-- Modify each "Add to Cart" button like this -->
                    <form action="cart.php" method="POST">
                        <input type="hidden" name="product_id" value="2">
                        <input type="hidden" name="product_name" value="UGREEN Fast Charger">
                        <input type="hidden" name="product_price" value="3990">
                        <button type="submit" name="add_to_cart" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                            Add to Cart
                        </button>
                    </form>
                    </div>
                    
                </div>



                 <!-- Product 3 -->
                 <div class="bg-white rounded-lg shadow-md p-6 card-hover">
                 <a href="product_detail.php?id=3" class="block">
                    <!-- Image Slider Section -->
                    <div class="slider-container bg-gray-200 rounded-lg mb-4">
                        <div class="slider">
                            <img src="buds\b1.jpg.jpg" alt="Ultra-Fast Wireless Charger" class="w-full h-full object-cover rounded-lg">
                            <img src="buds\b2.jpg.jpg" alt="Ultra-Fast Wireless Charger" class="w-full h-full object-cover rounded-lg">
                            <img src="buds\b3.jpg.jpg" alt="Ultra-Fast Wireless Charger" class="w-full h-full object-cover rounded-lg">
                            

                            
                        </div>
                    </div>
                
                    <!-- Product Details -->
                    <h3 class="font-semibold mb-2">Lenovo thinkplud XT88 Earbuds</h3>
                    <p class="text-gray-600 mb-4">HIFI sound system</p>
                 </a>
                    
                        <div class="flex justify-between items-center">
                        <span class="font-bold text-lg">3,990 LKR</span>
                        <!-- Modify each "Add to Cart" button like this -->
                    <form action="cart.php" method="POST">
                        <input type="hidden" name="product_id" value="3">
                        <input type="hidden" name="product_name" value="Lenovo thinkplud XT88 Earbuds">
                        <input type="hidden" name="product_price" value="3990">
                        <button type="submit" name="add_to_cart" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                            Add to Cart
                        </button>
                        </form>
                    </div>
                </div>

                 <!-- Product 4 -->
                 <div class="bg-white rounded-lg shadow-md p-6 card-hover">
                 <a href="product_detail.php?id=4" class="block">
                    <!-- Image Slider Section -->
                    <div class="slider-container bg-gray-200 rounded-lg mb-4">
                        <div class="slider">
                            <img src="Essager\be1.jpg.jpg" alt="Ultra-Fast Wireless Charger" class="w-full h-full object-cover rounded-lg">
                            <img src="Essager\be2.jpg.jpg" alt="Ultra-Fast Wireless Charger" class="w-full h-full object-cover rounded-lg">
                            <img src="Essager\be3.jpg.jpg" alt="Ultra-Fast Wireless Charger" class="w-full h-full object-cover rounded-lg">
                            <img src="Essager\be4.jpg.jpg" alt="Ultra-Fast Wireless Charger" class="w-full h-full object-cover rounded-lg">
                            <img src="Essager\be5.jpg.jpg" alt="Ultra-Fast Wireless Charger" class="w-full h-full object-cover rounded-lg">
                            

                            
                        </div>
                    </div>
                
                    <!-- Product Details -->
                    <h3 class="font-semibold mb-2">Essager fast Charger</h3>
                    <p class="text-gray-600 mb-4">20W fast Charging</p>
                 </a>
                    
                        <div class="flex justify-between items-center">
                        <span class="font-bold text-lg">2,400 LKR</span>
                       <!-- Modify each "Add to Cart" button like this -->
                <form action="cart.php" method="POST">
                    <input type="hidden" name="product_id" value="4">
                    <input type="hidden" name="product_name" value="Essager fast Charger">
                    <input type="hidden" name="product_price" value="2400">
                    <button type="submit" name="add_to_cart" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                        Add to Cart
                    </button>
                </form>
                    </div>
                </div>


                <!-- Product 5 -->
                <div class="bg-white rounded-lg shadow-md p-6 card-hover">
                <a href="product_detail.php?id=5" class="block">
                    <!-- Image Slider Section -->
                    <div class="slider-container bg-gray-200 rounded-lg mb-4">
                        <div class="slider">
                            <img src="Essager_cable\es1.jpg" alt="Ultra-Fast Wireless Charger" class="w-full h-full object-cover rounded-lg">
                            <img src="Essager_cable\es2.jpg" alt="Ultra-Fast Wireless Charger" class="w-full h-full object-cover rounded-lg">
                            <img src="Essager_cable\es3.jpg" alt="Ultra-Fast Wireless Charger" class="w-full h-full object-cover rounded-lg">
                            <img src="Essager_cable\es4.jpg" alt="Ultra-Fast Wireless Charger" class="w-full h-full object-cover rounded-lg">
                            <img src="Essager_cable\es5.jpg" alt="Ultra-Fast Wireless Charger" class="w-full h-full object-cover rounded-lg">
                            

                            
                        </div>
                    </div>
                
                    <!-- Product Details -->
                    <h3 class="font-semibold mb-2">Essager cables</h3>
                    <p class="text-gray-600 mb-4">Essager  </p>
                </a>
                    
                        <div class="flex justify-between items-center">
                        <span class="font-bold text-lg">1,490 LKR</span>
                        
                        <!-- Modify each "Add to Cart" button like this -->
                    <form action="cart.php" method="POST">
                        <input type="hidden" name="product_id" value="5">
                        <input type="hidden" name="product_name" value="Essager cables">
                        <input type="hidden" name="product_price" value="1490">
                        <button type="submit" name="add_to_cart" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                            Add to Cart
                        </button>
                        </form>
                    </div>
                </div>




                <!-- Product 6 -->
                <div class="bg-white rounded-lg shadow-md p-6 card-hover">
                <a href="product_detail.php?id=6" class="block">
                    <!-- Image Slider Section -->
                    <div class="slider-container bg-gray-200 rounded-lg mb-4">
                        <div class="slider">
                            <img src="Baseus_cable\bes1.jpg" alt="Ultra-Fast Wireless Charger" class="w-full h-full object-cover rounded-lg">
                            <img src="Baseus_cable\bes2.jpg" alt="Ultra-Fast Wireless Charger" class="w-full h-full object-cover rounded-lg">
                            <img src="Baseus_cable\bes3.jpg" alt="Ultra-Fast Wireless Charger" class="w-full h-full object-cover rounded-lg">
                            <img src="Baseus_cable\bes4.jpg" alt="Ultra-Fast Wireless Charger" class="w-full h-full object-cover rounded-lg">
                            <img src="Baseus_cable\bes5.jpg" alt="Ultra-Fast Wireless Charger" class="w-full h-full object-cover rounded-lg">
                            

                            
                        </div>
                    </div>
                
                    <!-- Product Details -->

                    
                    <h3 class="font-semibold mb-2">Baseus cables</h3>
                    <p class="text-gray-600 mb-4">Baseus 60W  </p>
                </a>
                    
                        <div class="flex justify-between items-center">
                        <span class="font-bold text-lg">1,990 LKR</span>
                        
                       <!-- Modify each "Add to Cart" button like this -->
                    <form action="cart.php" method="POST">
                        <input type="hidden" name="product_id" value="6">
                        <input type="hidden" name="product_name" value="Baseus cables">
                        <input type="hidden" name="product_price" value="1990">
                        <button type="submit" name="add_to_cart" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                            Add to Cart
                        </button>
                    </form>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- Categories -->
    <section class="bg-gray-100 py-20">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Shop by Category</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md text-center card-hover">
                    <i class="fas fa-mobile-alt text-4xl text-blue-600 mb-4"></i>
                    <h3 class="font-semibold">Phone Cases</h3>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center card-hover">
                    <i class="fas fa-battery-full text-4xl text-blue-600 mb-4"></i>
                    <h3 class="font-semibold">Power Banks</h3>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center card-hover">
                    <i class="fas fa-headphones text-4xl text-blue-600 mb-4"></i>
                    <h3 class="font-semibold">Wireless Earbuds</h3>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center card-hover">
                    <i class="fas fa-watch text-4xl text-blue-600 mb-4"></i>
                    <h3 class="font-semibold">Smartwatches</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h4 class="text-xl font-bold mb-4">Tech Gadget LK</h4>
                    <p class="text-gray-400">Your one-stop shop for premium mobile accessories in Sri Lanka.</p>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Products</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-4">Contact</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><i class="fas fa-phone mr-2"></i>+94 768400317</li>
                        <li><i class="fas fa-envelope mr-2"></i>info@techgadgetlk.com</li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-4">Follow Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook text-2xl"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram text-2xl"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter text-2xl"></i></a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 Tech Gadget LK. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Add smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Add mobile menu functionality
        const mobileMenu = () => {
            const menu = document.querySelector('.mobile-menu');
            menu.classList.toggle('hidden');
        };
    </script>
</body>
</html>