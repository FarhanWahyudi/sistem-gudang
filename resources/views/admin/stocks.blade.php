@extends('layouts.admin')

@section('content')
    <div class="w-full bg-white rounded-2xl border-2 border-[#F2F4F7] p-7 mb-20">
        <h1 class="text-start font-black text-lg mb-7">Stocks</h1>
        <table class="w-full">
            <thead>
                <tr class="border-y-2">
                    <th class="table-cell p-3 text-[#6D6D6D] text-start w-[450px]">Products</th>
                    <th class="text-[#6D6D6D] text-start">Category</th>
                    <th class="text-[#6D6D6D] text-start">Stock</th>
                    <th class="text-[#6D6D6D] text-start w-48">Stock Masuk</th>
                    <th class="text-[#6D6D6D] text-start w-48">Stock Keluar</th>
                </tr>
                @foreach($products as $product)
                <tr class="border-y-2">
                    <td class="font-bold flex items-center gap-3 py-2">
                        <img src="{{asset('assets/products/Oxford-Stacking-Armchair.png')}}" alt="">
                        {{ $product->title }}
                    </td>
                    <td class="text-[#6D6D6D] text-start">{{ $product->category->name }}</td>
                    <td class="text-[#6D6D6D] text-start">{{ $product->stock }}</td>
                    <td class="text-[#6D6D6D] text-start py-2">
                        <form action="{{ route('admin.add-stock', $product->id) }}" method="POST" class="flex items-center gap-2">
                            @csrf
                            <input type="number" name="stock_masuk[{{ $product->id }}]" class="w-20 h-10 border-1 border-[#979797] rounded-lg focus:border-[#979797] focus:ring-0" value="{{ old('stock_masuk.' . $product->id) }}">
                            <input type="submit" class="h-10 w-16 bg-[#00DF77] rounded-lg text-white cursor-pointer" value="Add">
                        </form>
                        @error("stock_masuk.$product->id")
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </td>
                    <td class="text-[#6D6D6D] text-start py-2">
                        <form action="{{  route('admin.reduce-stock', $product->id) }}" method="POST" class="flex items-center gap-2">
                            @csrf
                            <input type="number" name="stock_keluar[{{ $product->id }}]" class="w-20 h-10 border-1 border-[#979797] rounded-lg focus:border-[#979797] focus:ring-0" value="{{ old('stock_keluar.' . $product->id) }}">
                            <input type="submit" class="h-10 w-16 bg-[#FF4A4D] rounded-lg text-white cursor-pointer" value="Out">
                        </form>
                        @error("stock_keluar.$product->id")
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </td>
                </tr>
                @endforeach
            </thead>
        </table>
    </div>
@endsection