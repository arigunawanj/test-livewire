<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Produk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function produk()
    {
        return $this->hasMany(Produk::class);
    }
    
    public function post()
    {
        return $this->hasMany(Post::class);
    }
}
