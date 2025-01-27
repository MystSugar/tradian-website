<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;

class SearchAndArticles extends Component
{
    public $search = '';

    public function render()
    {
        $articles = Article::query()
            ->when($this->search, function ($query) {
                $query->where('heading', 'like', '%' . $this->search . '%')
                      ->orWhere('description', 'like', '%' . $this->search . '%');
            })
            ->orderBy('created_at', 'desc') 
            ->get(); 


        return view('livewire.search-and-articles', [
            'articles' => $articles
        ]);
    }
}
