<?php

use App\Livewire\Beranda;
use App\Livewire\Artikel\Index as ArtikelIndex;
use Illuminate\Support\Facades\Route;
use App\Livewire\Post\Index as PostIndex;
use App\Livewire\Kategori\Index as KategoriIndex;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Beranda::class)->name('home');
Route::get('/post', PostIndex::class)->name('post.index');
Route::get('/kategori', KategoriIndex::class)->name('kategori.index');
Route::get('/artikel', ArtikelIndex::class)->name('artikel.index');
