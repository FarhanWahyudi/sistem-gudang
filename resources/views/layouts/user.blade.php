<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Document</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="h-screen">
        <div class="fixed flex flex-col justify-between top-0 left-0 h-full p-5 border-r-2 border-[#F2F4F7]">
            <div>
                <div class="flex items-center gap-3 mb-10">
                    <img src="/assets/icons/LOGO.png" alt="">
                    <h1 class="text-3xl font-bold">SISTEM GUDANG</h1>
                </div>
                <h6 class="text-gray-400 mb-3">MENU</h6>
                <div class="flex flex-col gap-5">
                    @php
                        $stock = request()->is('stock');
                        $product = request()->is('product');
                        $category = request()->is('category');
                    @endphp
                    <a href="{{url('/stock')}}">
                        <div class="{{ $stock ? 'bg-[#ECF3FF]' : 'bg-white' }} flex items-center gap-6 p-3 rounded-md hover:bg-[#ECF3FF] duration-500 ease-in-out group ">
                            <img src="{{ $stock ? '/assets/icons/stock-active.png' : '/assets/icons/stock.png' }}" alt="" class="absolute opacity-100 {{ $stock ? '' : 'group-hover:opacity-0 transition-opacity duration-300 ease-in-out' }}">
                            <img src="{{ $stock ? '/assets/icons/stock.png' : '/assets/icons/stock-active.png' }}" alt="" class="absolute opacity-0 {{ $stock ? '' : 'group-hover:opacity-100 transition-opacity duration-300 ease-in-out' }}">
                            <div class="w-6 h-6"></div>
                            <h3 class="{{ $stock ? 'text-[#465FFF]' : 'text-[#6D6D6D]' }} text-xl font-semibold group-hover:text-[#465FFF]">Stock</h3>
                        </div>
                    </a>
                    <a href="{{url('/product')}}">
                        <div class="{{ $product ? 'bg-[#ECF3FF]' : 'bg-white' }} flex items-center gap-6 p-3 rounded-md hover:bg-[#ECF3FF] duration-500 ease-in-out group ">
                            <img src="{{ $product ? '/assets/icons/product-active.png' : '/assets/icons/product.png' }}" alt="" class="absolute opacity-100 {{ $product ? '' : 'group-hover:opacity-0 transition-opacity duration-300 ease-in-out' }}">
                            <img src="{{ $product ? '/assets/icons/product.png' : '/assets/icons/product-active.png' }}" alt="" class="absolute opacity-0 {{ $product ? '' : 'group-hover:opacity-100 transition-opacity duration-300 ease-in-out' }}">
                            <div class="w-6 h-6"></div>
                            <h3 class="{{ $product ? 'text-[#465FFF]' : 'text-[#6D6D6D]' }} text-xl font-semibold group-hover:text-[#465FFF]">Products</h3>
                        </div>
                    </a>
                    <a href="{{url('/category')}}">
                        <div class="{{ $category ? 'bg-[#ECF3FF]' : 'bg-white' }} flex items-center gap-6 p-3 rounded-md hover:bg-[#ECF3FF] duration-500 ease-in-out group ">
                            <img src="{{ $category ? '/assets/icons/category-active.png' : '/assets/icons/category.png' }}" alt="" class="absolute opacity-100 {{ $category ? '' : 'group-hover:opacity-0 transition-opacity duration-300 ease-in-out' }}">
                            <img src="{{ $category ? '/assets/icons/category.png' : '/assets/icons/category-active.png' }}" alt="" class="absolute opacity-0 {{ $category ? '' : 'group-hover:opacity-100 transition-opacity duration-300 ease-in-out' }}">
                            <div class="w-6 h-6"></div>
                            <h3 class="{{ $category ? 'text-[#465FFF]' : 'text-[#6D6D6D]' }} text-xl font-semibold group-hover:text-[#465FFF]">Categories</h3>
                        </div>
                    </a>
                </div>
            </div>
            <form id="logout-form" method="POST" action="{{ route('logout') }}">
                @csrf
                <div onclick="document.getElementById('logout-form').submit();" class="flex items-center p-3 rounded-md hover:bg-[#ECF3FF] duration-500 ease-in-out group cursor-pointer">
                    <svg class="w-9 text-[#979797] group-hover:text-[#465FFF]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                    </svg>
                    <h3 class="text-xl text-[#6D6D6D] font-semibold group-hover:text-[#465FFF]">Logout</h3>
                </div>
            </form>
        </div>
        <div class="ml-[347px]">
            <div class="flex justify-end w-full py-5 px-10 border-b-2">
                <div class="flex items-center gap-1">
                    <svg class="w-10 stroke-1 text-[#6D6D6D]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    <h3 class="text-xl font-semibold group-hover:text-[#465FFF] text-[#6D6D6D]">User1</h3>
                </div>
            </div>
            <div class="bg-[#F9FAFB] min-h-[calc(100vh-82px)] px-28 py-10">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>