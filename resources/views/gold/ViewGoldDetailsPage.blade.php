<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gold Record') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-white uppercase bg-gray-800">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Gold Details
                            </th>
                            <th scope="col" class="px-6 py-3">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-black">
                                Gold Image
                            </th>
                            <td class="px-6 py-4">
                                <img src="{{ asset('uploads/golds/'.$gold->gold_image) }}" width="100px" alt="" class="img-fluid">
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-black">
                                Gold Name
                            </th>
                            <td class="px-6 py-4">
                                {{($gold->gold_name)}}
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-black">
                                Purchase Date
                            </th>
                            <td class="px-6 py-4">
                                {{ \Carbon\Carbon::parse($gold->purchase_date)->format('d-m-y') }}
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-black">
                                Purchase Time
                            </th>
                            <td class="px-6 py-4">
                                {{ \Carbon\Carbon::parse($gold->purchase_time)->format('h:i A') }}
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-black">
                                Purchase From
                            </th>
                            <td class="px-6 py-4">
                                {{($gold->purchase_from)}}
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-black">
                                Gold Figure
                            </th>
                            <td class="px-6 py-4">
                                {{($gold->goldtype->gold_type)}}
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-black">
                                Purity
                            </th>
                            <td class="px-6 py-4">
                                {{($gold->gold_purity)}}
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-black">
                                Weight
                            </th>
                            <td class="px-6 py-4">
                                {{($gold->weight)}}g
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-black">
                                Status
                            </th>
                            <td class="px-6 py-4">
                                {{($gold->status)}}
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-black">
                                Buy Price
                            </th>
                            <td class="px-6 py-4">
                                RM {{($gold->buy_price)}}
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-black">
                                Sell Price
                            </th>
                            <td class="px-6 py-4">
                                RM {{($gold->sell_price)}}
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-black">
                                Spread
                                <br>
                                (Sell Price-Buy Price)/Sell Price*100
                            </th>
                            <td class="px-6 py-4">
                                {{($gold->spread)}}%
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="flex items-center justify-center px-4 py-3 text-center sm:px-6">
                <a href="{{ route('gold.edit', [$gold->id]) }}" class="inline-flex items-center px-4 py-2 mr-3 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">Edit</a>
                <form class="inline-flex items-center px-4 py-2 mr-3 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150" action="{{ route('gold.destroy', [$gold->id]) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="" value="DELETE">
                </form>
                <a href="{{ route('gold.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">Cancel</a>
            </div>
        </div>
    </div>
</x-app-layout>