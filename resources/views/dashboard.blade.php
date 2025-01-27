
<x-app-layout>    
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-8">
            <div class="bg-[#3C172E] overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">
                    {{ __("You made it!") }}
                </div>
            </div>

            <div class="mt-48 flex justify-center">
                <div class="">
                    <img src="{{ asset('/images/cake.jpg') }}" class="rounded-full" style="width: 400px; height: auto;">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
