<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ar-Rahnu') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-4 align-middle inline-block min-w-full sm:px-1 lg:px-8">
                        <table class="min-w-full divide-y divide-gray-200 w-full">

                            <thead>
                                <tr>
                                    <th width="100" class="flex items-center">
                                        <span class="text-s font-semibold px-8 py-6">
                                            {{ $pawnshop->arrahnu_type }}
                                        </span>
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200">

                                <tr>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                        {{ $pawnshop->arrahnu_name }}
                                    </td>
                                    <td></td>

                                <tr>
                                    <td class="px-6 py-1 whitespace-nowrap text-sm font-semibold text-gray-900">
                                        Loan Details
                                    </td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        Current Margin(%): {{ $pawnshop->margin }}
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        Loan Duration(month): {{ $pawnshop->loan_duration }}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        Safekeeping Rate:
                                    </td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-semibold">
                                        Item Values (RM)
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-semibold">
                                        Safekeeping rate monthly by RM100/item values
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        First 2,000 & below
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">

                                        {{ ($pawnshop->safekeep_rate) }}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        2,001 - 10,000
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ ($pawnshop->safekeep_rate) }}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        Above 10,001
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ ($pawnshop->safekeep_rate) }}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-1 whitespace-nowrap text-sm font-semibold text-gray-900">
                                        Ar-Rahnu Details
                                    </td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-1 whitespace-nowrap text-sm text-gray-900">
                                        Agent name: {{ $pawnshop->agent_name }}
                                    </td>
                                    <td class="px-6 py-1 whitespace-nowrap text-sm text-gray-900">
                                        Operation time: {{ $pawnshop->operation_time }}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-1 whitespace-nowrap text-sm text-gray-900">
                                        Agent phone num: {{ $pawnshop->agent_contact_num }}
                                    </td>
                                    <td></td>
                                </tr>


                                <tr>
                                    <td class="px-6 py-1 whitespace-nowrap text-sm text-gray-900">
                                        Email: {{ $pawnshop->email }}
                                    </td>
                                    <td class="px-6 py-1 whitespace-nowrap text-sm text-gray-900">
                                        Address: {{ $pawnshop->address }}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-1 whitespace-nowrap text-sm text-gray-900">
                                        Hotline: {{ $pawnshop->hotline }}
                                    </td>
                                    <td></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>