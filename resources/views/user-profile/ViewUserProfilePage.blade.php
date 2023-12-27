<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <form action="{{ route('user.index', request()->query()) }}">
                        <div class="flex mt-2">
                            <input type="text" name="search" placeholder="Search" class="py-2 px-2 text-md border border-gray-200 rounded-l focus:outline-none" value="{{$search}}" />
                            <button type="submit" class="w-10 flex items-center justify-center border-t border-r border-b border-gray-200 rounded-r text-gray-100" style="background: #B59410;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" style="color: white;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </button>
                        </div>
                    </form>
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8 ">
                        <div class="overflow-hidden">
                            <table class="min-w-full text-left text-sm font-light ">
                                <thead class="border-b font-medium dark:border-neutral-500">
                                    <tr>
                                        <th scope="col" width="50" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider" style="background: #B59410;">
                                            No
                                        </th>
                                        <th sc <th scope="col" width="50" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider" style="background: #B59410;">
                                            UserName
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider" style="background: #B59410;">
                                            Phone Num
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider" style="background: #B59410;">
                                            Email
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider" style="background: #B59410;">
                                            Role
                                        </th>
                                        <th scope="col" width="200" class="px-6 py-3 text-white uppercase text-center" style="background: #B59410;">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @php
                                    $counter = 1; // Initialize a counter variable
                                    @endphp
                                    <tr>
                                        @forelse ($users as $user)
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $counter }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{($user->name)}}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{($user->phone_num)}}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{($user->email)}}
                                        </td>

                                        <td class="px-3 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{($user->roles->pluck('name')->implode(' '))}}
                                        </td>

                                        <td class="px-6 py-6 whitespace-nowrap text-sm font-medium text-center">
                                            <a href="{{ route('user.show', [$user->id]) }}" class="text-blue-600 hover:text-blue-900 mb-2 mr-2">View</a>
                                            <form action="{{ route('user.destroy', [$user->id]) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-2" value="Delete">
                                            </form>
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
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>