<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="phone_num" value="{{ __('Phone Number') }}" />
                <x-input id="phone_num" class="block mt-1 w-full" type="text" name="phone_num" :value="old('phone_num')" required autofocus autocomplete="phone_num" />
            </div>

            <div class="mt-4">
                <x-label for="address" value="{{ __('Address') }}" />
                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
            </div>

            <div class="mt-4">
                <x-label for="state" value="{{ __('State') }}" />
                <select id="state" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="state" required autofocus autocomplete="state">
                    <option value="" disabled selected>Select State</option>
                    <option value="Johor" @if(old('state')=='Johor' ) selected @endif>Johor</option>
                    <option value="Kedah" @if(old('state')=='Kedah' ) selected @endif>Kedah</option>
                    <option value="Kelantan" @if(old('state')=='Kelantan' ) selected @endif>Kelantan</option>
                    <option value="Melaka" @if(old('state')=='Melaka' ) selected @endif>Melaka</option>
                    <option value="Kuala Lumpur" @if(old('state')=='Kuala Lumpur' ) selected @endif>Kuala Lumpur</option>
                    <option value="Putrajaya" @if(old('state')=='Putrajaya' ) selected @endif>Putrajaya</option>
                    <option value="Negeri Sembilan" @if(old('state')=='Negeri Sembilan' ) selected @endif>Negeri Sembilan</option>
                    <option value="Pahang" @if(old('state')=='Pahang' ) selected @endif>Pahang</option>
                    <option value="Perak" @if(old('state')=='Perak' ) selected @endif>Perak</option>
                    <option value="Perlis" @if(old('state')=='Perlis' ) selected @endif>Perlis</option>
                    <option value="Pulau Pinang" @if(old('state')=='Pulau Pinang' ) selected @endif>Pulau Pinang</option>
                    <option value="Sabah" @if(old('state')=='Sabah' ) selected @endif>Sabah</option>
                    <option value="Sarawak" @if(old('state')=='Sarawak' ) selected @endif>Sarawak</option>
                    <option value="Selangor" @if(old('state')=='Selangor' ) selected @endif>Selangor</option>
                    <option value="Terengganu" @if(old('state')=='Terengganu' ) selected @endif>Terengganu</option>
                </select>
            </div>

            <div class="mt-4">
                <x-label for="city" value="{{ __('City') }}" />
                <x-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required autofocus autocomplete="city" />
            </div>

            <div class="mt-4">
                <x-label for="postal_code" value="{{ __('Postal Code') }}" />
                <x-input id="postal_code" class="block mt-1 w-full" type="text" name="postal_code" :value="old('postal_code')" required autofocus autocomplete="postal_code" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <x-label for="terms">
                    <div class="flex items-center">
                        <x-checkbox name="terms" id="terms" required />

                        <div class="ml-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                            ]) !!}
                        </div>
                    </div>
                </x-label>
            </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>