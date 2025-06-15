@extends('layouts.admin')

@section('content')
    <div class="bg-white rounded-2xl border-2 border-[#F2F4F7] p-7 mb-20">
        <div class="flex items-center justify-between mb-7">
            <h1 class="text-start font-black text-lg">Products</h1>
            <a href="" class="flex items-center justify-center h-10 w-40 bg-[#465FFF] rounded-lg text-white cursor-pointer">Add New Product</a>
        </div>
        <table class="w-full">
            <thead>
                <tr class="border-y-2">
                    <th class="table-cell p-3 text-[#6D6D6D] text-start w-[450px]">Products</th>
                    <th class="text-[#6D6D6D] text-start">Category</th>
                    <th class="text-[#6D6D6D] text-start">Price</th>
                    <th class="text-[#6D6D6D] text-start w-52">Stock</th>
                    <th class="text-[#6D6D6D] text-start w-20">Action</th>
                </tr>
                <tr class="border-y-2">
                    <td class="font-bold flex items-center gap-3 py-2">
                        <img src="{{asset('assets/products/Oxford-Stacking-Armchair.png')}}" alt="">
                        Oxford Stacking Armchair
                    </td>
                    <td class="text-[#6D6D6D] text-start">Chair</td>
                    <td class="text-[#6D6D6D] text-start">Rp. 800.000.00</td>
                    <td class="text-[#6D6D6D] text-start">18</td>
                    <td>
                        <form action="" class="flex items-center gap-2">
                            <input type="submit" class="h-10 w-16 bg-[#00DF77] rounded-lg text-white cursor-pointer" value="Edit">
                        </form>
                    </td>
                </tr>
                <tr class="border-y-2">
                    <td class="font-bold flex items-center gap-3 py-2">
                        <img src="{{asset('assets/products/Oxford-Stacking-Armchair.png')}}" alt="">
                        Oxford Stacking Armchair
                    </td>
                    <td class="text-[#6D6D6D] text-start">Chair</td>
                    <td class="text-[#6D6D6D] text-start">Rp. 800.000.00</td>
                    <td class="text-[#6D6D6D] text-start">18</td>
                    <td>
                        <form action="" class="flex items-center gap-2">
                            <input type="submit" class="h-10 w-16 bg-[#00DF77] rounded-lg text-white cursor-pointer" value="Edit">
                        </form>
                    </td>
                </tr>
            </thead>
        </table>
    </div>
@endsection