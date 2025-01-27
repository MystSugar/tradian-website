<div class="mt-10 mx-[270px] h-[1260px]">
    <div class="relative flex flex-col justify-between items-center w-full h-[950px] bg-gradient-to-br from-[#F6D9D8] from-20% to-[#E9E7F1] to-60% rounded-3xl">
        <div class="absolute top-0 right-0">
            <img src="data:image/svg+xml,%3csvg%20width='276'%20height='283'%20viewBox='0%200%20276%20283'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20d='M0.449219%2073.2757L127.233%200H247.759L120.975%2073.2757H0.449219Z'%20fill='url(%23paint0_linear_6114_37209)'/%3e%3cpath%20d='M120.973%2073.3574H0V140.748H120.973V73.3574Z'%20fill='url(%23paint1_linear_6114_37209)'/%3e%3cpath%20d='M121%20214.145L276%20282.093L275.888%20214.145L121%20140.537V214.145Z'%20fill='%234F203F'/%3e%3cdefs%3e%3clinearGradient%20id='paint0_linear_6114_37209'%20x1='0.449219'%20y1='36.6395'%20x2='247.759'%20y2='36.6395'%20gradientUnits='userSpaceOnUse'%3e%3cstop%20offset='0.49'%20stop-color='%23F93838'/%3e%3cstop%20offset='1'%20stop-color='%23992322'/%3e%3c/linearGradient%3e%3clinearGradient%20id='paint1_linear_6114_37209'%20x1='36.607'%20y1='73.8081'%20x2='193.834'%20y2='328.597'%20gradientUnits='userSpaceOnUse'%3e%3cstop%20stop-color='%23FF8A8A'/%3e%3cstop%20offset='0.5'%20stop-color='%23F93838'/%3e%3c/linearGradient%3e%3c/defs%3e%3c/svg%3e" alt="">
        </div>
        <div class="relative flex flex-col justify-between items-center">
            <div class="font-lora font-semibold text-[84px] mt-[125px]">
                <h1>Get Ready for Tradian!</h1>
            </div>  
            <div class="font-inter text-xl text-[#4F203F] mt-8 mx-[280px] text-center">
                <div>Phase 1 of Tradian is coming in November. Join our training sessions to master the platform and seamlessly transition your import and export operations to Tradian.</div>
            </div>
            
            <x-primary-button class="font-inter mt-10 rounded-full text-center text-md font-medium">
                <a href="#" onclick="showToast('No register for training. Better luck next time!'); event.preventDefault();" class="p-1 py-2 tracking-normal">
                    Register for Training
                </a>
            </x-primary-button>

            <div class="font-lora font-semibold text-4xl mt-40">
                <h3>Quick Lookup</h3>
            </div>  
            <div class="font-inter font-sm text-lg text-[#4F203F] mt-6 mx-[260px] text-center mb-10">
                <div>Instantly find declaration status, tariff details and vessel/container tracking.</div>
            </div>

            <x-lookup></x-lookup>
           
        </div>
    </div>    
</div>

<div id="toastMessage" class="fixed top-5 left-1/2 transform -translate-x-1/2 bg-gradient-to-br from-[#F6D9D8] from-20% to-[#E9E7F1] border-2 border-[#3C172E] border-opacity-20 text-black font-inter font-semibold p-4 rounded-xl drop-shadow-lg transition-all duration-300 opacity-0 pointer-events-none z-50">
    <p id="toastText"></p>
</div>

<script>
    function showToast(message) {
        const toast = document.getElementById('toastMessage');
        const toastText = document.getElementById('toastText');
        
        toastText.textContent = message;
        
        toast.style.visibility = 'visible';
        toast.style.opacity = '1';  
        
        setTimeout(function() {
            toast.style.opacity = '0'; 
            setTimeout(function() {
                toast.style.visibility = 'hidden';  
            }, 300); 
        }, 3000);  
    }
</script>