<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seeder user (boleh dipakai / boleh dihapus)
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // 👉 PANGGIL SEEDER PEGAWAI
        $this->call([
            PegawaiSeeder::class,
        ]);
    }
}
