<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Record') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="block mb-8">
                <h2 class="text-black underline font-semibold ">Update Record</h2>
            </div>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">

                        <form action="{{route('gold.update', [$golds->id])}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row pt-3">
                                <div class="control-group col-12">
                                    <label for="gold_name">Gold Name :</label>
                                    <input type="text" id="gold_name" class="form-control" name="gold_name" value="{{ $golds->gold_name }}" required>
                                </div>
                                <div class="control-group col-12 mt-2 pt-3">
                                    <label for="gold_purity">Purity :</label>
                                    <input type="text" id="gold_purity" class="form-control" name="gold_purity" value="{{ $golds->gold_purity }}" required>
                                </div>
                                <div class="control-group col-12 mt-2 pt-3">
                                    <label for="weight">Weight(g) :</label>
                                    <input type="text" id="weight" class="form-control" name="weight" value="{{ $golds->weight }}" required>
                                </div>
                                <div class="control-group col-12 mt-2 pt-3">
                                    <label for="buy_shop">Buy Shop :</label>
                                    <input type="text" id="buy_shop" class="form-control" name="buy_shop" value="{{ $golds->buy_shop }}" required>
                                </div>
                                <div class="control-group col-12 mt-2 pt-3">
                                    <label for="status">Status :</label>
                                    <input type="text" id="status" class="form-control" name="status" value="{{ $golds->status }}" required>
                                </div>
                                <div class="control-group col-12 mt-2 pt-3">
                                    <label for="buy_price">Buy Price(RM) :</label>
                                    <input type="text" id="buy_price" class="form-control" name="buy_price" value="{{ $golds->buy_price }}" required>
                                </div>
                                <div class="control-group col-12 mt-2 pt-3">
                                    <label for="sell_price">Sell Price(RM) :</label>
                                    <input type="text" id="sell_price" class="form-control" name="sell_price" value="{{ $golds->sell_price }}" required>
                                </div>
                                <div class="control-group col-12 mt-2 pt-3">
                                    <label for="spread">Spread(%) :</label>
                                    <input type="text" id="spread" class="form-control" name="spread" value="{{ $golds->spread }}" required>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="control-group col-12 text-center">
                                    <button id="btn-submit" class="btn btn-primary">
                                        Update
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