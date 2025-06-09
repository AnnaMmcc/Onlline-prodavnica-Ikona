<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <input type="hidden" name="redirect" value="{{ request('redirect') }}">

        <div>
            <x-input-label for="name" :value="__('Име')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>


        <div class="mt-4">
            <x-input-label for="email"  :value="__('Е-пошта')" />
            <x-text-input id="email" class="form-control bg-white text-dark block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Лозинка')" />

            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Потврдите лозинку')" />

            <x-text-input  id="password_confirmation" class="block mt-1 w-full"
                           type="password"
                           name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

            @if(request()->has('redirect'))
                <input type="hidden" name="redirect" value="{{ request('redirect') }}">
            @endif

            <div class="flex items-center justify-end mt-4">
                <a href="{{ route('login', ['redirect' => request('redirect')]) }}">
                    Већ сте регистровани?
                </a>

                <x-primary-button class="ms-4">
                    {{ __('Региструј се') }}
                </x-primary-button>
            </div>
    </form>
</x-guest-layout>

