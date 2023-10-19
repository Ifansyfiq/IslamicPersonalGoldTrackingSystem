<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Record') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="block mb-8">
                <h2 class="text-black underline font-semibold ">Gold Details</h2>
            </div>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">  

                        <h2 class="text-black"><b>Gold Name:</b> {{($gold->gold_name)}} </h2>
                        
                        <h2 class="text-black"><b>Gold Type:</b> {{($gold->goldtype->gold_type)}} </h2>

                        <h2 class="text-black"><b>Purity (k):</b> {{($gold->gold_purity)}} </h2>

                        <h2 class="text-black"><b>Weight (g):</b> {{($gold->weight)}} </h2>

                        <h2 class="text-black"><b>Buy Shop:</b> {{($gold->buy_shop)}} </h2>

                        <h2 class="text-black"><b>Status:</b> {{($gold->status)}} </h2>

                        <h2 class="text-black"><b>Buy Price (RM):</b> {{($gold->buy_price)}} </h2>

                        <h2 class="text-black"><b>Sell Price:</b> {{($gold->sell_price)}} </h2>

                        <h2 class="text-black"><b>Spread (%):</b> {{($gold->spread)}} </h2>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
