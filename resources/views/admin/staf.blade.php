@extends('layouts.admin')

@section('content')
    <div class="w-full bg-white rounded-2xl border-2 border-[#F2F4F7] p-7 mb-20 h-auto">
        <h1 class="text-start font-black text-lg mb-7">Users Management</h1>
        <table class="w-full">
            <thead>
                <tr class="border-y-2">
                    <th class="table-cell p-3 text-[#6D6D6D] text-start">Name</th>
                    <th class="text-[#6D6D6D] text-start">Email</th>
                    <th class="text-[#6D6D6D] text-start w-60">Role</th>
                    <th class="text-[#6D6D6D] text-start w-60">Status</th>
                    <th class="text-[#6D6D6D] text-start w-32">Action</th>
                </tr>
                <tr class="border-y-2">
                    <td class="font-bold flex items-center gap-3 py-2">
                        <svg class="w-10 stroke-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        User1
                    </td>
                    <td class="text-[#6D6D6D] text-start">user1@gmail.com</td>
                    <td class="text-[#6D6D6D] text-start">User</td>
                    <td class="text-[#EF0004] font-semibold text-start">Nonactive</td>
                    <td>
                        <form action="" class="flex items-center gap-2">
                            <input type="submit" class="h-10 w-16 bg-[#00DF77] rounded-lg text-white cursor-pointer" value="Edit">
                        </form>
                    </td>
                </tr>
                <tr class="border-y-2">
                    <td class="font-bold flex items-center gap-3 py-2">
                        <svg class="w-10 stroke-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        User2
                    </td>
                    <td class="text-[#6D6D6D] text-start">user2@gmail.com</td>
                    <td class="text-[#6D6D6D] text-start">User</td>
                    <td class="text-[#00CE6E] font-semibold text-start">Active</td>
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