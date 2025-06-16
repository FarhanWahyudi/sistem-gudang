@extends('layouts.admin')

@section('content')
    <div class="w-[850px] bg-white rounded-2xl border-2 border-[#F2F4F7] p-7 mb-20">
        <h1 class="text-start font-black text-lg mb-7">Add New Product</h1>
        <form action="{{route('admin.post-add-product')}}" method="POST">
            @csrf
            <div class="flex flex-wrap gap-y-7 justify-between">
                <div class="flex flex-col">
                    <label for="title" class="text-[#6D6D6D] mb-1">Product Title</label>
                    <input id='title' name="title" id="product-title" type="text" class="w-96 h-10 border border-[#979797] rounded-lg focus:border-[#979797] focus:ring-0" value="{{ old('title') }}">
                    @error('title')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="category" class="text-[#6D6D6D] mb-1">Category</label>
                    <select id='category' name="category_id" id="product-title" type="text" class="w-96 h-10 border border-[#979797] rounded-lg focus:border-[#979797] focus:ring-0" value="{{ old('category_id') }}">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }} >{{ $category->name }}</option>
                    @endforeach
                    </select>
                    @error('category_id')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="price" class="text-[#6D6D6D] mb-1">Price</label>
                    <div class="flex items-center gap-2">
                        <p class="text-[#6D6D6D]">Rp.</p>
                        <input id='price' name="price" id="product-title" type="text" class="w-[352px] h-10 border border-[#979797] rounded-lg focus:border-[#979797] focus:ring-0" value="{{ old('price') }}">
                    </div>
                    @error('price')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="stock" class="text-[#6D6D6D] mb-1">Stock</label>
                    <input id='stock' name="stock" id="product-title" type="text" class="w-96 h-10 border border-[#979797] rounded-lg focus:border-[#979797] focus:ring-0" value="{{ old('stock') }}">
                    @error('stock')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex justify-end w-full">
                    <input type="submit" class="h-10 w-16 bg-[#465FFF] rounded-lg text-white cursor-pointer" value="Add">
                </div>
            </div>
        </form>
    </div>
@endsection