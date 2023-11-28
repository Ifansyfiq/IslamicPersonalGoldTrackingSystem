<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Zakat') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto">
                <!-- Gold Zakat Calculation Table -->
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-white uppercase bg-gray-800">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Gold Zakat Calculation
                            </th>
                            @for ($i = 0; $i < 3; $i++)<th scope="col" class="px-6 py-3">
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
                                        <option value="2023">2023</option>
                                        <option value="2022">2022</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                    </select>
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
                <!-- Add Gold Table -->
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-white uppercase bg-gray-800">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Add Gold
                            </th>
                            @for ($i = 0; $i < 3; $i++)<th scope="col" class="px-6 py-3">
                                </th>
                                @endfor
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b">
                            <th class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            <td class="px-6 py-4">
                                <div>
                                    <label for="uruf">Gold Name</label>
                                    <select id="goldname" name="goldname" oninput="goldWeight(this.value)">
                                        <option value="" disabled selected></option>
                                        @forelse ($golds as $gold)
                                        <option value="{{ $gold->gold_name }}" data-weight="{{ $gold->weight }}">{{ $gold->gold_name }}</option>
                                        @empty
                                        <option value="">No gold available</option>
                                        @endforelse
                                    </select>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div>
                                    <label for="weight">Weight(g)</label>
                                    <input type="text" id="weight" class="form-control" name="weight" readonly>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div>
                                    <label for="type">Type</label>
                                    <select id="type" name="type" oninput="changeUrufValue()">
                                        <option value="wear">Wear</option>
                                        <option value="keep">Keep</option>
                                    </select>
                                </div>
                            </td>
                            </th>
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-black">
                                Value (RM)
                            </th>
                            <td></td>
                            <td></td>
                            <td class="px-6 py-4">
                                <div>
                                    id=value
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
                                    id=value
                                </div>
                        </tr>
                    </tbody>
                </table>
                <!-- Gold Zakat Calculation Table -->
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-white uppercase bg-gray-800">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Gold Zakat Calculation Lists
                            </th>
                            @for ($i = 0; $i < 5; $i++)<th scope="col" class="px-6 py-3">
                                </th>
                                @endfor
                        </tr>
                    </thead>
                    <thead class="bg-white border-b">
                        <tr>
                            <th scope="col" width='20' class="px-6 py-3">
                                Gold Name
                            </th>
                            <th scope="col" width='20' class="px-6 py-3">
                                Type
                            </th>
                            <th scope="col" width='20' class="px-6 py-3">
                                Price(RM)
                            </th>
                            <th scope="col" width='20' class="px-6 py-3">
                                Weight(g)
                            </th>
                            <th scope="col" width='20' class="px-6 py-3">
                                Gold Value(RM)
                            </th>
                            <th scope="col" width='20' class="px-6 py-3">
                                Zakat Price(RM)
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4">
                                Value (RM)
                            </th>
                            <td class="px-6 py-4">
                                <div>
                                    id=value
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div>
                                    id=value
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div>
                                    id=value
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div>
                                    id=value
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div>
                                    id=value
                                </div>
                            </td>
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

        function goldWeight(selectedGold) {
            var weightInput = document.getElementById("weight");
            var selectedOption = document.querySelector("#goldname option:checked");

            if (selectedOption) {
                // Use the data-weight attribute of the selected option
                var selectedWeight = selectedOption.getAttribute("data-weight");
                weightInput.value = selectedWeight || "";
            } else {
                weightInput.value = "0"; // or any default value
            }
        }

        function changeUrufValue() {
            var x = document.getElementById("type").value;
            if (x == "wear") {
                document.getElementById("uruf").value = "800";
            } else if (x == "keep") {
                document.getElementById("uruf").value = "85";
            } else
                document.getElementById("uruf").value = "0";
        }
    </script>


</x-app-layout>