<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Tech Gadget LK</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html, body {
            height: 100%;
            overflow-y: auto;
            scroll-behavior: smooth;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #EDF2F7 0%, #E2E8F0 100%);
            position: relative;
            min-height: 100%;
            overflow-y: auto;
        }
        
        .gradient-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 50% 50%, rgba(66, 153, 225, 0.1) 0%, transparent 50%);
            pointer-events: none;
        }

        .vision-card {
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
        }

        .vision-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.12);
        }

        .text-gradient {
            background: linear-gradient(90deg, #3182CE, #5A67D8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            position: relative;
        }

        .value-card {
            transition: all 0.3s ease;
            border: 1px solid rgba(66, 153, 225, 0.1);
            background: white;
        }

        .value-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            border-color: #3182CE;
        }

        .decorative-line {
            height: 3px;
            background: linear-gradient(90deg, transparent, #3182CE, transparent);
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        .float-animation {
            animation: float 6s ease-in-out infinite;
        }

        /* Add custom scrollbar */
        ::-webkit-scrollbar {
            width: 12px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #3182CE;
            border-radius: 6px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #2c5282;
        }
    </style>
</head>
<body class="gradient-bg min-h-screen">
    <div class="container mx-auto px-4 py-12 max-w-4xl">
        <header class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 text-gradient">Our Vision</h1>
            <div class="w-24 h-1 bg-blue-600 mx-auto rounded-full"></div>
        </header>

        <div class="vision-card bg-white rounded-2xl p-8 md:p-12">
            <div class="prose max-w-none">
                <p class="text-lg md:text-xl text-gray-700 leading-relaxed mb-8">
                    To be the most trusted online store for mobile accessories in Sri Lanka by delivering products that combine innovation, durability, and style, while prioritizing customer satisfaction at every step.
                </p>

                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Our Core Values</h2>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="p-6 bg-blue-50 rounded-xl">
                        <h3 class="text-xl font-semibold text-blue-700 mb-3">Quality Excellence</h3>
                        <p class="text-gray-600">We carefully source our products to meet the highest standards of durability and performance.</p>
                    </div>

                    <div class="p-6 bg-blue-50 rounded-xl">
                        <h3 class="text-xl font-semibold text-blue-700 mb-3">Affordability</h3>
                        <p class="text-gray-600">Premium accessories don't need to break the bank – we keep our prices budget-friendly.</p>
                    </div>

                    <div class="p-6 bg-blue-50 rounded-xl">
                        <h3 class="text-xl font-semibold text-blue-700 mb-3">Customer First</h3>
                        <p class="text-gray-600">From browsing to doorstep delivery, we make your shopping experience smooth and efficient.</p>
                    </div>

                    <div class="p-6 bg-blue-50 rounded-xl">
                        <h3 class="text-xl font-semibold text-blue-700 mb-3">Innovation</h3>
                        <p class="text-gray-600">We stay ahead of trends to bring you the latest and most innovative mobile accessories.</p>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center">
                <p class="text-2xl font-bold text-gray-800 mb-4">Tech Gadget LK</p>
                <p class="text-lg text-gray-600 italic">Where Quality Meets Style</p>
            </div>
        </div>
    </div>
</body>
</html>