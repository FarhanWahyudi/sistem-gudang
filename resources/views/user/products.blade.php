@extends('layouts.user')

@section('content')
    <div class="bg-white rounded-2xl border-2 border-[#F2F4F7] p-7 mb-20">
        <h1 class="text-start font-black text-lg mb-7">Products</h1>
        <table class="w-full">
            <thead>
                <tr class="border-y-2">
                    <th class="table-cell p-3 text-[#6D6D6D] text-start w-[450px]">Products</th>
                    <th class="text-[#6D6D6D] text-start">Category</th>
                    <th class="text-[#6D6D6D] text-start w-96">Price</th>
                    <th class="text-[#6D6D6D] text-start w-20">Stock</th>
                </tr>
                <tr class="border-y-2">
                    <td class="font-bold flex items-center gap-3 py-2">
                        <img src="{{asset('assets/products/Oxford-Stacking-Armchair.png')}}" alt="">
                        Oxford Stacking Armchair
                    </td>
                    <td class="text-[#6D6D6D] text-start">Chair</td>
                    <td class="text-[#6D6D6D] text-start">Rp. 800.000.00</td>
                    <td class="text-[#6D6D6D] text-start">18</td>
                </tr>
                <tr class="border-y-2">
                    <td class="font-bold flex items-center gap-3 py-2">
                        <img src="{{asset('assets/products/Oxford-Stacking-Armchair.png')}}" alt="">
                        Oxford Stacking Armchair
                    </td>
                    <td class="text-[#6D6D6D] text-start">Chair</td>
                    <td class="text-[#6D6D6D] text-start">Rp. 800.000.00</td>
                    <td class="text-[#6D6D6D] text-start">18</td>
                </tr>
            </thead>
        </table>
    </div>
@endsection