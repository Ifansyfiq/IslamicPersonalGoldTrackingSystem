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
                                            <option value="" disabled selected></option>
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
                                        <option value="Johor">Johor</option>
                                        <option value="Kedah">Kedah</option>
                                        <option value="Kelantan">Kelantan</option>
                                        <option value="Melaka">Melaka</option>
                                        <option value="Kuala Lumpur dan Putrajaya">Kuala Lumpur dan Putrajaya</option>
                                        <option value="Negeri Sembilan">Negeri Sembilan</option>
                                        <option value="Pahang">Pahang</option>
                                        <option value="Perak">Perak</option>
                                        <option value="Perlis">Perlis</option>
                                        <option value="Pulau Pinang">Pulau Pinang</option>
                                        <option value="Sabah">Sabah</option>
                                        <option value="Sarawak">Sarawak</option>
                                        <option value="Selangor">Selangor</option>
                                        <option value="Terengganu">Terengganu</option>
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
                                        <x-input type="text" id="weightW" class="form-control" name="weightW" oninput="calcValueZakatWear()" />
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
                                            <option value="" disabled selected></option>
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
                                        <x-input type="text" id="weightK" class="form-control" name="weightK" oninput="calcValueZakatKeep()" />
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
                        <input type="reset" class="inline-flex items-center px-4 py-2 mr-3 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // for wear gold
        function goldValueWear() {
            var x = document.getElementById("yearW").value;
            if (x == "2023") {
                document.getElementById("goldpriceW").value = "254.42";
            } else if (x == "2022") {
                document.getElementById("goldpriceW").value = "239.55";
            } else if (x == "2021") {
                document.getElementById("goldpriceW").value = "238.81";
            } else if (x == "2020") {
                document.getElementById("goldpriceW").value = "164.33";
            } else
                document.getElementById("goldpriceW").value = "0";
        }

        function urufValueWear() {
            var x = document.getElementById("locationW").value;
            if (x == "Johor") {
                document.getElementById("urufW").value = "850";
            } else if (x == "Kedah") {
                document.getElementById("urufW").value = "170";
            } else if (x == "Kelantan") {
                document.getElementById("urufW").value = "0";
            } else if (x == "Melaka") {
                document.getElementById("urufW").value = "180";
            } else if (x == "Kuala Lumpur dan Putrajaya") {
                document.getElementById("urufW").value = "200";
            } else if (x == "Negeri Sembilan") {
                document.getElementById("urufW").value = "170";
            } else if (x == "Pahang") {
                document.getElementById("urufW").value = "500";
            } else if (x == "Perak") {
                document.getElementById("urufW").value = "500";
            } else if (x == "Perlis") {
                document.getElementById("urufW").value = "85";
            } else if (x == "Pulau Pinang") {
                document.getElementById("urufW").value = "165";
            } else if (x == "Sabah") {
                document.getElementById("urufW").value = "152";
            } else if (x == "Sarawak") {
                document.getElementById("urufW").value = "90";
            } else if (x == "Selangor") {
                document.getElementById("urufW").value = "800";
            } else if (x == "Terengganu") {
                document.getElementById("urufW").value = "850";
            } else
                document.getElementById("urufW").value = "0";
        }

        // for wear gold
        function calcValueZakatWear() {
            var weight = parseFloat(document.getElementById("weightW").value);
            var uruf = parseFloat(document.getElementById("urufW").value);
            var goldPrice = parseFloat(document.getElementById("goldpriceW").value);

            if (weight >= uruf) {
                // Set the flag to false to indicate that the alert has not been displayed
                alertDisplayed = false;

                // calculate gold value
                var goldValue = (weight - uruf) * goldPrice;
                document.getElementById("valueW").value = goldValue.toFixed(2);

                // calculate zakat price
                var zakatPrice = goldValue * 0.025;
                document.getElementById("totalZakatW").value = zakatPrice.toFixed(2);
            } else if (weight < uruf) {
                if (!alertDisplayed) { // Check if the alert has been displayed
                    document.getElementById("valueW").value = "0";
                    document.getElementById("totalZakatW").value = "0";
                    alert("Not subject to zakat because the weight of gold is less than the value of the letter.");
                    alertDisplayed = true; // Set the flag to true to indicate that the alert has been displayed
                }
            } else {
                document.getElementById("valueW").value = "0";
                document.getElementById("totalZakatW").value = "0";
            }

        }

        // for keep gold
        function urufValueKeep() {
            var x = document.getElementById("yearK").value;
            if (x == "2023") {
                document.getElementById("urufK").value = "85";
                document.getElementById("goldpriceK").value = "254.42";
            } else if (x == "2022") {
                document.getElementById("urufK").value = "85";
                document.getElementById("goldpriceK").value = "239.55";
            } else if (x == "2021") {
                document.getElementById("urufK").value = "85";
                document.getElementById("goldpriceK").value = "238.81";
            } else if (x == "2020") {
                document.getElementById("urufK").value = "85";
                document.getElementById("goldpriceK").value = "164.33";
            } else
                document.getElementById("urufK").value = "0";
        }

        // for keep gold
        function calcValueZakatKeep() {
            var weight = parseFloat(document.getElementById("weightK").value);
            var uruf = parseFloat(document.getElementById("urufK").value);
            var goldPrice = parseFloat(document.getElementById("goldpriceK").value);

            if (weight >= uruf) {
                // Set the flag to false to indicate that the alert has not been displayed
                alertDisplayed = false;

                // calculate gold value
                var goldValue = weight * goldPrice;
                document.getElementById("valueK").value = goldValue.toFixed(2);

                // calculate zakat price
                var zakatPrice = goldValue * 0.025;
                document.getElementById("totalZakatK").value = zakatPrice.toFixed(2);
            } else if (weight < uruf) {
                if (!alertDisplayed) { // Check if the alert has been displayed
                    document.getElementById("valueK").value = "0";
                    document.getElementById("totalZakatK").value = "0";
                    alert("Not subject to zakat because the weight of gold is less than the value of the letter.");
                    alertDisplayed = true; // Set the flag to true to indicate that the alert has been displayed
                }
            } else {
                document.getElementById("valueK").value = "0";
                document.getElementById("totalZakatK").value = "0";
            }
        }
    </script>


</x-app-layout>