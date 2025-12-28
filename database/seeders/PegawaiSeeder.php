<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pegawais')->insert([
            [
                'nama' => 'Budi Santoso',
                'nidn' => '0123456789',
                'jabatan' => 'Dosen Tetap',
                'email' => 'budi@kampus.ac.id',
                'nohp' => '08123456789',
                'foto' => 'foto/budi.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Siti Aminah',
                'nidn' => '9876543210',
                'jabatan' => 'Dosen Tetap',
                'email' => 'siti@kampus.ac.id',
                'nohp' => '082233445566',
                'foto' => 'foto/siti.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
