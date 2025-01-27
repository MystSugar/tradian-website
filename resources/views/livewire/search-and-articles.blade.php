<div>
    <div class="flex flex-col justify-center items-center mx-[345px] mt-24">
        <h1 class="font-lora text-5xl font-semibold">Welcome to Tradian Support Center!</h1>        
        <input type="text" wire:model.live="search" placeholder="Search articles..." class="mt-20 w-[800px] rounded-xl">
    </div>

    @if($search)
        <p class="text-sm text-gray-500 text-center mt-2">Showing results for: "{{ $search }}"</p>
    @endif

    <div class="mt-20 grid grid-cols-3 gap-10 mx-[345px] drop-shadow-lg mb-24">
        @forelse($articles as $article)
            <div class="border-b bg-white rounded-2xl">
                <a href="{{ route('articles.show', $article->id) }}">
                    <img src="{{ $article->image }}" class="w-full h-52 object-cover mb-4 rounded-t-lg">

                    <div class="mx-5">
                        <h3 class="font-inter text-lg font-semibold">{{ Str::limit($article->heading, 30) }}</h3>
                        <p class="font-inter text-gray-700">{{ Str::limit($article->description, 50) }}</p>

                        <div class="flex justify-between my-2"> 
                            <p class="font-inter text-sm text-gray-500">{{ $article->postDate() }}</p> 
                            <a href="{{ route('articles.show', $article->id) }}" class="font-inter text-[#6F42C1]">Read more...</a>
                        </div>
                    </div>
                </a>
            </div>
        @empty
            <p>No articles found.</p> 
        @endforelse
    </div>
</div>

