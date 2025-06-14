<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full items-center px-4 py-3 bg-blue-500 border border-transparent rounded-3xl font-semibold text-xs text-white uppercase tracking-widest']) }}>
    {{ $slot }}
</button>
