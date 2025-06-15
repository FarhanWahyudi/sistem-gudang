@extends('layouts.admin')

@section('content')
    <div class="w-[850px] bg-white rounded-2xl border-2 border-[#F2F4F7] p-7 mb-20">
        <h1 class="text-start font-black text-lg mb-7">Add New Product</h1>
        <form action="">
            <div class="flex flex-wrap gap-y-7 justify-between">
                <div class="flex flex-col">
                    <label for="product-title" class="text-[#6D6D6D] mb-1">Product Title</label>
                    <input id="product-title" type="text" class="w-96 h-10 border border-[#979797] rounded-lg focus:border-[#979797] focus:ring-0">
                </div>
                <div class="flex flex-col">
                    <label for="product-title" class="text-[#6D6D6D] mb-1">Category</label>
                    <input id="product-title" type="text" class="w-96 h-10 border border-[#979797] rounded-lg focus:border-[#979797] focus:ring-0">
                </div>
                <div class="flex flex-col">
                    <label for="product-title" class="text-[#6D6D6D] mb-1">Price</label>
                    <div class="flex items-center gap-2">
                        <p class="text-[#6D6D6D]">Rp.</p>
                        <input id="product-title" type="text" class="w-[352px] h-10 border border-[#979797] rounded-lg focus:border-[#979797] focus:ring-0">
                    </div>
                </div>
                <div class="flex flex-col">
                    <label for="product-title" class="text-[#6D6D6D] mb-1">Stock</label>
                    <input id="product-title" type="text" class="w-96 h-10 border border-[#979797] rounded-lg focus:border-[#979797] focus:ring-0">
                </div>
                <div class="flex justify-end w-full">
                    <input type="submit" class="h-10 w-16 bg-[#465FFF] rounded-lg text-white cursor-pointer" value="Add">
                </div>
            </div>
        </form>
    </div>
@endsection