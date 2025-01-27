<div x-data="{ 
        open: $wire.entangle('open') || (sessionStorage.getItem('modalOpen') === 'true') 
    }"
    x-init="if (open) { sessionStorage.setItem('modalOpen', 'true') }"
>
    <x-primary-button @click="open = true; sessionStorage.setItem('modalOpen', 'true')">Log In</x-primary-button>

    <div x-show="open" x-transition:enter="transition-opacity ease-out duration-300" 
        class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-40"
        x-bind:class="{ 'backdrop-blur-sm': open }"
    >
        <div class="bg-white p-6 rounded-2xl w-96 relative">
            <button @click="open = false; sessionStorage.removeItem('modalOpen');" class="absolute top-1 right-3 text-3xl">&times;</button>
            
            <div class="flex items-center justify-center mb-4">
                <img src="{{ asset('favicon.ico') }}" class="w-16">
            </div>

            <form method="POST" wire:submit="login">
                @csrf
                @if ($errors->has('email'))
                    <div class="text-red-500 text-sm text-center">
                        <strong>{{ $errors->first('email') }}</strong>
                    </div>
                @endif

                <div class="mb-4">
                    <label for="email" class="block">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required class="w-full p-2 border rounded-xl" wire:model=email>
                </div>

                <div class="mb-8">
                    <label for="password" class="block">Password</label>
                    <input type="password" id="password" name="password" required class="w-full p-2 border rounded-xl" wire:model=password>
                </div>

                <div class="flex justify-center">
                    <x-primary-button 
                        type="submit">Log In
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</div>
