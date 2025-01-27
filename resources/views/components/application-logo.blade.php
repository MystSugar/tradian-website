<div id="lottie-logo" class="w-[150px] cursor-pointer"></div>

<script>
    var animation = lottie.loadAnimation({
        container: document.getElementById('lottie-logo'),  
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: "{{ asset('/lotties/tradian-logo.json') }}"
    });
</script>
