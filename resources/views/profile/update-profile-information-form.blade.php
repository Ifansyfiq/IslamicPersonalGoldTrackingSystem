<x-form-section submit="updateProfileInformation">


    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
        <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
            <!-- Profile Photo File Input -->
            <input type="file" class="hidden" wire:model.live="photo" x-ref="photo" x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

            <x-label for="photo" value="{{ __('Photo') }}" />

            <!-- Current Profile Photo -->
            <div class="mt-2" x-show="! photoPreview">
                <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">
            </div>

            <!-- New Profile Photo Preview -->
            <div class="mt-2" x-show="photoPreview" style="display: none;">
                <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center" x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                </span>
            </div>

            <x-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                {{ __('Select A New Photo') }}
            </x-secondary-button>

            @if ($this->user->profile_photo_path)
            <x-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                {{ __('Remove Photo') }}
            </x-secondary-button>
            @endif

            <x-input-error for="photo" class="mt-2" />
        </div>
        @endif

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="name" value="{{ __('Name') }}" />
            <x-input id="name" type="text" class="mt-1 block w-full" wire:model="state.name" required autocomplete="name" />
            <x-input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="email" value="{{ __('Email') }}" />
            <x-input id="email" type="email" class="mt-1 block w-full" wire:model="state.email" required autocomplete="username" />
            <x-input-error for="email" class="mt-2" />

            <!-- Phone Number -->
            <div class="col-span-6 sm:col-span-4">
                <x-label for="phone_num" value="{{ __('Phone Number') }}" />
                <x-input id="phone_num" type="text" class="mt-1 block w-full" wire:model="state.phone_num" required autocomplete="phone_num" />
                <x-input-error for="phone_num" class="mt-2" />

                <!-- Address -->
                <div class="col-span-6 sm:col-span-4">
                    <x-label for="address" value="{{ __('Address') }}" />
                    <x-input id="address" type="text" class="mt-1 block w-full" wire:model="state.address" required autocomplete="address" />
                    <x-input-error for="address" class="mt-2" />

                    <!-- State -->
                    <div class="col-span-6 sm:col-span-4">
                        <x-label for="state" value="{{ __('State') }}" />
                        <select id="state" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" wire:model="state.state" required autocomplete="state">
                            <option value="" disabled>Select State</option>
                            <option value="Johor">Johor</option>
                            <option value="Kedah">Kedah</option>
                            <option value="Kelantan">Kelantan</option>
                            <option value="Melaka">Melaka</option>
                            <option value="Kuala Lumpur">Kuala Lumpur</option>
                            <option value="Putrajaya">Putrajaya</option>
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
                        <x-input-error for="state" class="mt-2" />

                        <!-- City -->
                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="city" value="{{ __('City') }}" />
                            <x-input id="city" type="text" class="mt-1 block w-full" wire:model="state.city" required autocomplete="city" />
                            <x-input-error for="city" class="mt-2" />

                            <!-- Postal Code -->
                            <div class="col-span-6 sm:col-span-4">
                                <x-label for="postal_code" value="{{ __('Postal Code') }}" />
                                <x-input id="postal_code" type="text" class="mt-1 block w-full" wire:model="state.postal_code" required autocomplete="postal_code" />
                                <x-input-error for="postal_code" class="mt-2" />

                                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) && ! $this->user->hasVerifiedEmail())
                                <p class="text-sm mt-2">
                                    {{ __('Your email address is unverified.') }}

                                    <button type="button" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" wire:click.prevent="sendEmailVerification">
                                        {{ __('Click here to re-send the verification email.') }}
                                    </button>
                                </p>

                                @if ($this->verificationLinkSent)
                                <p class="mt-2 font-medium text-sm text-green-600">
                                    {{ __('A new verification link has been sent to your email address.') }}
                                </p>
                                @endif
                                @endif
                            </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <x-button wire:loading.attr="disabled" wire:target="photo" style="background: #B59410;">
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form-section>