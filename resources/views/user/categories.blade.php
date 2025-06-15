@extends('layouts.user')

@section('content')
    <div class="bg-white w-[900px] rounded-2xl border-2 border-[#F2F4F7] p-7">
        <h1 class="text-start font-black text-lg mb-7">Category</h1>
        <table class="w-full">
            <thead>
                <tr class="border-y-2">
                    <th class="text-[#6D6D6D] text-start p-3">Category</th>
                    <th class="text-[#6D6D6D] text-start">Jumlah Product</th>
                    <th class="text-[#6D6D6D] text-start w-52">Action</th>
                </tr>
                <tr class="border-y-2">
                    <td class="text-[#6D6D6D] text-start py-6 px-3">Chair</td>
                    <td class="text-[#6D6D6D] text-start">18</td>
                    <td>
                        <form action="" class="flex items-center gap-2">
                            <input type="submit" class="h-10 w-40 bg-[#465FFF] rounded-lg text-white cursor-pointer" value="Show Products">
                        </form>
                    </td>
                </tr>
                <tr class="border-y-2">
                    <td class="text-[#6D6D6D] text-start py-6 px-3">Chair</td>
                    <td class="text-[#6D6D6D] text-start">18</td>
                    <td>
                        <form action="" class="flex items-center gap-2">
                            <input type="submit" class="h-10 w-40 bg-[#465FFF] rounded-lg text-white cursor-pointer" value="Show Products">
                        </form>
                    </td>
                </tr>
            </thead>
        </table>
    </div>
@endsection