<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Ari Gunawan Jatmiko',
            'email' => 'arigunawanjatmiko@gmail.com',
        ]);
        $this->call(KategoriSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(ProdukSeeder::class);
    }
}
