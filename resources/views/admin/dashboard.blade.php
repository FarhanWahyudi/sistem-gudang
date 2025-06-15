@extends('layouts.admin')

@section('content')
    <div class="flex flex-col gap-10">
        <div class="flex justify-between">
            <div class="w-80 bg-white p-3 rounded-2xl border-2 border-[#F2F4F7]">
                <div class="flex items-center gap-5">
                    <div class="flex justify-center items-center w-12 h-12 bg-[#F2F4F7] rounded-xl">
                        <img src="{{asset('assets/dashboard-icon/product.png')}}" alt="" >
                    </div>
                    <h3 class="text-[#6D6D6D] text-lg">Product</h3>
                </div>
                <div class="flex justify-end">
                    <h1 class="text-4xl font-bold">58</h1>
                </div>
            </div>
            <div class="w-80 bg-white p-3 rounded-2xl border-2 border-[#F2F4F7]">
                <div class="flex items-center gap-5">
                    <div class="flex justify-center items-center w-12 h-12 bg-[#F2F4F7] rounded-xl">
                        <img src="{{asset('assets/dashboard-icon/category.png')}}" alt="" >
                    </div>
                    <h3 class="text-[#6D6D6D] text-lg">Category</h3>
                </div>
                <div class="flex justify-end">
                    <h1 class="text-4xl font-bold">9</h1>
                </div>
            </div>
            <div class="w-80 bg-white p-3 rounded-2xl border-2 border-[#F2F4F7]">
                <div class="flex items-center gap-5">
                    <div class="flex justify-center items-center w-12 h-12 bg-[#F2F4F7] rounded-xl">
                        <img src="{{asset('assets/dashboard-icon/stock.png')}}" alt="" >
                    </div>
                    <h3 class="text-[#6D6D6D] text-lg">Stock</h3>
                </div>
                <div class="flex justify-end">
                    <h1 class="text-4xl font-bold">210</h1>
                </div>
            </div>
            <div class="w-80 bg-white p-3 rounded-2xl border-2 border-[#F2F4F7]">
                <div class="flex items-center gap-5">
                    <div class="flex justify-center items-center w-12 h-12 bg-[#F2F4F7] rounded-xl">
                        <img src="{{asset('assets/dashboard-icon/stock-menipis.png')}}" alt="" >
                    </div>
                    <h3 class="text-[#6D6D6D] text-lg">Stock Menipis</h3>
                </div>
                <div class="flex justify-end">
                    <h1 class="text-4xl font-bold">13</h1>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-2xl border-2 border-[#F2F4F7] p-7 pb-16">
            <h1 class="text-start font-black text-lg">Statistics</h1>
            <div class="flex gap-3 mb-20">
                <div class="flex items-center gap-1">
                    <span class="w-4 h-4 rounded-[50%] bg-[#465FFF]"></span>
                    <h3 class="text-[#6D6D6D] text-sm">Stock Masuk</h3>
                </div>
                <div class="flex items-center gap-1">
                    <span class="w-4 h-4 rounded-[50%] bg-[#8CB6FF]"></span>
                    <h3 class="text-[#6D6D6D] text-sm">Stock Keluar</h3>
                </div>
            </div>


            <div class="w-full h-[500px] relative px-10 pt-4 pb-6">
                <!-- Loop 6 garis dari atas ke bawah -->
                <div class="absolute inset-0 flex flex-col justify-between">
                    @for ($i = 5; $i >= 0; $i--)
                    <div class="flex items-center gap-2">
                        <!-- Label angka -->
                        <div class="text-sm w-6 text-right text-gray-600">{{ $i * 20 }}</div>
                        <!-- Garis horizontal -->
                        <div class="flex-1 border-t border-dashed border-gray-300"></div>
                    </div>
                    @endfor
                </div>

                <!-- Bar -->
                <div class="absolute -bottom-6 left-20 flex justify-between gap-4 items-end w-[90%] h-full">
                    <div class="flex flex-col items-center h-full">
                        <div class="flex items-end h-full">
                            <div class="w-10 bg-[#465FFF] h-[60%]"></div>
                            <div class="w-10 bg-[#8CB6FF] h-[40%]"></div>
                        </div>
                        <h1 class="text-sm w-6 text-right text-gray-600 mt-3">Senin</h1>
                    </div>
                    <div class="flex flex-col items-center h-full">
                        <div class="flex items-end h-full">
                            <div class="w-10 bg-[#465FFF] h-[50%]"></div>
                            <div class="w-10 bg-[#8CB6FF] h-[70%]"></div>
                        </div>
                        <h1 class="text-sm w-6 text-right text-gray-600 mt-3">Selasa</h1>
                    </div>
                    <div class="flex flex-col items-center h-full">
                        <div class="flex items-end h-full">
                            <div class="w-10 bg-[#465FFF] h-[40%]"></div>
                            <div class="w-10 bg-[#8CB6FF] h-[50%]"></div>
                        </div>
                        <h1 class="text-sm w-6 text-right text-gray-600 mt-3">Rabu</h1>
                    </div>
                    <div class="flex flex-col items-center h-full">
                        <div class="flex items-end h-full">
                            <div class="w-10 bg-[#465FFF] h-[80%]"></div>
                            <div class="w-10 bg-[#8CB6FF] h-[50%]"></div>
                        </div>
                        <h1 class="text-sm w-6 text-right text-gray-600 mt-3">Kamis</h1>
                    </div>
                    <div class="flex flex-col items-center h-full">
                        <div class="flex items-end h-full">
                            <div class="w-10 bg-[#465FFF] h-[60%]"></div>
                            <div class="w-10 bg-[#8CB6FF] h-[76%]"></div>
                        </div>
                        <h1 class="text-sm w-6 text-right text-gray-600 mt-3">Jum'at</h1>
                    </div>
                    <div class="flex flex-col items-center h-full">
                        <div class="flex items-end h-full">
                            <div class="w-10 bg-[#465FFF] h-[65%]"></div>
                            <div class="w-10 bg-[#8CB6FF] h-[34%]"></div>
                        </div>
                        <h1 class="text-sm w-6 text-right text-gray-600 mt-3">Sabtu</h1>
                    </div>
                    <div class="flex flex-col items-center h-full">
                        <div class="flex items-end h-full">
                            <div class="w-10 bg-[#465FFF] h-[80%]"></div>
                            <div class="w-10 bg-[#8CB6FF] h-[65%]"></div>
                        </div>
                        <h1 class="text-sm w-6 text-right text-gray-600 mt-3">Minggu</h1>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="bg-white rounded-2xl border-2 border-[#F2F4F7] p-7 mb-20">
            <h1 class="text-start font-black text-lg mb-7">Recent Stock Activity</h1>
            <table class="w-full">
                <thead>
                    <tr class="border-y-2">
                        <th class="table-cell p-3 text-[#6D6D6D] text-start">Products</th>
                        <th class="text-[#6D6D6D] text-start">Category</th>
                        <th class="text-[#6D6D6D] text-start">Price</th>
                        <th class="text-[#6D6D6D] text-start">Stock</th>
                        <th class="text-[#6D6D6D] text-start">Date</th>
                    </tr>
                    <tr class="border-y-2">
                        <td class="font-bold flex items-center gap-3 py-2">
                            <img src="{{asset('assets/products/Oxford-Stacking-Armchair.png')}}" alt="">
                            Oxford Stacking Armchair
                        </td>
                        <td class="text-[#6D6D6D] text-start">Chair</td>
                        <td class="text-[#6D6D6D] text-start">Rp. 800.000.00</td>
                        <td class="text-[#6D6D6D] text-start">
                            <div class="flex items-start">
                                <p>12</p>
                                <div class="flex items-center">
                                    <img src="{{asset('assets/arrow-up.png')}}" alt="">
                                    <p class="text-xs text-[#00DF77]">3</p>
                                </div>
                            </div>
                        </td>
                        <td class="text-[#6D6D6D] text-start">12-06-2025</td>
                    </tr>
                    <tr class="border-y-2">
                        <td class="font-bold flex items-center gap-3 py-2">
                            <img src="{{asset('assets/products/Oxford-Stacking-Armchair.png')}}" alt="">
                            Oxford Stacking Armchair
                        </td>
                        <td class="text-[#6D6D6D] text-start">Chair</td>
                        <td class="text-[#6D6D6D] text-start">Rp. 800.000.00</td>
                        <td class="text-[#6D6D6D] text-start">
                            <div class="flex items-start">
                                <p>12</p>
                                <div class="flex items-center">
                                    <img src="{{asset('assets/arrow-up.png')}}" alt="">
                                    <p class="text-xs text-[#00DF77]">3</p>
                                </div>
                            </div>
                        </td>
                        <td class="text-[#6D6D6D] text-start">12-06-2025</td>
                    </tr>
                </thead>
            </table>
        </div>  
    </div>
@endsection