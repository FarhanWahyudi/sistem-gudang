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
                <tr class="border-y-2">
                    <td class="font-bold flex items-center gap-3 py-2">
                        <img src="{{asset('assets/products/Oxford-Stacking-Armchair.png')}}" alt="">
                        Oxford Stacking Armchair
                    </td>
                    <td class="text-[#6D6D6D] text-start">Chair</td>
                    <td class="text-[#6D6D6D] text-start">12</td>
                    <td class="text-[#6D6D6D] text-start">
                        <form action="" class="flex items-center gap-2">
                            <input type="number" name="stock-masuk" class="w-20 h-10 border-1 border-[#979797] rounded-lg focus:border-[#979797] focus:ring-0">
                            <input type="submit" class="h-10 w-16 bg-[#00DF77] rounded-lg text-white cursor-pointer" value="Add">
                        </form>
                    </td>
                    <td>
                        <form action="" class="flex items-center gap-2">
                            <input type="number" name="stock-keluar" class="w-20 h-10 border-1 border-[#979797] rounded-lg focus:border-[#979797] focus:ring-0">
                            <input type="submit" class="h-10 w-16 bg-[#FF4A4D] rounded-lg text-white cursor-pointer" value="Out">
                        </form>
                    </td>
                </tr>
                <tr class="border-y-2">
                    <td class="font-bold flex items-center gap-3 py-2">
                        <img src="{{asset('assets/products/Oxford-Stacking-Armchair.png')}}" alt="">
                        Oxford Stacking Armchair
                    </td>
                    <td class="text-[#6D6D6D] text-start">Chair</td>
                    <td class="text-[#6D6D6D] text-start">12</td>
                    <td class="text-[#6D6D6D] text-start">
                        <form action="" class="flex items-center gap-2">
                            <input type="number" name="stock-masuk" class="w-20 h-10 border-1 border-[#979797] rounded-lg focus:border-[#979797] focus:ring-0">
                            <input type="submit" class="h-10 w-16 bg-[#00DF77] rounded-lg text-white cursor-pointer" value="Add">
                        </form>
                    </td>
                    <td>
                        <form action="" class="flex items-center gap-2">
                            <input type="number" name="stock-masuk" class="w-20 h-10 border-1 border-[#979797] rounded-lg focus:border-[#979797] focus:ring-0">
                            <input type="submit" class="h-10 w-16 bg-[#FF4A4D] rounded-lg text-white cursor-pointer" value="Out">
                        </form>
                    </td>
                </tr>
            </thead>
        </table>
    </div>
@endsection