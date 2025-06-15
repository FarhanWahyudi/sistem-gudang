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
                    <tr class="border-y-2">
                        <td class="text-[#6D6D6D] text-start py-6 px-3">Chair</td>
                        <td class="text-[#6D6D6D] text-start">18</td>
                        <td>
                            <div class="flex gap-2">
                                <form action="" class="flex items-center gap-2">
                                    <input type="submit" class="h-10 w-16 bg-[#00DF77] rounded-lg text-white cursor-pointer" value="Edit">
                                </form>
                                <form action="" class="flex items-center gap-2">
                                    <input type="submit" class="h-10 w-40 bg-[#465FFF] rounded-lg text-white cursor-pointer" value="Show Products">
                                </form>
                            </div>
                        </td>
                    </tr>
                    <tr class="border-y-2">
                        <td class="text-[#6D6D6D] text-start py-6 px-3">Chair</td>
                        <td class="text-[#6D6D6D] text-start">18</td>
                        <td>
                            <div class="flex gap-2">
                                <form action="" class="flex items-center gap-2">
                                    <input type="submit" class="h-10 w-16 bg-[#00DF77] rounded-lg text-white cursor-pointer" value="Edit">
                                </form>
                                <form action="" class="flex items-center gap-2">
                                    <input type="submit" class="h-10 w-40 bg-[#465FFF] rounded-lg text-white cursor-pointer" value="Show Products">
                                </form>
                            </div>
                        </td>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="bg-white w-[400px] rounded-2xl border-2 border-[#F2F4F7] p-7">
            <h1 class="font-black text-lg mb-7">Addd New Category</h1>
            <form action="">
                <label class="text-[#6D6D6D]">Category</label>
                <div class="flex gap-3 mt-2">
                    <input type="text" name="category" class="flex grow h-10 border border-[#979797] rounded-lg focus:border-[#979797] focus:ring-0">
                    <input type="submit" class="h-10 w-16 bg-[#465FFF] rounded-lg text-white cursor-pointer" value="Add">
                </div>
            </form>
        </div>
    </div>
@endsection