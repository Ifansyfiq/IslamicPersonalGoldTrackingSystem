<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gold Record') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="block mb-8">
                @can('create', App\Models\Gold::class)
                <a href="{{ route('gold.create') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">Add Record</a>
                @endcan
            </div>
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8 ">
                        <div class="overflow-hidden">
                            <table class="min-w-full text-left text-sm font-light ">
                                <thead class="border-b font-medium dark:border-neutral-500">
                                    <tr>
                                        <th scope="col" width="50" class="px-6 py-3 bg-gray-800 text-left text-xs font-medium text-white uppercase tracking-wider">
                                            NO
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-gray-800 text-left text-xs font-medium text-white uppercase tracking-wider">
                                            Gold Name
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-gray-800 text-left text-xs font-medium text-white uppercase tracking-wider">
                                            Purity
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-gray-800 text-left text-xs font-medium text-white uppercase tracking-wider">
                                            Weight 
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-gray-800 text-left text-xs font-medium text-white uppercase tracking-wider">
                                            Purchase Date
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-gray-800 text-left text-xs font-medium text-white uppercase tracking-wider">
                                            Purchase Time
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-gray-800 text-left text-xs font-medium text-white uppercase tracking-wider">
                                            Purchase From
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-gray-800 text-left text-xs font-medium text-white uppercase tracking-wider">
                                            Status
                                        </th>
                                        @for ($i = 0; $i < 1; $i++)<th scope="col" class="px-6 py-3 bg-gray-800 text-left text-xs font-medium text-white uppercase tracking-wider">
                                            </th>
                                            @endfor
                                            <th scope="col" width="200" class="px-6 py-3 bg-gray-800 text-white uppercase text-center">
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

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{($gold->weight)}}g
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            #
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            #
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            #
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