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

    <div class="mx-[345px] mt-20">
        <h1 class="font-lora text-3xl font-semibold text-center">{{ $article->heading }}</h1>
        @if ($article->image)
            <img src="{{ $article->image }}" alt="{{ $article->heading }}" class="mt-8 mb-4 rounded-2xl w-full h-[400px] object-cover">
        @endif
        <p class="text-sm text-gray-500 mb-10">Post date: {{ $article->postDate() }}</p>
        <div class="prose mt-4 mb-20">
            {!! nl2br(e($article->body)) !!}
        </div>
    </div> 

    <!-- Footer -->
    <x-footer></x-footer>

</body>
</html>
