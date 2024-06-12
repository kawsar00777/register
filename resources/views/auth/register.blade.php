<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>


         <!-- Phone Number with Country Code -->
    <div class="mt-4">
        <x-input-label for="phone" name="phone" :value="__('Phone Number')" />
        <div class="flex items-center">
            <select id="country_code" class="block w-1/4 rounded-l-md border-t sm:text-sm border-gray-300 focus:ring-indigo-500 focus:border-indigo-500" name="country_code">
                <!-- Country code options -->
                <option value="BD">Bangladesh (+880)</option>
                <option value="US">United States (+1)</option>
                <option value="GB">United Kingdom (+44)</option>
                <!-- Add more options for other countries -->
            </select>
            <x-text-input id="phone" class="block w-3/4 rounded-r-md border-t sm:text-sm border-gray-300 focus:ring-indigo-500 focus:border-indigo-500" type="text" name="phone" :value="old('phone')" required autocomplete="tel-national" />
        </div>
        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
    </div>


            <!-- WhatsApp Number -->
    <div class="mt-4">
        <x-input-label for="whatsapp" :value="__('WhatsApp Number')" />
        <div class="flex items-center">
            <select id="whatsapp_country_code" class="block w-1/4 rounded-l-md border-t sm:text-sm border-gray-300 focus:ring-indigo-500 focus:border-indigo-500" name="whatsapp_country_code">
                <!-- Country code options -->
                <option value="BD">Bangladesh (+880)</option>
                <option value="US">United States (+1)</option>
                <option value="GB">United Kingdom (+44)</option>
                <!-- Add more options for other countries -->
            </select>
            <x-text-input id="whatsapp" class="block w-3/4 rounded-r-md border-t sm:text-sm border-gray-300 focus:ring-indigo-500 focus:border-indigo-500" type="text" name="whatsapp" :value="old('whatsapp')" required autocomplete="tel-national" />
        </div>
        <x-input-error :messages="$errors->get('whatsapp')" class="mt-2" />
    </div>

    <!-- Address -->
    <div class="mt-4">
        <x-input-label for="address" :value="__('address')" />
        <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autocomplete="address" />
        <x-input-error :messages="$errors->get('address')" class="mt-2" />
    </div>





        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
