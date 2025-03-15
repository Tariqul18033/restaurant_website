@extends('layouts.app')

@section('title', 'Make a Reservation')

@section('content')
<div class="max-w-2xl mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold text-center mb-8">Make a Reservation</h1>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('reservations.store') }}" method="POST" class="space-y-6">
        @csrf
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" required
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" required
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
        </div>

        <div>
            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
            <input type="tel" name="phone" id="phone" required
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
        </div>

        <div>
            <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
            <input type="date" name="date" id="date" required
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
        </div>

        <div>
            <label for="item" class="block text-sm font-medium text-gray-700">Time</label>
            <select name="item" id="item" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                <option value="">Select a item</option>
                <option value="Item_1">Item 1</option>
                <option value="Item_2">Item 2</option>
                <option value="Item_3">Item 3</option>
                <option value="Item_4">Item 4</option>
                <option value="Item_5">Item 5</option>
                <option value="Item_6">Item 6</option>
                <option value="Item_7">Item 7</option>
                <option value="Item_8">Item 8</option>
                <option value="Item_9">Item 9</option>
            </select>
        </div>

        <div>
            <label for="guests" class="block text-sm font-medium text-gray-700">Number of Guests</label>
            <select name="guests" id="guests" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                @for($i = 1; $i <= 10; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>

        <button type="submit" 
                class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700">
            Order a Home Delivery
        </button>
    </form>
</div>
@endsection