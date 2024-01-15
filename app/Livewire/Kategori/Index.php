<?php

namespace App\Livewire\Kategori;

use App\Livewire\Forms\KategoriForm;
use App\Models\Kategori;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public KategoriForm $form;

    public function save()
    {
        $this->form->store();
    }

    public function edit($id)
    {
        $this->form->update($id);
    }

    public function delete($id)
    {
        $this->form->destroy($id);
    }

    public function render()
    {
        $kategori = Kategori::query()->latest()->paginate(10);

        return view('livewire.kategori.index', compact('kategori'));
    }
}
