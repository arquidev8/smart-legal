<!DOCTYPE html>
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
</html>