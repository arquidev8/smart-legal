{{-- <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>SmartLegal Portfolio</title>
</head>
<body class="bg-gray-100 text-gray-800">
    <header class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">SmartLegal</h1>
            <div>
                <a href="{{ url('locale/es') }}" class="px-4">Español</a>
                <a href="{{ url('locale/en') }}" class="px-4">English</a>
            </div>
        </div>
    </header>

    <main class="container mx-auto p-4">
        <section id="about" class="my-8">
            <h2 class="text-xl font-bold mb-4">{{ __('About Us') }}</h2>
            <p>{{ __('At SmartLegal, we are a boutique law firm and consultancy in Spain dedicated to providing intelligent and cost-efficient legal and business solutions. Our team consists of native English, Spanish, and Catalan-speaking lawyers and consultants, equipped to assist non-resident clients with a variety of matters, such as purchasing property, relocating to Spain, or establishing a business.') }}</p>
        </section>

        <section id="services" class="my-8">
            <h2 class="text-xl font-bold mb-4">{{ __('Service Areas') }}</h2>
            <ul class="list-disc pl-5">
                <li>{{ __('Real Estate Law: We offer comprehensive advice on the purchase, sale, and management of properties.') }}</li>
                <li>{{ __('Commercial Law: We provide legal solutions for businesses, from company formation to drafting and reviewing contracts.') }}</li>
                <li>{{ __('Civil Law: We assist with a wide range of civil matters, including contract disputes, liability issues, and inheritance cases.') }}</li>
                <li>{{ __('Regulatory Compliance: We help your business comply with local and international regulations.') }}</li>
                <li>{{ __('Business Advisory: We offer strategic consultancy to help your business grow and thrive.') }}</li>
                <li>{{ __('Business Brokerage: We facilitate the buying and selling of businesses.') }}</li>
                <li>{{ __('Business Development: We assist in the expansion and development of your business.') }}</li>
            </ul>
        </section>

        <section id="contact" class="my-8">
            <h2 class="text-xl font-bold mb-4">{{ __('Contact') }}</h2>
            <p>{{ __('Do you have any questions or need assistance? Feel free to get in touch with us.') }}</p>
        </section>
    </main>

    <footer class="bg-blue-600 text-white p-4 text-center">
        <p>&copy; 2024 SmartLegal. All rights reserved.</p>
    </footer>
</body>
</html> --}}





{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>{{ __('SmartLegal Portfolio') }}</title>
</head>
<body class="bg-gray-100 text-gray-800">
    <header class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">{{ __('SmartLegal') }}</h1>
            <div>
                <a href="{{ route('locale.switch', 'es') }}" class="px-4">Español</a>
                <a href="{{ route('locale.switch', 'en') }}" class="px-4">English</a>
            </div>
        </div>
    </header>

    <main class="container mx-auto p-4">
        <section id="about" class="my-8">
            <h2 class="text-xl font-bold mb-4">{{ __('About Us') }}</h2>
            <p>{{ __('At SmartLegal, we are a boutique law firm and consultancy in Spain dedicated to providing intelligent and cost-efficient legal and business solutions. Our team consists of native English, Spanish, and Catalan-speaking lawyers and consultants, equipped to assist non-resident clients with a variety of matters, such as purchasing property, relocating to Spain, or establishing a business.') }}</p>
        </section>

        <section id="services" class="my-8">
            <h2 class="text-xl font-bold mb-4">{{ __('Service Areas') }}</h2>
            <ul class="list-disc pl-5">
                <li>{{ __('Real Estate Law: We offer comprehensive advice on the purchase, sale, and management of properties.') }}</li>
                <li>{{ __('Commercial Law: We provide legal solutions for businesses, from company formation to drafting and reviewing contracts.') }}</li>
                <li>{{ __('Civil Law: We assist with a wide range of civil matters, including contract disputes, liability issues, and inheritance cases.') }}</li>
                <li>{{ __('Regulatory Compliance: We help your business comply with local and international regulations.') }}</li>
                <li>{{ __('Business Advisory: We offer strategic consultancy to help your business grow and thrive.') }}</li>
                <li>{{ __('Business Brokerage: We facilitate the buying and selling of businesses.') }}</li>
                <li>{{ __('Business Development: We assist in the expansion and development of your business.') }}</li>
            </ul>
        </section>

        <section id="contact" class="my-8">
            <h2 class="text-xl font-bold mb-4">{{ __('Contact') }}</h2>
            <p>{{ __('Do you have any questions or need assistance? Feel free to get in touch with us.') }}</p>
        </section>
    </main>

    <footer class="bg-blue-600 text-white p-4 text-center">
        <p>&copy; 2024 SmartLegal. {{ __('All rights reserved.') }}</p>
    </footer>
</body>
</html> --}}


