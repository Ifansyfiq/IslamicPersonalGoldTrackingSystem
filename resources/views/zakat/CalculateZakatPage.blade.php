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
                                    <label for="year">Year/Haul</label>
                                    <select id="year" name="year" oninput="urufValue()">
                                        <option value="" disabled selected></option>
                                        <option value="2023">2023</option>
                                        <option value="2022">2022</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                    </select>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div>
                                    <label for="weight">Weight(g)</label>
                                    <input type="text" id="weight" class="form-control" name="weight" oninput="calcValueZakat()">
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div>
                                    <label for="uruf">Uruf Value(g)</label>
                                    <input type="text" id="uruf" class="form-control" name="uruf" readonly>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div>
                                    <label for="goldprice">Gold Price(RM)</label>
                                    <input type="text" id="goldprice" class="form-control" name="goldprice" readonly>
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
                                Value (RM)
                            </th>
                            <td></td>
                            <td></td>
                            <td class="px-6 py-4">
                                <div>
                                    <input type="text" id="value" class="form-control" name="value" readonly>
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
                                    <input type="text" id="totalZakat" class="form-control" name="totalZakat" readonly>
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
                                    <label for="year2">Year/Haul</label>
                                    <select id="year2" name="year2" oninput="urufValue2()">
                                        <option value="" disabled selected></option>
                                        <option value="2023">2023</option>
                                        <option value="2022">2022</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                    </select>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div>
                                    <label for="weight2">Weight(g)</label>
                                    <input type="text" id="weight2" class="form-control" name="weight2" oninput="calcValueZakat2()">
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div>
                                    <label for="uruf2">Uruf Value(g)</label>
                                    <input type="text" id="uruf2" class="form-control" name="uruf2" readonly>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div>
                                    <label for="goldprice2">Gold Price(RM)</label>
                                    <input type="text" id="goldprice2" class="form-control" name="goldprice2" readonly>
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
                                Value (RM)
                            </th>
                            <td></td>
                            <td></td>
                            <td class="px-6 py-4">
                                <div>
                                    <input type="text" id="value2" class="form-control" name="value2" readonly>
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
                                    <input type="text" id="totalZakat2" class="form-control" name="totalZakat2" readonly>
                                </div>
                        </tr>
                    </tbody>
                </table>


            </div>
        </div>
    </div>

    <script>
        function urufValue() {
            var x = document.getElementById("year").value;
            if (x == "2023") {
                document.getElementById("uruf").value = "800";
                document.getElementById("goldprice").value = "254.42";
            } else if (x == "2022") {
                document.getElementById("uruf").value = "800";
                document.getElementById("goldprice").value = "239.55";
            } else if (x == "2021") {
                document.getElementById("uruf").value = "800";
                document.getElementById("goldprice").value = "238.81";
            } else if (x == "2020") {
                document.getElementById("uruf").value = "800";
                document.getElementById("goldprice").value = "164.33";
            } else
                document.getElementById("uruf").value = "0";
        }

        function calcValueZakat() {
            var weight = document.getElementById("weight").value;
            var uruf = document.getElementById("uruf").value;
            var goldPrice = document.getElementById("goldprice").value;

            // calculate gold value
            var goldValue = weight * goldPrice;
            document.getElementById("value").value = goldValue.toFixed(2);

            // calculate zakat price
            var zakatPrice = goldValue * 0.025;
            document.getElementById("totalZakat").value = zakatPrice.toFixed(2);
        }

        function urufValue2() {
            var x = document.getElementById("year2").value;
            if (x == "2023") {
                document.getElementById("uruf2").value = "85";
                document.getElementById("goldprice2").value = "254.42";
            } else if (x == "2022") {
                document.getElementById("uruf2").value = "85";
                document.getElementById("goldprice2").value = "239.55";
            } else if (x == "2021") {
                document.getElementById("uruf2").value = "85";
                document.getElementById("goldprice2").value = "238.81";
            } else if (x == "2020") {
                document.getElementById("uruf2").value = "85";
                document.getElementById("goldprice2").value = "164.33";
            } else
                document.getElementById("uruf2").value = "0";
        }

        function calcValueZakat2() {
            var weight = document.getElementById("weight2").value;
            var uruf = document.getElementById("uruf2").value;
            var goldPrice = document.getElementById("goldprice2").value;

            // calculate gold value
            var goldValue = weight * goldPrice;
            document.getElementById("value2").value = goldValue.toFixed(2);

            // calculate zakat price
            var zakatPrice = goldValue * 0.025;
            document.getElementById("totalZakat2").value = zakatPrice.toFixed(2);
        }
    </script>


</x-app-layout>