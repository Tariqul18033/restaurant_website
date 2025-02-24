<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X Restaurant- @yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50">
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <span class="text-xl font-bold">X Restaurant</span>
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-gray-900">Home</a>
                    <a href="{{ route('menu') }}" class="text-gray-700 hover:text-gray-900">Menu</a>
                    <a href="{{ route('reservations.create') }}" class="text-gray-700 hover:text-gray-900">Reservations</a>
                    <a href="{{ route('contact') }}" class="text-gray-700 hover:text-gray-900">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white mt-12">
        <div class="max-w-7xl mx-auto px-4 py-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">Hours</h3>
                    <p>Monday - Friday: 11am - 10pm</p>
                    <p>Saturday - Sunday: 10am - 11pm</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact</h3>
                    <p>123 Restaurant Street</p>
                    <p>City, State 12345</p>
                    <p>Phone: (555) 123-4567</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="hover:text-gray-300">Facebook</a>
                        <a href="#" class="hover:text-gray-300">Instagram</a>
                        <a href="#" class="hover:text-gray-300">Twitter</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>