{{-- 

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine.js" integrity="sha512-nIwdJlD5/vHj23CbO2iHCXtsqzdTTx3e3uAmpTm4x2Y8xCIFyWu4cSIV8GaGe2UNVq86/1h9EgUZy7tn243qdA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <title>{{ __('SmartLegal Portfolio') }}</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@300;400;700&display=swap');
        
        body {
            font-family: 'Roboto', sans-serif;
        }
        
        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    <header class="bg-gradient-to-r from-blue-800 to-blue-600 text-white" x-data="{ isOpen: false }">
        <nav class="container mx-auto px-6 py-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <a href="#" class="text-2xl font-bold">
                        <i class="fas fa-balance-scale mr-2"></i>
                        {{ __('SmartLegal') }}
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#about" class="text-sm hover:text-blue-200 transition">{{ __('About Us') }}</a>
                    <a href="#services" class="text-sm hover:text-blue-200 transition">{{ __('Services') }}</a>
                    <a href="#contact" class="text-sm hover:text-blue-200 transition">{{ __('Contact') }}</a>
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="flex items-center text-sm hover:text-blue-200 transition">
                            <span>{{ __('Language') }}</span>
                            <svg class="ml-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20">
                            <a href="{{ route('locale.switch', 'es') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-500 hover:text-white">Español</a>
                            <a href="{{ route('locale.switch', 'en') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-500 hover:text-white">English</a>
                        </div>
                    </div>
                </div>
                <div class="md:hidden flex items-center">
                    <button @click="isOpen = !isOpen" class="outline-none mobile-menu-button">
                        <svg class="w-6 h-6 text-white" x-show="!isOpen" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg class="w-6 h-6 text-white" x-show="isOpen" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="mobile-menu" x-show="isOpen" @click.away="isOpen = false">
                <div class="flex flex-col mt-4 space-y-4">
                    <a href="#about" class="text-sm hover:text-blue-200 transition">{{ __('About Us') }}</a>
                    <a href="#services" class="text-sm hover:text-blue-200 transition">{{ __('Services') }}</a>
                    <a href="#contact" class="text-sm hover:text-blue-200 transition">{{ __('Contact') }}</a>
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="flex items-center text-sm hover:text-blue-200 transition">
                            <span>{{ __('Language') }}</span>
                            <svg class="ml-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="open" @click.away="open = false" class="mt-2 py-2 w-48 bg-blue-700 rounded-md shadow-xl">
                            <a href="{{ route('locale.switch', 'es') }}" class="block px-4 py-2 text-sm hover:bg-blue-600">Español</a>
                            <a href="{{ route('locale.switch', 'en') }}" class="block px-4 py-2 text-sm hover:bg-blue-600">English</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mx-auto px-6 py-8">
        <section id="hero" class="text-center py-20 bg-gradient-to-r from-blue-100 to-blue-50 rounded-lg shadow-md mb-12">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 text-blue-900">{{ __('Intelligent Legal Solutions') }}</h1>
            <p class="text-xl text-blue-700 mb-8">{{ __('Your trusted partner for legal and business consultancy in Spain') }}</p>
            <a href="#contact" class="bg-blue-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-blue-700 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                {{ __('Get in Touch') }}
            </a>
        </section>

        <section id="about" class="my-16">
            <h2 class="text-3xl font-bold mb-6 text-blue-900 border-b-2 border-blue-200 pb-2">{{ __('About Us') }}</h2>
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-6 md:mb-0 md:pr-8">
                    <p class="text-lg leading-relaxed">
                        {{ __('At SmartLegal, we are a boutique law firm and consultancy in Spain dedicated to providing intelligent and cost-efficient legal and business solutions. Our team consists of native English, Spanish, and Catalan-speaking lawyers and consultants, equipped to assist non-resident clients with a variety of matters, such as purchasing property, relocating to Spain, or establishing a business.') }}
                    </p>
                </div>
                <div class="md:w-1/2">
                    <img src="/api/placeholder/600/400" alt="SmartLegal Team" class="rounded-lg shadow-md">
                </div>
            </div>
        </section>

        <section id="services" class="my-16">
            <h2 class="text-3xl font-bold mb-6 text-blue-900 border-b-2 border-blue-200 pb-2">{{ __('Service Areas') }}</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <i class="fas fa-home text-3xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">{{ __('Real Estate Law') }}</h3>
                    <p>{{ __('We offer comprehensive advice on the purchase, sale, and management of properties.') }}</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <i class="fas fa-briefcase text-3xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">{{ __('Commercial Law') }}</h3>
                    <p>{{ __('We provide legal solutions for businesses, from company formation to drafting and reviewing contracts.') }}</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <i class="fas fa-gavel text-3xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">{{ __('Civil Law') }}</h3>
                    <p>{{ __('We assist with a wide range of civil matters, including contract disputes, liability issues, and inheritance cases.') }}</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <i class="fas fa-clipboard-check text-3xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">{{ __('Regulatory Compliance') }}</h3>
                    <p>{{ __('We help your business comply with local and international regulations.') }}</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <i class="fas fa-chart-line text-3xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">{{ __('Business Advisory') }}</h3>
                    <p>{{ __('We offer strategic consultancy to help your business grow and thrive.') }}</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <i class="fas fa-handshake text-3xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">{{ __('Business Brokerage') }}</h3>
                    <p>{{ __('We facilitate the buying and selling of businesses.') }}</p>
                </div>
            </div>
        </section>

        <section id="contact" class="my-16 bg-blue-50 p-8 rounded-lg shadow-md">
            <h2 class="text-3xl font-bold mb-6 text-blue-900 border-b-2 border-blue-200 pb-2">{{ __('Contact Us') }}</h2>
            <div class="flex flex-col md:flex-row justify-between items-start">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <p class="text-lg mb-4">{{ __('Do you have any questions or need assistance? Feel free to get in touch with us.') }}</p>
                    <ul class="space-y-2">
                        <li>
                            <i class="fas fa-map-marker-alt text-blue-600 mr-2"></i>
                            123 Legal Street, Barcelona, Spain
                        </li>
                        <li>
                            <i class="fas fa-phone text-blue-600 mr-2"></i>
                            +34 123 456 789
                        </li>
                        <li>
                            <i class="fas fa-envelope text-blue-600 mr-2"></i>
                            info@smartlegal.com
                        </li>
                    </ul>
                </div>
                <div class="md:w-1/2">
                    <form class="space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Name') }}</label>
                            <input type="text" id="name" name="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email') }}</label>
                            <input type="email" id="email" name="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ringfocus:ring-blue-200 focus:ring-opacity-50">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700">{{ __('Message') }}</label>
                            <textarea id="message" name="message" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition duration-300">
                                {{ __('Send Message') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-blue-900 text-white py-8">
        <div class="container mx-auto px-6">
            <div class="flex flex-wrap justify-between">
                <div class="w-full md:w-1/4 mb-6 md:mb-0">
                    <h3 class="text-xl font-bold mb-4">{{ __('SmartLegal') }}</h3>
                    <p class="text-sm">{{ __('Your trusted partner for legal and business consultancy in Spain') }}</p>
                </div>
                <div class="w-full md:w-1/4 mb-6 md:mb-0">
                    <h3 class="text-xl font-bold mb-4">{{ __('Quick Links') }}</h3>
                    <ul class="text-sm">
                        <li class="mb-2"><a href="#about" class="hover:text-blue-300">{{ __('About Us') }}</a></li>
                        <li class="mb-2"><a href="#services" class="hover:text-blue-300">{{ __('Services') }}</a></li>
                        <li class="mb-2"><a href="#contact" class="hover:text-blue-300">{{ __('Contact') }}</a></li>
                    </ul>
                </div>
                <div class="w-full md:w-1/4 mb-6 md:mb-0">
                    <h3 class="text-xl font-bold mb-4">{{ __('Connect With Us') }}</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-2xl hover:text-blue-300"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-2xl hover:text-blue-300"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-2xl hover:text-blue-300"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="w-full md:w-1/4">
                    <h3 class="text-xl font-bold mb-4">{{ __('Languages') }}</h3>
                    <div class="flex space-x-4">
                        <a href="{{ route('locale.switch', 'es') }}" class="hover:text-blue-300">Español</a>
                        <a href="{{ route('locale.switch', 'en') }}" class="hover:text-blue-300">English</a>
                    </div>
                </div>
            </div>
            <div class="border-t border-blue-800 mt-8 pt-8 text-sm text-center">
                <p>&copy; 2024 SmartLegal. {{ __('All rights reserved.') }}</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html> --}}







{{-- 
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine.js" integrity="sha512-nIwdJlD5/vHj23CbO2iHCXtsqzdTTx3e3uAmpTm4x2Y8xCIFyWu4cSIV8GaGe2UNVq86/1h9EgUZy7tn243qdA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <title>{{ __('SmartLegal Portfolio') }}</title>
</head>
<body class="bg-gray-50 text-gray-800">
    <header class="bg-gradient-to-r from-blue-800 to-blue-600 text-white" x-data="{ isOpen: false }">
        <nav class="container mx-auto px-6 py-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <a href="#" class="text-2xl font-bold">
                        <i class="fas fa-balance-scale mr-2"></i>
                        {{ __('SmartLegal') }}
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#about" class="text-sm hover:text-blue-200 transition">{{ __('About Us') }}</a>
                    <a href="#services" class="text-sm hover:text-blue-200 transition">{{ __('Services') }}</a>
                    <a href="#contact" class="text-sm hover:text-blue-200 transition">{{ __('Contact') }}</a>
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="flex items-center text-sm hover:text-blue-200 transition">
                            <span>{{ __('Language') }}</span>
                            <svg class="ml-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20">
                            <a href="{{ route('locale.switch', 'es') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-500 hover:text-white">Español</a>
                            <a href="{{ route('locale.switch', 'en') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-500 hover:text-white">English</a>
                        </div>
                    </div>
                </div>
                <div class="md:hidden flex items-center">
                    <button @click="isOpen = !isOpen" class="outline-none mobile-menu-button">
                        <svg class="w-6 h-6 text-white" x-show="!isOpen" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg class="w-6 h-6 text-white" x-show="isOpen" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="mobile-menu" x-show="isOpen" @click.away="isOpen = false">
                <div class="flex flex-col mt-4 space-y-4">
                    <a href="#about" class="text-sm hover:text-blue-200 transition">{{ __('About Us') }}</a>
                    <a href="#services" class="text-sm hover:text-blue-200 transition">{{ __('Services') }}</a>
                    <a href="#contact" class="text-sm hover:text-blue-200 transition">{{ __('Contact') }}</a>
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="flex items-center text-sm hover:text-blue-200 transition">
                            <span>{{ __('Language') }}</span>
                            <svg class="ml-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="open" @click.away="open = false" class="mt-2 py-2 w-48 bg-blue-700 rounded-md shadow-xl">
                            <a href="{{ route('locale.switch', 'es') }}" class="block px-4 py-2 text-sm hover:bg-blue-600">Español</a>
                            <a href="{{ route('locale.switch', 'en') }}" class="block px-4 py-2 text-sm hover:bg-blue-600">English</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mx-auto px-6 py-8">
        <section id="hero" class="text-center py-20 bg-gradient-to-r from-blue-100 to-blue-50 rounded-lg shadow-md mb-12">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 text-blue-900">{{ __('Intelligent Legal Solutions') }}</h1>
            <p class="text-xl text-blue-700 mb-8">{{ __('Your trusted partner for legal and business consultancy in Spain') }}</p>
            <a href="#contact" class="bg-blue-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-blue-700 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                {{ __('Get in Touch') }}
            </a>
        </section>

        <section id="about" class="my-16">
            <h2 class="text-3xl font-bold mb-6 text-blue-900 border-b-2 border-blue-200 pb-2">{{ __('About Us') }}</h2>
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-6 md:mb-0 md:pr-8">
                    <p class="text-lg leading-relaxed">
                        {{ __('At SmartLegal, we are a boutique law firm and consultancy in Spain dedicated to providing intelligent and cost-efficient legal and business solutions. Our team consists of native English, Spanish, and Catalan-speaking lawyers and consultants, equipped to assist non-resident clients with a variety of matters, such as purchasing property, relocating to Spain, or establishing a business.') }}
                    </p>
                </div>
                <div class="md:w-1/2">
                    <img src="/api/placeholder/600/400" alt="{{ __('SmartLegal Team') }}" class="rounded-lg shadow-md">
                </div>
            </div>
        </section>

        <section id="services" class="my-16">
            <h2 class="text-3xl font-bold mb-6 text-blue-900 border-b-2 border-blue-200 pb-2">{{ __('Service Areas') }}</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <i class="fas fa-home text-3xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">{{ __('Real Estate Law') }}</h3>
                    <p>{{ __('We offer comprehensive advice on the purchase, sale, and management of properties.') }}</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <i class="fas fa-briefcase text-3xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">{{ __('Commercial Law') }}</h3>
                    <p>{{ __('We provide legal solutions for businesses, from company formation to drafting and reviewing contracts.') }}</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <i class="fas fa-gavel text-3xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">{{ __('Civil Law') }}</h3>
                    <p>{{ __('We assist with a wide range of civil matters, including contract disputes, liability issues, and inheritance cases.') }}</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <i class="fas fa-clipboard-check text-3xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">{{ __('Regulatory Compliance') }}</h3>
                    <p>{{ __('We help your business comply with local and international regulations.') }}</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <i class="fas fa-chart-line text-3xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">{{ __('Business Advisory') }}</h3>
                    <p>{{ __('We offer strategic consultancy to help your business grow and thrive.') }}</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <i class="fas fa-handshake text-3xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">{{ __('Business Brokerage') }}</h3>
                    <p>{{ __('We facilitate the buying and selling of businesses.') }}</p>
                </div>
            </div>
        </section>

        <section id="contact" class="my-16 bg-blue-50 p-8 rounded-lg shadow-md">
            <h2 class="text-3xl font-bold mb-6 text-blue-900 border-b-2 border-blue-200 pb-2">{{ __('Contact Us') }}</h2>
            <div class="flex flex-col md:flex-row justify-between items-start">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <p class="text-lg mb-4">{{ __('Do you have any questions or need assistance? Feel free to get in touch with us.') }}</p>
                    <ul class="space-y-2">
                        <li>
                            <i class="fas fa-map-marker-alt text-blue-600 mr-2"></i>
                            {{ __('123 Legal Street, Barcelona, Spain') }}
                        </li>
                        <li>
                            <i class="fas fa-phone text-blue-600 mr-2"></i>
                            {{ __('+34 123 456 789') }}
                        </li>
                        <li>
                            <i class="fas fa-envelope text-blue-600 mr-2"></i>
                            <a href="mailto:info@smartlegal.com" class="text-blue-600 hover:underline">info@smartlegal.com</a>
                        </li>
                    </ul>
                </div>
                <div class="md:w-1/2">
                    <form class="space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Name') }}</label>
                            <input type="text" id="name" name="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email') }}</label>
                            <input type="email" id="email" name="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700">{{ __('Message') }}</label>
                            <textarea id="message" name="message" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition duration-300">
                                {{ __('Send Message') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-blue-900 text-white py-8">
        <div class="container mx-auto px-6">
            <div class="flex flex-wrap justify-between">
                <div class="w-full md:w-1/4 mb-6 md:mb-0">
                    <h3 class="text-xl font-bold mb-4">{{ __('SmartLegal') }}</h3>
                    <p class="text-sm">{{ __('Your trusted partner for legal and business consultancy in Spain') }}</p>
                </div>
                <div class="w-full md:w-1/4 mb-6 md:mb-0">
                    <h3 class="text-xl font-bold mb-4">{{ __('Quick Links') }}</h3>
                    <ul class="text-sm">
                        <li class="mb-2"><a href="#about" class="hover:text-blue-300">{{ __('About Us') }}</a></li>
                        <li class="mb-2"><a href="#services" class="hover:text-blue-300">{{ __('Services') }}</a></li>
                        <li class="mb-2"><a href="#contact" class="hover:text-blue-300">{{ __('Contact') }}</a></li>
                    </ul>
                </div>
                <div class="w-full md:w-1/4 mb-6 md:mb-0">
                    <h3 class="text-xl font-bold mb-4">{{ __('Connect With Us') }}</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-2xl hover:text-blue-300"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-2xl hover:text-blue-300"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-2xl hover:text-blue-300"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="w-full md:w-1/4">
                    <h3 class="text-xl font-bold mb-4">{{ __('Languages') }}</h3>
                    <div class="flex space-x-4">
                        <a href="{{ route('locale.switch', 'es') }}" class="hover:text-blue-300">Español</a>
                        <a href="{{ route('locale.switch', 'en') }}" class="hover:text-blue-300">English</a>
                    </div>
                </div>
            </div>
            <div class="border-t border-blue-800 mt-8 pt-8 text-sm text-center">
                <p>&copy; 2024 SmartLegal. {{ __('All rights reserved.') }}</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html> --}}








<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine.js" integrity="sha512-nIwdJlD5/vHj23CbO2iHCXtsqzdTTx3e3uAmpTm4x2Y8xCIFyWu4cSIV8GaGe2UNVq86/1h9EgUZy7tn243qdA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <title>{{ __('SmartLegal Portfolio') }}</title>
</head>
<body class="bg-gray-50 text-gray-800">
    <header class="bg-gradient-to-r from-blue-800 to-blue-600 text-white" x-data="{ isOpen: false }">
        <nav class="container mx-auto px-6 py-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <a href="#" class="text-2xl font-bold">
                        <i class="fas fa-balance-scale mr-2"></i> {{ __('SmartLegal') }}
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#about" class="text-sm hover:text-blue-200 transition">{{ __('About Us') }}</a>
                    <a href="#services" class="text-sm hover:text-blue-200 transition">{{ __('Services') }}</a>
                    <a href="#contact" class="text-sm hover:text-blue-200 transition">{{ __('Contact') }}</a>
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="flex items-center text-sm hover:text-blue-200 transition">
                            <span>{{ __('Language') }}</span>
                            <svg class="ml-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20">
                            <a href="{{ route('locale.switch', 'es') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-500 hover:text-white">Español</a>
                            <a href="{{ route('locale.switch', 'en') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-500 hover:text-white">English</a>
                        </div>
                    </div>
                </div>
                <div class="md:hidden flex items-center">
                    <button @click="isOpen = !isOpen" class="outline-none mobile-menu-button">
                        <svg class="w-6 h-6 text-white" x-show="!isOpen" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg class="w-6 h-6 text-white" x-show="isOpen" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="mobile-menu" x-show="isOpen" @click.away="isOpen = false">
                <div class="flex flex-col mt-4 space-y-4">
                    <a href="#about" class="text-sm hover:text-blue-200 transition">{{ __('About Us') }}</a>
                    <a href="#services" class="text-sm hover:text-blue-200 transition">{{ __('Services') }}</a>
                    <a href="#contact" class="text-sm hover:text-blue-200 transition">{{ __('Contact') }}</a>
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="flex items-center text-sm hover:text-blue-200 transition">
                            <span>{{ __('Language') }}</span>
                            <svg class="ml-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="open" @click.away="open = false" class="mt-2 py-2 w-48 bg-blue-700 rounded-md shadow-xl">
                            <a href="{{ route('locale.switch', 'es') }}" class="block px-4 py-2 text-sm hover:bg-blue-600">Español</a>
                            <a href="{{ route('locale.switch', 'en') }}" class="block px-4 py-2 text-sm hover:bg-blue-600">English</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="container mx-auto px-6 py-8">
        {{-- <section id="hero" class="text-center py-20 bg-gradient-to-r from-blue-100 to-blue-50 rounded-lg shadow-md mb-12">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 text-blue-900">{{ __('Intelligent Legal Solutions') }}</h1>
            <p class="text-xl text-blue-700 mb-8">{{ __('Your trusted partner for legal and business consultancy in Spain') }}</p>
            <a href="#contact" class="bg-blue-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-blue-700 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                {{ __('Get in Touch') }}
            </a>
        </section> --}}

        <section id="hero" class="relative overflow-hidden">
            <div class="absolute inset-0 z-0">
                <div class="absolute inset-0 bg-cover bg-center blur-sm" style="background-image: url('https://i.postimg.cc/HWR6qV7S/pexels-sora-shimazaki-5668481.jpg');">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-700/80 to-blue-500/60"></div>
                </div>
                <div class="absolute inset-0 bg-gradient-to-b from-blue-900/20 to-blue-700/40 blur-xl animate-pulse"></div>
            </div>
            <div class="container mx-auto px-4 md:px-8 lg:px-16 py-24 md:py-32 lg:py-40 relative z-10">
                <div class="text-center">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-extrabold text-white mb-4 md:mb-6">{{ __('Intelligent Legal Solutions') }}</h1>
                    <p class="text-lg md:text-xl lg:text-2xl text-blue-200 mb-8 md:mb-10">{{ __('Your trusted partner for legal and business consultancy in Spain') }}</p>
                    <a href="#contact" class="inline-block bg-blue-600 hover:bg-blue-500 text-white px-8 py-4 rounded-lg font-semibold transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 shadow-lg">{{ __('Get in Touch') }}</a>
                </div>
            </div>
          
        </section>
        
        
        
        <section id="about" class="my-16">
            <h2 class="text-3xl font-bold mb-6 text-blue-900 border-b-2 border-blue-200 pb-2">{{ __('About Us') }}</h2>
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-6 md:mb-0 md:pr-8">
                    <p class="text-lg leading-relaxed text-justify">
                        {{ __('At SmartLegal, we are a boutique law firm and consultancy in Spain dedicated to providing intelligent and cost-efficient legal and business solutions. Our team consists of native English, Spanish, and Catalan-speaking lawyers and consultants, equipped to assist non-resident clients with a variety of matters, such as purchasing property, relocating to Spain, or establishing a business.') }}
                    </p>
                </div>
                <div class="md:w-1/2">
                    <img src="https://i.postimg.cc/3RvCDVpM/pexels-august-de-richelieu-4427430.jpg" alt="{{ __('SmartLegal Team') }}" class="rounded-lg shadow-md">
                </div>
            </div>
        </section>
        <section id="services" class="my-16">
            <h2 class="text-3xl font-bold mb-6 text-blue-900 border-b-2 border-blue-200 pb-2">{{ __('Service Areas') }}</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <i class="fas fa-home text-3xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">{{ __('Real Estate Law') }}</h3>
                    <p>{{ __('We offer comprehensive advice on the purchase, sale, and management of properties.') }}</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <i class="fas fa-briefcase text-3xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">{{ __('Commercial Law') }}</h3>
                    <p>{{ __('We provide legal solutions for businesses, from company formation to drafting and reviewing contracts.') }}</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <i class="fas fa-gavel text-3xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">{{ __('Civil Law') }}</h3>
                    <p>{{ __('We assist with a wide range of civil matters, including contract disputes, liability issues, and inheritance cases.') }}</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <i class="fas fa-clipboard-check text-3xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">{{ __('Regulatory Compliance') }}</h3>
                    <p>{{ __('We help your business comply with local and international regulations.') }}</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <i class="fas fa-chart-line text-3xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">{{ __('Business Advisory') }}</h3>
                    <p>{{ __('We offer strategic consultancy to help your business grow and thrive.') }}</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <i class="fas fa-handshake text-3xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">{{ __('Business Brokerage') }}</h3>
                    <p>{{ __('We facilitate the buying and selling of businesses.') }}</p>
                </div>
            </div>
        </section>
        <section id="contact" class="my-16 bg-blue-50 p-8 rounded-lg shadow-md">
            <h2 class="text-3xl font-bold mb-6 text-blue-900 border-b-2 border-blue-200 pb-2">{{ __('Contact Us') }}</h2>
            <div class="flex flex-col md:flex-row justify-between items-start">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <p class="text-lg mb-4">{{ __('Do you have any questions or need assistance? Feel free to get in touch with us.') }}</p>
                    <ul class="space-y-2">
                        <li>
                            <i class="fas fa-map-marker-alt text-blue-600 mr-2"></i> {{ __('123 Legal Street, Barcelona, Spain') }}
                        </li>
                        <li>
                            <i class="fas fa-phone text-blue-600 mr-2"></i> {{ __('+34 123 456 789') }}
                        </li>
                        <li>
                            <i class="fas fa-envelope text-blue-600 mr-2"></i>
                            <a href="mailto:info@smartlegal.com" class="text-blue-600 hover:underline">info@smartlegal.com</a>
                        </li>
                    </ul>
                </div>
                <div class="md:w-1/2">
                    <form class="space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Name') }}</label>
                            <input type="text" id="name" name="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email') }}</label>
                            <input type="email" id="email" name="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700">{{ __('Message') }}</label>
                            <textarea id="message" name="message" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition duration-300">
                                {{ __('Send Message') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer class="bg-blue-900 text-white py-8">
        <div class="container
mx-auto px-6">
            <div class="flex flex-wrap justify-between">
                <div class="w-full md:w-1/4 mb-6 md:mb-0">
                    <h3 class="text-xl font-bold mb-4">{{ __('SmartLegal') }}</h3>
                    <p class="text-sm">{{ __('Your trusted partner for legal and business consultancy in Spain') }}</p>
                </div>
                <div class="w-full md:w-1/4 mb-6 md:mb-0">
                    <h3 class="text-xl font-bold mb-4">{{ __('Quick Links') }}</h3>
                    <ul class="text-sm">
                        <li class="mb-2"><a href="#about" class="hover:text-blue-300">{{ __('About Us') }}</a></li>
                        <li class="mb-2"><a href="#services" class="hover:text-blue-300">{{ __('Services') }}</a></li>
                        <li class="mb-2"><a href="#contact" class="hover:text-blue-300">{{ __('Contact') }}</a></li>
                    </ul>
                </div>
                <div class="w-full md:w-1/4 mb-6 md:mb-0">
                    <h3 class="text-xl font-bold mb-4">{{ __('Connect With Us') }}</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-2xl hover:text-blue-300"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-2xl hover:text-blue-300"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-2xl hover:text-blue-300"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="w-full md:w-1/4">
                    <h3 class="text-xl font-bold mb-4">{{ __('Languages') }}</h3>
                    <div class="flex space-x-4">
                        <a href="{{ route('locale.switch', 'es') }}" class="hover:text-blue-300">Español</a>
                        <a href="{{ route('locale.switch', 'en') }}" class="hover:text-blue-300">English</a>
                    </div>
                </div>
            </div>
            <div class="border-t border-blue-800 mt-8 pt-8 text-sm text-center">
                <p>&copy; 2024 SmartLegal. {{ __('All rights reserved.') }}</p>
            </div>
        </div>
    </footer>
    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
