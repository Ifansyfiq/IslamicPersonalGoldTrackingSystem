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

                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900" style="display: block;">
                                        {{ $pawnshop->arrahnu_name }}
                                    </td>

                                    <td class="px-6 py-1 whitespace-nowrap text-sm font-semibold text-gray-900" style="display: block;">
                                        Loan Details
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900" style="display: block;">

                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900" style="display: block;">

                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">

                                    </td>



                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>