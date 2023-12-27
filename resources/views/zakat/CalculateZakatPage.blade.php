<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Zakat') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto">
                <!-- Wear Gold Table -->
                <form>
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                        <thead class="text-xs text-white uppercase bg-gray-800">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Wear Gold
                                </th>
                                @for ($i = 0; $i < 4; $i++)<th scope="col" class="px-6 py-3">
                                    </th>
                                    @endfor
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b">
                                <th class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                <td class="px-6 py-4">
                                    <div>
                                        <x-label for="yearW">Year / Haul</x-label>
                                        <select id="yearW" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="yearW" oninput="goldValueWear()">
                                            <option value="2023">2023</option>
                                            <option value="2022">2022</option>
                                            <option value="2021">2021</option>
                                            <option value="2020">2020</option>
                                        </select>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div></div>
                                </td>
                                <td class="px-6 py-4">
                                    <div></div>
                                </td>
                                <td class="px-6 py-4">
                                    <div>
                                        <x-label for="goldpriceW">Gold Price(RM)</x-label>
                                        <x-input type="text" id="goldpriceW" class="form-control" name="goldpriceW" readonly />
                                    </div>
                                </td>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                        <tbody>
                            <tr class="bg-white border-b">
                                <th></th>
                                <td>
                                    <x-label for="locationW">Location</x-label>
                                    <select id="locationW" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="locationW" oninput="urufValueWear()">
                                        <option value="" disabled selected></option>
                                        <option value="Johor" {{ $user->state === 'Johor' ? 'selected' : '' }}>Johor</option>
                                        <option value="Kedah" {{ $user->state === 'Kedah' ? 'selected' : '' }}>Kedah</option>
                                        <option value="Kelantan" {{ $user->state === 'Kelantan' ? 'selected' : '' }}>Kelantan</option>
                                        <option value="Melaka" {{ $user->state === 'Melaka' ? 'selected' : '' }}>Melaka</option>
                                        <option value="Kuala Lumpur" {{ $user->state === 'Johor' ? 'selected' : '' }}>Kuala Lumpur</option>
                                        <option value="Putrajaya" {{ $user->state === 'Johor' ? 'selected' : '' }}>Putrajaya</option>
                                        <option value="Negeri Sembilan" {{ $user->state === 'Negeri Sembilan' ? 'selected' : '' }}>Negeri Sembilan</option>
                                        <option value="Pahang" {{ $user->state === 'Pahang' ? 'selected' : '' }}>Pahang</option>
                                        <option value="Perak" {{ $user->state === 'Perak' ? 'selected' : '' }}>Perak</option>
                                        <option value="Perlis" {{ $user->state === 'Perlis' ? 'selected' : '' }}>Perlis</option>
                                        <option value="Pulau Pinang" {{ $user->state === 'Pulau Pinang' ? 'selected' : '' }}>Pulau Pinang</option>
                                        <option value="Sabah" {{ $user->state === 'Sabah' ? 'selected' : '' }}>Sabah</option>
                                        <option value="Sarawak" {{ $user->state === 'Sarawak' ? 'selected' : '' }}>Sarawak</option>
                                        <option value="Selangor" {{ $user->state === 'Selangor' ? 'selected' : '' }}>Selangor</option>
                                        <option value="Terengganu" {{ $user->state === 'Terengganu' ? 'selected' : '' }}>Terengganu</option>
                                    </select>
                                </td>
                                <td></td>
                                <td class="px-6 py-4">
                                    <div>
                                        <x-label for="urufW">Uruf Value(g)</x-label>
                                        <x-input type="text" id="urufW" class="form-control" name="urufW" readonly />
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-black">
                                    Weight(g)
                                </th>
                                <td></td>
                                <td></td>
                                <td class="px-6 py-4">
                                    <div>
                                        <div>
                                            <x-input type="text" value="{{ app('App\Http\Controllers\ZakatController')->calculateTotalWear() }}" id="weightW" class="form-control" name="weightW" oninput="calcValueZakatWear()" />
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-black">
                                    Value (RM)
                                </th>
                                <td></td>
                                <td></td>
                                <td class="px-6 py-4">
                                    <div>
                                        <x-input type="text" id="valueW" class="form-control" name="valueW" readonly />
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-black">
                                    Total Zakat (RM)
                                </th>
                                <td></td>
                                <td></td>
                                <td class="px-6 py-4">
                                    <div>
                                        <x-input type="text" id="totalZakatW" class="form-control" name="totalZakatW" readonly />
                                    </div>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Keep Gold Table -->
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                        <thead class="text-xs text-white uppercase bg-gray-800">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Keep Gold
                                </th>
                                @for ($i = 0; $i < 4; $i++)<th scope="col" class="px-6 py-3">
                                    </th>
                                    @endfor
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b">
                                <th class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                <td class="px-6 py-4">
                                    <div>
                                        <x-label for="yearK">Year/Haul</x-label>
                                        <select id="yearK" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="yearK" oninput="urufValueKeep()">
                                            <option value="2023">2023</option>
                                            <option value="2022">2022</option>
                                            <option value="2021">2021</option>
                                            <option value="2020">2020</option>
                                        </select>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div> </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div>
                                        <x-label for="urufK">Uruf Value(g)</x-label>
                                        <x-input type="text" id="urufK" class="form-control" name="urufK" readonly />
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div>
                                        <x-label for="goldpriceK">Gold Price(RM)</x-label>
                                        <x-input type="text" id="goldpriceK" class="form-control" name="goldpriceK" readonly />
                                    </div>
                                </td>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                        <tbody>
                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-black">
                                    Weight(g)
                                </th>
                                <td></td>
                                <td></td>
                                <td class="px-6 py-4">
                                    <div>
                                        <x-input type="text" id="weightK" value="{{ app('App\Http\Controllers\ZakatController')->calculateTotalKeep() }}" class="form-control" name="weightK" oninput="calcValueZakatKeep()" />
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-black">
                                    Value (RM)
                                </th>
                                <td></td>
                                <td></td>
                                <td class="px-6 py-4">
                                    <div>
                                        <x-input type="text" id="valueK" class="form-control" name="valueK" readonly />
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-black">
                                    Total Zakat (RM)
                                </th>
                                <td></td>
                                <td></td>
                                <td class="px-6 py-4">
                                    <div>
                                        <x-input type="text" id="totalZakatK" class="form-control" name="totalZakatK" readonly />
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="flex items-center justify-center px-4 py-3 text-center sm:px-6">
                        <button <a href="#" onclick="window.print()" class="inline-flex items-center px-4 py-2 mr-3 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                            Print
                        </button>
                        <button onclick="refreshPage()" class="inline-flex items-center px-4 py-2 mr-3 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/zakatCalculator.js') }}"></script>
</x-app-layout>