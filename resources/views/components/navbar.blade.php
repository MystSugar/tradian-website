<div class="sticky p-3 top-0 z-50 bg-gray-100" id="navbar">
    <nav class="font-arial mx-[335px]">
            <div class="flex justify-between items-center h-10">
                <a href="{{ url('/') }}">
                    <div class="h-12">
                        <x-application-logo></x-application-logo>
                    </div>
                </a>

                <div class="fixed top-4 left-1/2 transform -translate-x-1/2 flex space-x-12 font-semibold text-md text-black font-inter">
                    <div>
                        <a href="#" onclick="showToast('Looks like it is quiet today - no business happening here!'); event.preventDefault();"  class="flex items-center space-x-2 px-2 py-1 hover:scale-105 hover:bg-gray-200 hover:rounded-3xl transition-all duration-300">
                            <span>Business</span>
                            <img src="data:image/svg+xml,%3csvg%20width='21'%20height='20'%20viewBox='0%200%2021%2020'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20d='M17.5837%208.16354L11.3337%2014.4135C11.2466%2014.5009%2011.1431%2014.5703%2011.0291%2014.6176C10.9152%2014.6649%2010.793%2014.6893%2010.6696%2014.6893C10.5462%2014.6893%2010.424%2014.6649%2010.3101%2014.6176C10.1961%2014.5703%2010.0926%2014.5009%2010.0055%2014.4135L3.75553%208.16354C3.57941%207.98742%203.48047%207.74855%203.48047%207.49948C3.48047%207.25041%203.57941%207.01154%203.75553%206.83542C3.93165%206.65929%204.17052%206.56035%204.4196%206.56035C4.66867%206.56035%204.90754%206.65929%205.08366%206.83542L10.6704%2012.4221L16.2571%206.83463C16.4332%206.65851%2016.6721%206.55957%2016.9212%206.55957C17.1702%206.55957%2017.4091%206.65851%2017.5852%206.83463C17.7613%207.01075%2017.8603%207.24963%2017.8603%207.4987C17.8603%207.74777%2017.7613%207.98664%2017.5852%208.16276L17.5837%208.16354Z'%20fill='%23C21313'/%3e%3c/svg%3e" alt="">
                        </a>
                    </div>

                    <div>                    
                        <a href="#" onclick="showToast('No individual menu here. Pick a dish and roll with it!'); event.preventDefault();" class="flex items-center space-x-2 px-2 py-1 hover:scale-105 hover:bg-gray-200 hover:rounded-3xl transition-all duration-300">
                            <span>Individual</span>
                            <img src="data:image/svg+xml,%3csvg%20width='21'%20height='20'%20viewBox='0%200%2021%2020'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20d='M17.5837%208.16354L11.3337%2014.4135C11.2466%2014.5009%2011.1431%2014.5703%2011.0291%2014.6176C10.9152%2014.6649%2010.793%2014.6893%2010.6696%2014.6893C10.5462%2014.6893%2010.424%2014.6649%2010.3101%2014.6176C10.1961%2014.5703%2010.0926%2014.5009%2010.0055%2014.4135L3.75553%208.16354C3.57941%207.98742%203.48047%207.74855%203.48047%207.49948C3.48047%207.25041%203.57941%207.01154%203.75553%206.83542C3.93165%206.65929%204.17052%206.56035%204.4196%206.56035C4.66867%206.56035%204.90754%206.65929%205.08366%206.83542L10.6704%2012.4221L16.2571%206.83463C16.4332%206.65851%2016.6721%206.55957%2016.9212%206.55957C17.1702%206.55957%2017.4091%206.65851%2017.5852%206.83463C17.7613%207.01075%2017.8603%207.24963%2017.8603%207.4987C17.8603%207.74777%2017.7613%207.98664%2017.5852%208.16276L17.5837%208.16354Z'%20fill='%23C21313'/%3e%3c/svg%3e" alt="">
                        </a>
                    </div>

                    <div>
                        <a href="{{ route('support') }}" class="flex items-center px-2 py-1 hover:scale-105 hover:bg-gray-200 hover:rounded-3xl transition-all duration-300">
                            <span>Support</span>
                        </a>
                    </div>
                </div>

                <livewire:login-modal />     
                                       
            </div>
        </div>
    </div>
</div>

<div id="toastMessage" class="fixed top-5 left-1/2 transform -translate-x-1/2 bg-gradient-to-br from-[#F6D9D8] from-20% to-[#E9E7F1] border-2 border-[#3C172E] border-opacity-20 text-black font-inter font-semibold p-4 rounded-xl drop-shadow-lg transition-all duration-300 opacity-0 pointer-events-none z-50">
    <p id="toastText"></p>
</div>

<script>
  const navbar = document.getElementById('navbar');

  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      navbar.classList.add('drop-shadow-md');  
    } else {
      navbar.classList.remove('drop-shadow-md');  
    }
  });

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