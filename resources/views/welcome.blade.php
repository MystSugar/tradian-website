<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.10.2/lottie.min.js"></script>
    @vite('resources/css/app.css')

    <title>Tradian Landing Page</title>
</head>



<body class="bg-gray-100">

    <!-- NavBar -->
    <x-navbar></x-navbar>

    <!-- ReadyHeroImage + LookUp -->
    <x-ready></x-ready>

    <!-- Popular Procedures -->
    <livewire:procedures/>

    <!-- Assissssssssstance -->
    <x-assistance></x-assistance>

    <!-- FAQs -->
    <x-faqs></x-faqs>

    <!-- Footer -->
    <x-footer></x-footer>

    

</body>
</html>
