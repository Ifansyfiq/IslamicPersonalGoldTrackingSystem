<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Zakat') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="block mb-8">
                <h2 class="text-black underline font-semibold ">Gold Zakat Calculation</h2>
            </div>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div>
                            <label for="year">Year/Haul :</label>
                            <select id="year" name="year" oninput="urufValue()">
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                            </select>
                        </div>
                        <div>
                            <label for="uruf">Uruf Value(g) :</label>
                            <input type="text" id="uruf" class="form-control" name="uruf" readonly>
                        </div>
                        <div>
                            <label for="goldprice">Gold Price(RM) :</label>
                            <input type="text" id="goldprice" class="form-control" name="goldprice" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block mb-8">
                <h2 class="text-black underline font-semibold ">Add Gold</h2>
            </div <div class="flex flex-col">
            <div>
                <label for="uruf">Gold Name :</label>
                <select id="goldname" name="goldname" oninput="goldWeight(this.value)">
                    @forelse ($golds as $gold)
                    <option value="{{ $gold->gold_name }}" data-weight="{{ $gold->weight }}">{{ $gold->gold_name }}</option>
                    @empty
                    <option value="">No gold available</option>
                    @endforelse
                </select>
            </div>
            <div>
                <label for="weight">Weight(g) :</label>
                <input type="text" id="weight" class="form-control" name="weight" readonly>
            </div>

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
    </script>


</x-app-layout>