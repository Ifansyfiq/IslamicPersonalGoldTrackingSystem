<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-white uppercase bg-gray-800">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                User Details
                            </th>
                            <th scope="col" class="px-6 py-3">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-black">
                                Name
                            </th>
                            <td class="px-6 py-4">
                                {{($user->name)}}
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-black">
                                Email
                            </th>
                            <td class="px-6 py-4">
                                {{($user->email)}}
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-black">
                                Phone Number
                            </th>
                            <td class="px-6 py-4">
                                {{($user->phone_num)}}
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-black">
                                Address
                            </th>
                            <td class="px-6 py-4">
                                {{($user->address)}}
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-black">
                                State
                            </th>
                            <td class="px-6 py-4">
                                {{($user->state)}}
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-black">
                                City
                            </th>
                            <td class="px-6 py-4">
                                {{($user->city)}}
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-black">
                                Postal Code
                            </th>
                            <td class="px-6 py-4">
                                {{($user->postal_code)}}
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-black">
                                Role
                            </th>
                            <td class="px-6 py-4">
                                {{($user->roles->pluck('name')->implode(' '))}}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="flex items-center justify-center px-4 py-3 text-center sm:px-6">
                <a href="{{ route('user.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">Cancel</a>
            </div>
        </div>
    </div>

</x-app-layout>