@extends('layouts.admin')

@section('content')
    <div class="w-[850px] bg-white rounded-2xl border-2 border-[#F2F4F7] p-7 mb-20">
        <h1 class="text-start font-black text-lg mb-7">Edit Product</h1>
        <form action="{{route('admin.post-update-product', $product->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image" id="gambarInput" accept="image/*" class="hidden">
            <div
                class="w-40 h-40 border-2 border-dashed border-gray-400 flex items-center justify-center cursor-pointer rounded-md"
                onclick="document.getElementById('gambarInput').click();"
            >
                <img id="preview" src="{{ asset('product-image/'. $product->image) }}" alt="Preview"
                    class="max-w-full max-h-full object-contain">
            </div>
            @error('image')
                <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
            @enderror
            <div class="flex flex-wrap gap-y-7 justify-between mt-10">
                <div class="flex flex-col">
                    <label for="title" class="text-[#6D6D6D] mb-1">Product Title</label>
                    <input id='title' name="title" id="product-title" type="text" class="w-96 h-10 border border-[#979797] rounded-lg focus:border-[#979797] focus:ring-0" value="{{ $product->title }}">
                    @error('title')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="category" class="text-[#6D6D6D] mb-1">Category</label>
                    <select id='category' name="category_id" id="product-title" type="text" class="w-96 h-10 border border-[#979797] rounded-lg focus:border-[#979797] focus:ring-0">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $product->category->id == $category->id ? 'selected' : '' }} >{{ $category->name }}</option>
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
                        <input id='price' name="price" id="product-title" type="text" class="w-[352px] h-10 border border-[#979797] rounded-lg focus:border-[#979797] focus:ring-0" value="{{ $product->price }}">
                    </div>
                    @error('price')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="stock" class="text-[#6D6D6D] mb-1">Stock</label>
                    <input id='stock' name="stock" id="product-title" type="text" class="text-[#6D6D6D] w-96 h-10 border border-[#979797] rounded-lg focus:border-[#979797] focus:ring-0" value="{{ $product->stock }}" disabled>
                    @error('stock')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex justify-end w-full">
                    <input type="submit" class="h-10 w-16 bg-[#465FFF] rounded-lg text-white cursor-pointer" value="Save">
                </div>
            </div>
        </form>
    </div>

    <script>
        const gambarInput = document.getElementById('gambarInput');

        gambarInput.addEventListener('change', function (e) {
            const file = e.target.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function (event) {
                    preview.src = event.target.result;
                };

                reader.readAsDataURL(file);
            }
        });
    </script>
@endsection