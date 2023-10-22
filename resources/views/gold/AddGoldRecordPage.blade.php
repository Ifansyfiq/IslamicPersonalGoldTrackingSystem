<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Record') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="block mb-8">
                <h2 class="text-black underline font-semibold ">Add Record</h2>
            </div>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">

                        <form action="{{route('gold.store')}}" method="POST">
                            @csrf
                            <div class="row pt-3">
                                <div class="control-group col-12">
                                    <label for="gold_name">Gold Name</label>
                                    <input type="text" id="gold_name" class="form-control" name="gold_name" required>
                                </div>
                                <div class="control-group col-12 mt-2 pt-3">
                                    <label for="weight">Weight (g)</label>
                                    <input type="text" id="weight" class="form-control" name="weight" required>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="control-group col-12 text-center">
                                    <button id="btn-submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>