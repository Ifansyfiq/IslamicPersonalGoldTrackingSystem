<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ar-Rahnu') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="block mb-8">
                <a href="{{ route('pawnshop.index') }}" class="text-black font-bold py-2 px-4 rounded ">Add Items</a>
            </div>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-4 align-middle inline-block min-w-full sm:px-1 lg:px-8">
                        <button type="submit" class="inline-flex items-center py-2.5 px-3 ml-2 ">
                            <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>Search
                        </button>

                        <!-- <div class="block mb-8">
                            <h2 class="text-black underline font-semibold ">YaPEIM</h2>
                        </div> -->
                        <table class="min-w-full divide-y divide-gray-200 w-full">
                            @forelse ($pawnshops as $pawnshop)
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

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900" style="display: block;">
                                        {{ $pawnshop->arrahnu_name }}
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900" style="display: block;">
                                        Current Margin(%): {{ $pawnshop->margin }}
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900" style="display: block;">
                                        Tel: {{ $pawnshop->agent_contact_num}} ({{ $pawnshop->agent_name}})
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900" style="display: block;">
                                        Address: {{ $pawnshop->address}}
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">

                                    </td>


                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="{{ route('pawnshop.show', [$pawnshop->id]) }}" class="text-blue-600 hover:text-blue-900 mb-2 mr-2" style="display: block;">View</a>
                                        <a href="{{ route('pawnshop.index') }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2" style="display: block;">Edit</a>
                                        <form class="inline-block" action="{{ route('pawnshop.destroy', [$pawnshop->id]) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-2" value="Delete">
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <p class="text-warning">No record available</p>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>