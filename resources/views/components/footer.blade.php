<footer class="relative mt-24 w-full"> 
    <div class="relative z-10 mx-[345px] flex items-center justify-center">
        <div class="bg-gradient-to-br from-[#F6D9D8] from-20% to-[#E9E7F1] to-60% h-[100px] rounded-3xl z-10 drop-shadow-md 
        flex items-center justify-center px-6 w-full">
            <div class="flex">
                <div class="flex flex-col justify-center mr-20">
                    <div class="font-inter text-xl font-semibold text-black">Subscribe to our newsletter</div>
                    <div class="font-inter text-md text-black opacity-80 -mt-2">Receive the Latest Updates, News, and Insights from Tradian</div>
                </div>

                <div class="flex items-center">
                    <div class="items-center">
                        <input type="text" placeholder="Enter your email" value="" class="w-96 rounded-s-xl">
                    </div>

                    <x-primary-button class="!rounded-none !rounded-e-xl !py-2.5" onclick="showToast('Subscribe button’s down. Try again later!'); event.preventDefault();">
                        <div class="flex items-center space-x-2">
                            <div class="">Subscribe now</div>
                            <div class="arrow">
                                <img src="data:image/svg+xml,%3csvg%20width='20'%20height='20'%20viewBox='0%200%2020%2020'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20d='M17.3172%2010.4425L11.6922%2016.0675C11.5749%2016.1848%2011.4159%2016.2507%2011.25%2016.2507C11.0841%2016.2507%2010.9251%2016.1848%2010.8078%2016.0675C10.6905%2015.9503%2010.6247%2015.7912%2010.6247%2015.6253C10.6247%2015.4595%2010.6905%2015.3004%2010.8078%2015.1832L15.3664%2010.6253H3.125C2.95924%2010.6253%202.80027%2010.5595%202.68306%2010.4423C2.56585%2010.3251%202.5%2010.1661%202.5%2010.0003C2.5%209.83459%202.56585%209.67562%202.68306%209.55841C2.80027%209.4412%202.95924%209.37535%203.125%209.37535H15.3664L10.8078%204.81753C10.6905%204.70026%2010.6247%204.5412%2010.6247%204.37535C10.6247%204.2095%2010.6905%204.05044%2010.8078%203.93316C10.9251%203.81588%2011.0841%203.75%2011.25%203.75C11.4159%203.75%2011.5749%203.81588%2011.6922%203.93316L17.3172%209.55816C17.3753%209.61621%2017.4214%209.68514%2017.4529%209.76101C17.4843%209.83688%2017.5005%209.91821%2017.5005%2010.0003C17.5005%2010.0825%2017.4843%2010.1638%2017.4529%2010.2397C17.4214%2010.3156%2017.3753%2010.3845%2017.3172%2010.4425Z'%20fill='%23FFFFFF'/%3e%3c/svg%3e" alt="" data-v-3a582ccb="">
                            </div>
                        </div>
                    </x-primary-button>
                    
                </div>
            </div>
        </div>
    </div>

    
    <div class="absolute top-[50%] left-0 right-0 z-0 bg-[#3C172E] h-[400px]">
        <div class="mt-24 mx-[345px]">
            <div class="flex flex-col">
                <div class="flex space-x-36">
                    <div class="space-y-2">
                        <h3 class="font-inter text-sm font-semibold text-red-200">Quick Links</h3>
                        <ul class="space-y-1" onclick="showToast('These links; they do not work. ;-;'); event.preventDefault();">
                            <li><a href="#" class="font-inter text-sm text-white">oneGov</a></li>
                            <li><a href="#" class="font-inter text-sm text-white">Tradenet</a></li>
                        </ul>
                    </div>

                    <div class="space-y-2">
                        <h3 class="font-inter text-sm font-semibold text-red-200">Logistics</h3>
                        <ul class="space-y-1" onclick="showToast('These links; they do not work. ;-;'); event.preventDefault();">
                            <li><a href="#" class="font-inter text-sm text-white">Vessels</a></li>
                            <li><a href="#" class="font-inter text-sm text-white">Shipping Agents</a></li>
                            <li><a href="#" class="font-inter text-sm text-white">Freight Forwarders</a></li>
                            <li><a href="#" class="font-inter text-sm text-white">Courier Agents</a></li>
                            <li><a href="#" class="font-inter text-sm text-white">Brokers</a></li>
                        </ul>
                    </div>

                    <div class="space-y-2">
                        <h3 class="font-inter text-sm font-semibold text-red-200">Terms and Policies</h3>
                        <ul class="space-y-1" onclick="showToast('These links; they do not work. ;-;'); event.preventDefault();">
                            <li><a href="#" class="font-inter text-sm text-white">Terms and Conditions</a></li>
                        </ul>
                    </div>                
                </div>

                <div class="relative flex w-full pb-5 border-b-2 border-red-300 border-opacity-20">
                    <div class="h-12 mt-5 mr-20">
                        <a href="{{ url('/') }}">
                            <div class="h-12">
                                <x-light-logo></x-light-logo>
                            </div>
                        </a>                        
                    </div>

                    <div class="flex absolute top-1/2 transform -translate-y-1/2 right-0 space-x-4">
                        <div class="cursor-pointer" onclick="showToast('No scrolling today! Time to touch grass.'); event.preventDefault();"> 
                            <img src="data:image/svg+xml,%3csvg%20width='32'%20height='32'%20viewBox='0%200%2032%2032'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3crect%20x='0.5'%20y='0.5'%20width='31'%20height='31'%20rx='15.5'%20fill='%233C162E'/%3e%3crect%20x='0.5'%20y='0.5'%20width='31'%20height='31'%20rx='15.5'%20stroke='%23573550'/%3e%3cpath%20d='M19.275%2016.8757L19.6741%2014.34H17.2157V12.6918C17.2157%2011.9984%2017.5589%2011.3209%2018.6564%2011.3209H19.7899V9.16158C19.1298%209.05632%2018.4628%208.99938%2017.7944%208.99121C15.771%208.99121%2014.45%2010.2076%2014.45%2012.4065V14.34H12.207V16.8757H14.45V23.009H17.2157V16.8757H19.275Z'%20fill='%23FFC7C7'/%3e%3c/svg%3e" alt="" data-v-3a582ccb="">
                        </div>
                        <div class="cursor-pointer" onclick="showToast('No scrolling today! Time to touch grass.'); event.preventDefault();">
                            <img src="data:image/svg+xml,%3csvg%20width='33'%20height='32'%20viewBox='0%200%2033%2032'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3crect%20x='1.25'%20y='0.5'%20width='31'%20height='31'%20rx='15.5'%20fill='%233C162E'/%3e%3crect%20x='1.25'%20y='0.5'%20width='31'%20height='31'%20rx='15.5'%20stroke='%23573550'/%3e%3cpath%20d='M14.4138%2016.0001C14.4138%2014.7098%2015.4592%2013.6636%2016.7491%2013.6636C18.0389%2013.6636%2019.0849%2014.7098%2019.0849%2016.0001C19.0849%2017.2904%2018.0389%2018.3366%2016.7491%2018.3366C15.4592%2018.3366%2014.4138%2017.2904%2014.4138%2016.0001ZM13.1511%2016.0001C13.1511%2017.9878%2014.7619%2019.5991%2016.7491%2019.5991C18.7362%2019.5991%2020.347%2017.9878%2020.347%2016.0001C20.347%2014.0124%2018.7362%2012.4011%2016.7491%2012.4011C14.7619%2012.4011%2013.1511%2014.0124%2013.1511%2016.0001ZM19.6486%2012.2584C19.6485%2012.4248%2019.6978%2012.5874%2019.7901%2012.7257C19.8825%2012.8641%2020.0137%2012.972%2020.1673%2013.0357C20.321%2013.0994%2020.49%2013.1161%2020.6531%2013.0837C20.8163%2013.0513%2020.9661%2012.9713%2021.0837%2012.8537C21.2014%2012.7361%2021.2815%2012.5863%2021.314%2012.4232C21.3465%2012.26%2021.33%2012.0909%2021.2664%2011.9372C21.2028%2011.7835%2021.0951%2011.6521%2020.9568%2011.5596C20.8186%2011.4671%2020.6561%2011.4178%2020.4898%2011.4177H20.4894C20.2665%2011.4178%2020.0528%2011.5064%2019.8951%2011.664C19.7375%2011.8217%2019.6488%2012.0354%2019.6486%2012.2584ZM13.9183%2021.7052C13.2351%2021.674%2012.8638%2021.5602%2012.6171%2021.4641C12.2899%2021.3367%2012.0565%2021.1849%2011.8111%2020.9398C11.5657%2020.6947%2011.4138%2020.4614%2011.287%2020.1342C11.1908%2019.8875%2011.077%2019.5159%2011.046%2018.8326C11.012%2018.0938%2011.0052%2017.8719%2011.0052%2016.0002C11.0052%2014.1284%2011.0126%2013.9071%2011.046%2013.1677C11.0771%2012.4844%2011.1917%2012.1136%2011.287%2011.8661C11.4144%2011.5389%2011.566%2011.3054%2011.8111%2011.06C12.0562%2010.8145%2012.2894%2010.6625%2012.6171%2010.5357C12.8637%2010.4395%2013.2351%2010.3256%2013.9183%2010.2946C14.6569%2010.2606%2014.8787%2010.2538%2016.7491%2010.2538C18.6194%2010.2538%2018.8415%2010.2612%2019.5807%2010.2946C20.2638%2010.3257%2020.6345%2010.4404%2020.8819%2010.5357C21.209%2010.6625%2021.4424%2010.8148%2021.6878%2011.06C21.9332%2011.3051%2022.0846%2011.5389%2022.2119%2011.8661C22.3081%2012.1129%2022.4219%2012.4844%2022.453%2013.1677C22.4869%2013.9071%2022.4937%2014.1284%2022.4937%2016.0002C22.4937%2017.8719%2022.4869%2018.0932%2022.453%2018.8326C22.4219%2019.5159%2022.3075%2019.8873%2022.2119%2020.1342C22.0846%2020.4614%2021.9329%2020.6949%2021.6878%2020.9398C21.4428%2021.1847%2021.209%2021.3367%2020.8819%2021.4641C20.6352%2021.5603%2020.2638%2021.6741%2019.5807%2021.7052C18.8421%2021.7391%2018.6202%2021.7459%2016.7491%2021.7459C14.8779%2021.7459%2014.6566%2021.7391%2013.9183%2021.7052ZM13.8603%209.03366C13.1143%209.06764%2012.6046%209.18595%2012.1595%209.35921C11.6985%209.53813%2011.3082%209.77817%2010.9183%2010.1676C10.5283%2010.5571%2010.2889%2010.9481%2010.1101%2011.4092C9.93687%2011.8548%209.81859%2012.3643%209.78462%2013.1105C9.75009%2013.8578%209.74219%2014.0967%209.74219%2016.0001C9.74219%2017.9035%209.75009%2018.1424%209.78462%2018.8897C9.81859%2019.6359%209.93687%2020.1454%2010.1101%2020.591C10.2889%2021.0518%2010.5284%2021.4433%2010.9183%2021.8326C11.3082%2022.2219%2011.6985%2022.4616%2012.1595%2022.641C12.6055%2022.8143%2013.1143%2022.9326%2013.8603%2022.9665C14.6078%2023.0005%2014.8462%2023.009%2016.7491%2023.009C18.6519%2023.009%2018.8907%2023.0011%2019.6378%2022.9665C20.3838%2022.9326%2020.8932%2022.8143%2021.3386%2022.641C21.7993%2022.4616%2022.1899%2022.222%2022.5798%2021.8326C22.9698%2021.4431%2023.2087%2021.0518%2023.388%2020.591C23.5612%2020.1454%2023.6801%2019.6359%2023.7135%2018.8897C23.7474%2018.1418%2023.7554%2017.9035%2023.7554%2016.0001C23.7554%2014.0967%2023.7474%2013.8578%2023.7135%2013.1105C23.6795%2012.3643%2023.5612%2011.8545%2023.388%2011.4092C23.2087%2010.9484%2022.9692%2010.5577%2022.5798%2010.1676C22.1905%209.77755%2021.7993%209.53813%2021.3392%209.35921C20.8932%209.18595%2020.3838%209.06708%2019.6384%209.03366C18.8913%208.99968%2018.6525%208.99121%2016.7496%208.99121C14.8468%208.99121%2014.6078%208.99912%2013.8603%209.03366Z'%20fill='%23FFC7C7'/%3e%3c/svg%3e" alt="" data-v-3a582ccb="">
                        </div>
                        <div class="cursor-pointer" onclick="showToast('No scrolling today! Time to touch grass.'); event.preventDefault();">
                            <img src="data:image/svg+xml,%3c?xml%20version='1.0'%20encoding='UTF-8'%20standalone='no'?%3e%3csvg%20width='33'%20height='32'%20viewBox='0%200%2033%2032'%20fill='none'%20version='1.1'%20id='svg2'%20sodipodi:docname='twitterGray.svg'%20xml:space='preserve'%20inkscape:version='1.3.2%20(091e20ef0f,%202023-11-25,%20custom)'%20xmlns:inkscape='http://www.inkscape.org/namespaces/inkscape'%20xmlns:sodipodi='http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd'%20xmlns='http://www.w3.org/2000/svg'%20xmlns:svg='http://www.w3.org/2000/svg'%3e%3cdefs%20id='defs2'%20/%3e%3csodipodi:namedview%20id='namedview2'%20pagecolor='%23ffffff'%20bordercolor='%23999999'%20borderopacity='1'%20inkscape:showpageshadow='0'%20inkscape:pageopacity='0'%20inkscape:pagecheckerboard='0'%20inkscape:deskcolor='%23d1d1d1'%20inkscape:zoom='13.854101'%20inkscape:cx='14.039165'%20inkscape:cy='20.246713'%20inkscape:window-width='2504'%20inkscape:window-height='1332'%20inkscape:window-x='25'%20inkscape:window-y='51'%20inkscape:window-maximized='1'%20inkscape:current-layer='svg2'%20/%3e%3crect%20x='1'%20y='0.5'%20width='31'%20height='31'%20rx='15.5'%20fill='%233C162E'%20id='rect1'%20/%3e%3crect%20x='1'%20y='0.5'%20width='31'%20height='31'%20rx='15.5'%20stroke='%23573550'%20id='rect2'%20/%3e%3cg%20style='fill:%23ffc7c7;fill-opacity:1'%20id='g2'%20transform='matrix(0.07326238,0,0,0.07326238,7.124869,6.6179836)'%3e%3cpath%20d='m%20214.75,211.71%20-62.6,-98.38%2061.77,-67.95%20A%208,8%200%200%200%20202.08,34.62%20L%20143.24,99.34%20102.75,35.71%20A%208,8%200%200%200%2096,32%20H%2048%20a%208,8%200%200%200%20-6.75,12.3%20l%2062.6,98.37%20-61.77,68%20a%208,8%200%201%200%2011.84,10.76%20l%2058.84,-64.72%2040.49,63.63%20A%208,8%200%200%200%20160,224%20h%2048%20a%208,8%200%200%200%206.75,-12.29%20z%20M%20164.39,208%2062.57,48%20h%2029%20l%20101.86,160%20z'%20id='path1'%20style='fill:%23ffc7c7;fill-opacity:1'%20/%3e%3c/g%3e%3c/svg%3e" alt="" data-v-3a582ccb="">
                        </div>                                      
                    </div>
                </div>

                <div class="flex justify-between mt-5">
                    <p class="text-xs font-semibold text-white">Made with ❤️ by MystSugar for the Tradenet Coding Exam.</p>
                    <p class="text-xs font-semibold text-white">© 2024, Government of Maldives. All Rights Reserved.</p>
                </div>
            </div>           
        </div>
    </div> 
</footer>

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





       