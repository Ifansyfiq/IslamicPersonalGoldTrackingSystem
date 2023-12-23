<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ar-Rahnu') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-gray-500">
                    <thead class="text-xs text-white text-left uppercase bg-gray-800">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left">
                                {{ $pawnshop->arrahnu_type }}
                            </th>
                            <th scope="col" class="px-6 py-3">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-gray border-b">
                            <td class="px-6 py-1 whitespace-nowrap text-sm font-semibold text-gray-400"></td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                {{ $pawnshop->arrahnu_name }}
                            </td>
                            <td></td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                Loan Details
                            </td>
                            <td></td>
                        </tr>
                        <tr class="border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-black text-left">
                                Current Margin(%)
                            </th>
                            <td class="px-6 py-4 text-center">
                                {{ $pawnshop->margin }}
                            </td>
                        </tr>
                        <tr class="border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-black text-left">
                                Loan Duration(month)
                            </th>
                            <td class="px-6 py-4 text-center">
                                {{ $pawnshop->loan_duration }}
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                Safekeeping Rate
                            </td>
                            <td></td>
                        </tr>
                        <tr class="border-b">
                            <th scope="row" class="px-6 py-4 font-semibold text-black text-center">
                                Item Values (RM)
                            </th>
                            <td class="px-6 py-4 font-semibold text-center">
                                Safekeeping rate monthly by RM100/item values
                            </td>
                        </tr>
                        <tr class="border-b">
                            <th scope="row" class="px-6 py-4 text-black text-center">
                                First 2,000 & below
                            </th>
                            <td class="px-6 py-4 text-center">
                                {{ $pawnshop->safekeep_rate1 }}
                            </td>
                        </tr>
                        <tr class="border-b">
                            <th scope="row" class="px-6 py-4 text-black text-center">
                                2,001 - 10,000
                            </th>
                            <td class="px-6 py-4 text-center">
                                {{ $pawnshop->safekeep_rate2 }}
                            </td>
                        </tr>
                        <tr class="border-b">
                            <th scope="row" class="px-6 py-4 text-black text-center">
                                Above 10,001
                            </th>
                            <td class="px-6 py-4 text-center">
                                {{ $pawnshop->safekeep_rate3 }}
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                Ar-Rahnu Details
                            </td>
                            <td></td>
                        </tr>
                        <tr class="border-b">
                            <th scope="row" class="px-6 py-4 text-black text-left">
                                Agent name
                            </th>
                            <td class="px-6 py-4 text-center">
                                {{ $pawnshop->agent_name }}
                            </td>
                        </tr>
                        <tr class="border-b">
                            <th scope="row" class="px-6 py-4 text-black text-left">
                                Operation time
                            </th>
                            <td class="px-6 py-4 text-center">
                                Sunday: {{ $pawnshop->sun }}<br>
                                Monday: {{ $pawnshop->mon }}<br>
                                Tuesday: {{ $pawnshop->tue }} <br>
                                Wednesday: {{ $pawnshop->wed }}<br>
                                Thursday: {{ $pawnshop->thu }}<br>
                                Friday: {{ $pawnshop->fri }}<br>
                                Saturday: {{ $pawnshop->sat }}<br>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <th scope="row" class="px-6 py-4 text-black text-left">
                                Agent phone num
                            </th>
                            <td class="px-6 py-4 text-center">
                                {{ $pawnshop->agent_contact_num }}
                            </td>
                        </tr>
                        <tr class="border-b">
                            <th scope="row" class="px-6 py-4 text-black text-left">
                                Email
                            </th>
                            <td class="px-6 py-4 text-center">
                                {{ $pawnshop->email }}
                            </td>
                        </tr>
                        <tr class="border-b">
                            <th scope="row" class="px-6 py-4 text-black text-left">
                                Address
                            </th>
                            <td class="px-6 py-4 text-center">
                                {{ $pawnshop->address }}
                            </td>
                        </tr>
                        <tr class="border-b">
                            <th scope="row" class="px-6 py-4 text-black text-left">
                                Hotline
                            </th>
                            <td class="px-6 py-4 text-center">
                                {{ $pawnshop->hotline }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="flex items-center justify-center px-4 py-3 text-center sm:px-6">
                <a href="{{ route('pawnshop.website') }}" target="_blank" class="inline-flex items-center px-4 py-2 mr-3 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">Website</a>
                <a href="{{ route('pawnshop.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">Back</a>
            </div>
        </div>
    </div>
</x-app-layout>