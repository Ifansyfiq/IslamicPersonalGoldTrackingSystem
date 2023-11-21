<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ar-Rahnu') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="block mb-8">
                <h2 class="text-black underline font-semibold ">Add Items</h2>
            </div>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">

                        <form action="{{route('pawnshop.store')}}" method="POST">
                            @csrf
                            <div class="row pt-3">
                                <div class="control-group col-12">
                                    <label for="arrahnu_type">Ar-Rahnu Type :</label>
                                    <input type="text" id="arrahnu_type" class="form-control" name="arrahnu_type" required>
                                </div>
                                <div class="control-group col-12 mt-2 pt-3">
                                    <label for="arrahnu_name">Ar-Rahnu Name :</label>
                                    <input type="text" id="arrahnu_name" class="form-control" name="arrahnu_name" required>
                                </div>
                                <div class="text-black font-semibold col-12 mt-2 pt-3">
                                    Safekeeping Rate
                                </div>
                                
                                <div class="control-group col-12 mt-2 pt-3">
                                    <label for="margin">Margin :</label>
                                    <input type="text" id="margin" class="form-control" name="margin" required>
                                </div>
                                <div class="control-group col-12 mt-2 pt-3">
                                    <label for="loan_duration">Loan duration :</label>
                                    <input type="text" id="loan_duration" class="form-control" name="loan_duration" required>
                                </div>

                                <div class="text-black font-semibold col-12 mt-2 pt-3">
                                    Agents
                                </div>
                                <div class="control-group col-12 mt-2 pt-3">
                                    <label for="agent_name">Name :</label>
                                    <input type="text" id="agent_name" class="form-control" name="agent_name" required>
                                </div>
                                <div class="control-group col-12 mt-2 pt-3">
                                    <label for="agent_contact_num">Contact num :</label>
                                    <input type="text" id="agent_contact_num" class="form-control" name="agent_contact_num" required>
                                </div>

                                <div class="text-black font-semibold col-12 mt-2 pt-3">
                                    Contact Details
                                </div>
                                <div class="control-group col-12 mt-2 pt-3">
                                    <label for="email">Email :</label>
                                    <input type="text" id="email" class="form-control" name="email" required>
                                </div>
                                <div class="control-group col-12 mt-2 pt-3">
                                    <label for="hotline">Hotline :</label>
                                    <input type="text" id="hotline" class="form-control" name="hotline" required>
                                </div>
                                <div class="control-group col-12 mt-2 pt-3">
                                    <label for="address ">Address :</label>
                                    <input type="text" id="address " class="form-control" name="address " required>
                                </div>
                                <div class="control-group col-12 mt-2 pt-3">
                                    <label for="coordinate">Address coordinate :</label>
                                    <input type="text" id="coordinate" class="form-control" name="coordinate" required>
                                </div>
                                <div class="control-group col-12 mt-2 pt-3">
                                    <label for="operation_time">Operation time :</label>
                                    <input type="text" id="operation_time" class="form-control" name="operation_time" required>
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