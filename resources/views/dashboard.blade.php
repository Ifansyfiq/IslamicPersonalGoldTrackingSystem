<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <link rel="stylesheet" href="{{ asset('css/card.css') }}">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="promo_card">
                <h1>Welcome to myGoldTrace</h1>
                <span style="font-family: verdana, geneva, sans-serif;">Lorem ipsum dolor sit amet.</span>
                <button class="custom-btn btn-2" style="display: block;">Learn More</button>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-6">
                <div class="card">
                    <div class="card-overlay"></div>
                    <div class="card-inner">Gold Record<br>1<br>HERE</div>
                </div>
                <div class="card">
                    <div class="card-overlay"></div>
                    <div class="card-inner">Total Gold Weight<br>2<br>HERE</div>
                </div>
                <div class="card">
                    <div class="card-overlay"></div>
                    <div class="card-inner">YOUR<br>3<br>HERE</div>
                </div>
            </div>

        </div>
    </div>

</x-app-layout>