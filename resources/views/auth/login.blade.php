<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <input type="hidden" name="redirect" value="{{ request('redirect') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Е-пошта')" />
            <x-text-input id="email" class="block mt-1 w-full  text-brown" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Лозинка')" />

            <x-text-input id="password" class="block mt-1 w-full  text-brown"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:black-bg border-brown dark:border-brown text-brown shadow-sm focus:text-brown dark:focus:text-browndark:focus:text-brown" name="remember">
                <span class="ms-2 text-sm ">{{ __('Запамти ме') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm  text-brown dark:hover:text-brown rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:text-brown dark:focus:text-brown" href="{{ route('password.request') }}">
                    {{ __('Заборавили сте лозинку?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Пријава') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
