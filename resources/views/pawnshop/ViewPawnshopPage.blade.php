<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ar-Rahnu') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="block mb-8">
                @can('create', App\Models\Pawnshop::class)
                <a href="{{ route('pawnshop.create') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">Add Items</a>
                @endcan
            </div>
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <form action="{{ route('pawnshop.index', request()->query()) }}">
                        <div class="flex mt-2">
                            <input type="text" name="search" placeholder="Search" class="py-2 px-2 text-md border border-gray-200 rounded-l focus:outline-none" value="{{$search}}" />
                            <button type="submit" class="w-10 flex items-center justify-center border-t border-r border-b border-gray-200 rounded-r text-gray-100 bg-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" style="color: white;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </button>
                        </div>
                    </form>
                    <div class="py-2 align-middle inline-block min-w-full sm:px-1 lg:px-8">
                        @forelse ($pawnshops as $pawnshop)
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 mt-3">
                            <thead class="text-white uppercase bg-gray-800 mb-4">
                                <tr>
                                    <th scope="col" class="px-6 py-2 bg-gray-800 text-left text-xs font-semibold uppercase tracking-wider">
                                        {{ $pawnshop->arrahnu_type }}
                                    </th>
                                    @for ($i = 0; $i < 9; $i++) <th scope="col" class="px-6 py-3 bg-gray-800 text-left text-xs font-medium text-white uppercase tracking-wider">
                                        </th>
                                        @endfor
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

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900" style="display: block;">
                                        Last Updated At: ({{ $pawnshop->updated_at->diffForHumans()}})
                                    </td>

                                    @for ($i = 0; $i < 8; $i++)<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        </td>
                                        @endfor

                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-right">
                                            @can('view', $pawnshop)
                                            <a href="{{ route('pawnshop.show', [$pawnshop->id]) }}" class="text-blue-600 hover:text-blue-900 mb-2 mr-2" style="display: block;">View</a>
                                            @endcan
                                            @can('update', $pawnshop)
                                            <a href="{{ route('pawnshop.edit', [$pawnshop->id]) }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2" style="display: block;">Edit</a>
                                            @endcan
                                            @can('delete', $pawnshop)
                                            <form class="inline-block" action="{{ route('pawnshop.destroy', [$pawnshop->id]) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-2" value="Delete">
                                            </form>
                                            @endcan
                                        </td>
                                </tr>
                                @empty
                                <p class="text-warning">No record available</p>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $pawnshops->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>