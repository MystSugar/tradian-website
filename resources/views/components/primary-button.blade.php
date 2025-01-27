<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-6 py-2 bg-[#C12126] drop-shadow-sm rounded-3xl font-medium tracking-normal text-md text-white font-inter hover:bg-[#B11D23] hover:drop-shadow-md hover:scale-105 active:bg-[#A01A1F] active:drop-shadow-lg focus:outline-none transition ease-in-out duration-300']) }}>
    {{ $slot }}
</button>
