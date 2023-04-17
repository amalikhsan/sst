<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'mahasiswa',
            'email' => 'mahasiswa@gmail.com',
            'email_verified_at' => now(),
            'role' => 'mahasiswa',
            'username' => 'mahasiswa',
            'password' => Hash::make('mahasiswa'),
        ]);

        User::factory()->create([
            'name' => 'tim_psikolog',
            'email' => 'tim_psikolog@gmail.com',
            'email_verified_at' => now(),
            'role' => 'tim_psikolog',
            'username' => 'tim_psikolog',
            'password' => Hash::make('tim_psikolog'),
        ]);

        User::factory()->create([
            'name' => 'verifikator',
            'email' => 'verifikator@gmail.com',
            'email_verified_at' => now(),
            'role' => 'validator',
            'username' => 'validator',
            'password' => Hash::make('verifikator'),
        ]);

        User::factory()->create([
            'name' => 'pimpinan',
            'email' => 'pimpinan@gmail.com',
            'email_verified_at' => now(),
            'role' => 'pimpinan',
            'username' => 'pimpinan',
            'password' => Hash::make('pimpinan'),
        ]);

        User::factory()->create([
            'name' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            'email_verified_at' => now(),
            'role' => 'superadmin',
            'username' => 'superadmin',
            'password' => Hash::make('superadmin'),
        ]);

        User::factory(5)->create();
    }
}
