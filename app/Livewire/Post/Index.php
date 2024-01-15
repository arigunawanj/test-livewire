<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        $post = Post::query()->latest()->paginate(10);

        return view('livewire.post.index', compact('post'));
    }
}
