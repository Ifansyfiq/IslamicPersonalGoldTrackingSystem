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