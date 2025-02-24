@extends('layouts.app')

@section('title', 'Menu')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold text-center mb-12">Our Menu</h1>

    @foreach($menuItems as $category => $items)
        <div class="mb-12">
            <h2 class="text-2xl font-semibold mb-6">{{ $category }}</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach($items as $item)
                    <div class="flex space-x-4">
                        @if($item->image)
                            <img src="{{ $item->image }}" alt="{{ $item->name }}" 
                                 class="w-24 h-24 object-cover rounded">
                        @endif
                        <div>
                            <h3 class="text-xl font-medium">{{ $item->name }}</h3>
                            <p class="text-gray-600 mb-2">{{ $item->description }}</p>
                            <p class="font-semibold">${{ number_format($item->price, 2) }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>
@endsection