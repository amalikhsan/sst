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
            'name' => 'FENI MUTIARA RUBITA',
            'email' => 'feni.mutiara@example.com',
            'email_verified_at' => now(),
            'role' => 'mahasiswa',
            'username' => '062130700215',
            'password' => Hash::make('Polsri2003-05-08'),
        ]);

        User::factory()->create([
            'name' => 'MARSHA DIANITA',
            'email' => 'marsha.dianita@example.com',
            'email_verified_at' => now(),
            'role' => 'mahasiswa',
            'username' => '062130700216',
            'password' => Hash::make('Polsri2003-04-18'),
        ]);

        User::factory()->create([
            'name' => 'NADILA',
            'email' => 'nadila@example.com',
            'email_verified_at' => now(),
            'role' => 'mahasiswa',
            'username' => '062130700217',
            'password' => Hash::make('Polsri2003-10-24'),
        ]);

        User::factory()->create([
            'name' => 'TRIA HESTI',
            'email' => 'tria.hesti@example.com',
            'email_verified_at' => now(),
            'role' => 'mahasiswa',
            'username' => '062130700218',
            'password' => Hash::make('Polsri2003-06-10'),
        ]);

        User::factory()->create([
            'name' => 'ANGELICA REGINA IRVAN',
            'email' => 'angelica.irvan@example.com',
            'email_verified_at' => now(),
            'role' => 'mahasiswa',
            'username' => '062130701730',
            'password' => Hash::make('Polsri2004-06-16'),
        ]);

        User::factory()->create([
            'name' => 'ARDIE APRIANSYAH PERDANA',
            'email' => 'ardie.perdana@example.com',
            'email_verified_at' => now(),
            'role' => 'mahasiswa',
            'username' => '062130701731',
            'password' => Hash::make('Polsri2003-04-03'),
        ]);

        User::factory()->create([
            'name' => 'ATHILAH DHIA DETRIANA',
            'email' => 'athilah.dhia@example.com',
            'email_verified_at' => now(),
            'role' => 'mahasiswa',
            'username' => '062130701732',
            'password' => Hash::make('Polsri2004-02-12'),
        ]);

        User::factory()->create([
            'name' => 'CHAIRINA AL ISLAMI',
            'email' => 'chairina.al@example.com',
            'email_verified_at' => now(),
            'role' => 'mahasiswa',
            'username' => '002130701733',
            'password' => Hash::make('Polsri2003-09-05'),
        ]);

        User::factory()->create([
            'name' => 'DINI OKTAVIA',
            'email' => 'dini.oktavia@example.com',
            'email_verified_at' => now(),
            'role' => 'mahasiswa',
            'username' => '062130701734',
            'password' => Hash::make('Polsri2003-10-29'),
        ]);

        User::factory()->create([
            'name' => 'M. AMAL IKHSANI',
            'email' => 'amalkoding@gmail.com',
            'email_verified_at' => now(),
            'role' => 'mahasiswa',
            'username' => '062130701736',
            'password' => Hash::make('AlhamdulillahAmal'),
        ]);

        User::factory()->create([
            'name' => 'mahasiswa',
            'email' => 'mahasiswa@gmail.com',
            'email_verified_at' => now(),
            'role' => 'mahasiswa',
            'username' => 'mahasiswa',
            'password' => Hash::make('mahasiswa'),
        ]);

        User::factory()->create([
            'name' => 'timpsikolog',
            'email' => 'timpsikolog@gmail.com',
            'email_verified_at' => now(),
            'role' => 'timpsikolog',
            'username' => 'timpsikolog',
            'password' => Hash::make('timpsikolog'),
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
