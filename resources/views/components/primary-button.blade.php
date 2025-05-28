<button {{ $attributes->merge(['type' => 'submit', 'class' => 'hover inline-flex items-center px-4 py-2 gold-bg dark:gold-bg border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:gold-bg dark:hover:gold-bg  focus:bg-white active:light-bg dark:active:gold-bg focus:outline-none focus:ring-2  dark:focus:ring-offset-white transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
