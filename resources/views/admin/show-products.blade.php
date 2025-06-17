@extends('layouts.admin')

@section('content')
    <div class="w-full bg-white rounded-2xl border-2 border-[#F2F4F7] p-7 mb-20">
        <h1 class="text-start font-black text-lg mb-7">{{ ucWords($category) }} Category</h1>
        <table class="w-full">
            <thead>
                <tr class="border-y-2">
                    <th class="table-cell p-3 text-[#6D6D6D] text-start w-[450px]">Products</th>
                    <th class="text-[#6D6D6D] text-start">Category</th>
                    <th class="text-[#6D6D6D] text-start">Price</th>
                    <th class="text-[#6D6D6D] text-start w-52">Stock</th>
                    <th class="text-[#6D6D6D] text-start w-20">Action</th>
                </tr>
                @foreach($products as $product)
                <tr class="border-y-2">
                    <td class="font-bold flex items-center gap-3 py-2">
                        <img src="{{asset('product-image/'. $product->image)}}" alt="" class="w-20">
                        {{ $product->title }}
                    </td>
                    <td class="text-[#6D6D6D] text-start">{{ $product->category->name }}</td>
                    <td class="text-[#6D6D6D] text-start">{{ $product->price }}</td>
                    <td class="text-[#6D6D6D] text-start">{{ $product->stock }}</td>
                    <td>
                        <div class="flex gap-3">
                            <a href="{{ route('admin.update-product', $product->id) }}" class="flex justify-center items-center h-10 w-16 bg-[#00DF77] rounded-lg text-white cursor-pointer">Edit</a>
                            <form action="{{ route('admin.delete-product', $product->id) }}" method="POST">
                                @csrf
                                <input type="submit" class="h-10 w-16 bg-[#FF4A4D] rounded-lg text-white cursor-pointer" value="Delete">
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </thead>
        </table>
    </div>
@endsection