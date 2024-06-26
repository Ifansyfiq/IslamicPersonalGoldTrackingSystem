<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gold Record') }}
        </h2>
    </x-slot>

    <link rel="stylesheet" href="{{ asset('css/table.css') }}">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="block mb-8">
                @can('create', App\Models\Gold::class)
                <a href="{{ route('gold.create') }}" style="background: #B59410;" class="inline-flex items-center px-4 py-2  border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">Add Record</a>
                @endcan
            </div>
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8 ">
                        <div class="overflow-hidden">
                            <form action="{{ route('gold.index', request()->query()) }}">
                                <div class="flex mt-2">
                                    <input type="text" name="search" placeholder="Search" class="py-2 px-2 text-md border border-gray-200 rounded-l focus:outline-none" value="{{$search}}" />
                                    <button type="submit" class="w-10 flex items-center justify-center border-t border-r border-b border-gray-200 rounded-r text-gray-100 " style="background: #B59410;">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" style="color: white;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </button>
                                </div>
                            </form>
                            <table class="min-w-full text-left text-sm font-light mt-2">
                                <thead class="border-b font-medium dark:border-neutral-500">
                                    <tr>
                                        <th scope="col" width="50" class="px-6 py-3  text-left text-xs font-medium text-white uppercase tracking-wider" style="background: #B59410;">
                                            NO
                                        </th>
                                        <th scope="col" class="px-6 py-3  text-left text-xs font-medium text-white uppercase tracking-wider" style="background: #B59410;">
                                            Gold Name
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider" style="background: #B59410;">
                                            Purity
                                        </th>
                                        <th scope="col" class="px-6 py-3  text-left text-xs font-medium text-white uppercase tracking-wider" style="background: #B59410;">
                                            Weight
                                        </th>
                                        <th scope="col" class="px-6 py-3  text-left text-xs font-medium text-white uppercase tracking-wider" style="background: #B59410;">
                                            Purchase Date
                                        </th>
                                        <th scope="col" class="px-6 py-3  text-left text-xs font-medium text-white uppercase tracking-wider" style="background: #B59410;">
                                            Purchase Time
                                        </th>
                                        <th scope="col" class="px-6 py-3  text-left text-xs font-medium text-white uppercase tracking-wider" style="background: #B59410;">
                                            Purchase From
                                        </th>
                                        <th scope="col" class="px-6 py-3  text-left text-xs font-medium text-white uppercase tracking-wider" style="background: #B59410;">
                                            Status
                                        </th>
                                        @for ($i = 0; $i < 1; $i++)<th scope="col" class="px-6 py-3  text-left text-xs font-medium text-white uppercase tracking-wider" style="background: #B59410;">
                                            </th>
                                            @endfor
                                            <th scope="col" width="200" class="px-6 py-3  text-white uppercase text-center" style="background: #B59410;">
                                                Action
                                            </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @php
                                    $counter = 1; // Initialize a counter variable
                                    @endphp
                                    <tr>
                                        @forelse ($golds as $gold)
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $counter }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{($gold->gold_name)}}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{($gold->gold_purity)}}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 text-center">
                                            <?php
                                            $weight = $gold->weight;

                                            // Calculate the number of decimal places
                                            $decimalPlaces = strlen(substr(strrchr($weight, "."), 1));

                                            // Format the weight based on the number of decimal places
                                            if ($decimalPlaces > 0) {
                                                $formattedWeight = rtrim(number_format($weight, $decimalPlaces, '.', ''), '0');
                                            } else {
                                                $formattedWeight = rtrim(number_format($weight, 0, '', ''), '0');
                                            }

                                            // Remove the decimal point if there are no decimal places
                                            $formattedWeight = rtrim($formattedWeight, '.');

                                            echo $formattedWeight;
                                            ?>g
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ \Carbon\Carbon::parse($gold->purchase_date)->format('d-m-y') }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ \Carbon\Carbon::parse($gold->purchase_time)->format('h:i A') }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{($gold->purchase_from)}}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{($gold->status)}}
                                        </td>

                                        @for ($i = 0; $i < 1; $i++)<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            </td>
                                            @endfor

                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-center">
                                                @can('view', $gold)
                                                <a href="{{ route('gold.show', [$gold->id]) }}" class="text-blue-600 hover:text-blue-900 mb-2 mr-2">View</i><a>
                                                        @endcan
                                            </td>
                                    </tr>
                                    @php
                                    $counter++; // Increment the counter variable
                                    @endphp
                                    @empty
                                    <p class="text-warning">No record available</p>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $golds->links() }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>