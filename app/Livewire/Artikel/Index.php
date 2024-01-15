<?php

namespace App\Livewire\Artikel;

use App\Models\Produk;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        $artikel = Produk::query()->latest()->paginate(10);

        return view('livewire.artikel.index', compact('artikel'));
    }
}
