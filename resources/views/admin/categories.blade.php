@extends('layouts.admin')

@section('content')
    <div class="w-full flex justify-between items-start">
        <div class="bg-white w-[900px] rounded-2xl border-2 border-[#F2F4F7] p-7">
            <h1 class="text-start font-black text-lg mb-7">Category</h1>
            <table class="w-full">
                <thead>
                    <tr class="border-y-2">
                        <th class="text-[#6D6D6D] text-start p-3">Category</th>
                        <th class="text-[#6D6D6D] text-start">Jumlah Product</th>
                        <th class="text-[#6D6D6D] text-start w-64">Action</th>
                    </tr>
                    @foreach($categories as $category)
                    <tr class="border-y-2">
                        <td class="text-[#6D6D6D] text-start py-6 px-3">{{ $category->name }}</td>
                        <td class="text-[#6D6D6D] text-start">{{ $category->products->count() }}</td>
                        <td>
                            <div class="flex gap-2">
                                <form action="{{ route('admin.delete-category', $category->id) }}" method="POST" class="flex items-center gap-2">
                                    @csrf
                                    <input type="submit" class="h-10 w-16 bg-[#FF4A4D] rounded-lg text-white cursor-pointer" value="Delete">
                                </form>
                                <form action="{{ route('admin.category-products', $category->id) }}" method="GET" class="flex items-center gap-2">
                                    <input type="submit" class="h-10 w-40 bg-[#465FFF] rounded-lg text-white cursor-pointer" value="Show Products">
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </thead>
            </table>
        </div>
        <div class="bg-white w-[400px] rounded-2xl border-2 border-[#F2F4F7] p-7">
            <h1 class="font-black text-lg mb-7">Addd New Category</h1>
            <form action="{{ route('admin.post-category') }}" method="POST">
                @csrf
                <label for="category" class="text-[#6D6D6D]">Category</label>
                <div class="flex gap-3 mt-2">
                    <input id="category" type="text" name="name" class="flex grow h-10 border border-[#979797] rounded-lg focus:border-[#979797] focus:ring-0">
                    <input type="submit" class="h-10 w-16 bg-[#465FFF] rounded-lg text-white cursor-pointer" value="Add">
                </div>
                @error('name')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </form>
        </div>
    </div>
@endsection