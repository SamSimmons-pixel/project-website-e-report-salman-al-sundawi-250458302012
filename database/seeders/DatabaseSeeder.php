<?php

namespace Database\Seeders;

use App\Models\Laporan;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User Admin
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'no_whatsapp' => '081234567890',
            'alamat' => 'jonggol, desa IDN',
            'foto' => 'admin.jpg',
            'role' => 'admin',
        ]);

        // User Warga
        $warga = User::create([
            'name' => 'Masyarakat',
            'email' => 'masyarakat@gmail.com',
            'password' => Hash::make('masyarakat'),
            'no_whatsapp' => '081234567890',
            'alamat' => 'jonggol',
            'foto' => 'warga.jpg',
            'role' => 'masyarakat',
        ]);

        // Laporan
        $laporan = Laporan::create([
            'judul' => 'Laporan',
            'detail' => 'Laporan',
            'tanggal' => now(),
            'foto' => 'laporan.jpg',
            'status' => 'pending',
            'pelapor_id' => $admin->id,
        ]);
    }
}
