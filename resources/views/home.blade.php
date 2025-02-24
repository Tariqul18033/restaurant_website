@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="relative h-[600px]">
    <div class="absolute inset-0">
        <img src="/images/hero.jpg" class="w-full h-full object-cover" alt="Restaurant interior">
        <div class="absolute inset-0 bg-black opacity-50"></div>
    </div>
    <div class="relative max-w-7xl mx-auto px-4 h-full flex items-center">
        <div class="text-white">
            <h1 class="text-5xl font-bold mb-4">Welcome to Our Restaurant</h1>
            <p class="text-xl mb-8">Experience fine dining at its best</p>
            <a href="{{ route('reservations.create') }}" 
               class="bg-white text-gray-900 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100">
                Make a Reservation
            </a>
        </div>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 py-16">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="text-center">
            <h2 class="text-2xl font-semibold mb-4">Our Menu</h2>
            <p class="mb-4">Explore our carefully crafted menu featuring both classic and innovative dishes.</p>
            <a href="{{ route('menu') }}" class="text-blue-600 hover:text-blue-800">View Menu →</a>
        </div>
        <div class="text-center">
            <h2 class="text-2xl font-semibold mb-4">Special Events</h2>
            <p class="mb-4">Host your special occasions with us. We offer custom menus and private dining.</p>
            <a href="#" class="text-blue-600 hover:text-blue-800">Learn More →</a>
        </div>
        <div class="text-center">
            <h2 class="text-2xl font-semibold mb-4">Reservations</h2>
            <p class="mb-4">Book your table online and enjoy a memorable dining experience.</p>
            <a href="{{ route('reservations.create') }}" class="text-blue-600 hover:text-blue-800">Book Now →</a>
        </div>
    </div>
</div>
@endsection