<?php

namespace App\Livewire\Forms;

use App\Models\Kategori;
use Livewire\Attributes\Rule;
use Livewire\Form;

class KategoriForm extends Form
{
    #[Rule(['required'])]
    public string $nama = '';

    #[Rule(['required'])]
    public string $deskripsi = '';

    public function store()
    {
        $validate = $this->validate();

        $kategori = Kategori::create($validate);

        flash('Berhasil Menambahkan Data Kategori', 'success');

        $this->reset();

        return $kategori;
    }

    public function update($id)
    {
        $validate = $this->validate();
        $kategori = Kategori::find($id);
        $kategori->update($validate);

        flash('Berhasil Mengubah Data Kategori', 'success');

        $this->reset();

        return $kategori;
    }

    public function destroy($id)
    {
        $kategori = Kategori::find($id);
        $kategori->delete();

        return $kategori;
    }
}
