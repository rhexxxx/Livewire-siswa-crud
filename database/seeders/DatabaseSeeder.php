<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Jurusan;
use App\Models\Siswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $siswas = [
            [
                'nama' => 'sugianto',
                'nis' => '20023',
                'jurusan' => 'RPL',
                'kelas' => 'XI RPL 1',
                'gender' => 'laki-laki',
                'status' => 'true'
            ],
            [
                'nama' => 'bagas',
                'nis' => '20026',
                'kelas' => 'XI DPIB 1',
                'jurusan' => 'DPIB',
                'gender' => 'laki laki',
                'status' => 'true'
            ],
            [
                'nama' => 'supri',
                'nis' => '20001',
                'jurusan' => 'RPL',
                'kelas' => 'XII RPL 1',
                'gender' => 'perempuan',
                'status' => 'false'
            ]
        ];

        foreach ($siswas as $siswa) {
            Siswa::create($siswa);
        }

        $users = [
            [
                'name' => 'Rheino perean',
                'email' => 'rheinoperean@gmail.com',
                'password' => 'ayamgoreng123'
            ]
        ];

        User::create($users);

        // $jurusans = [
        //     ['nama' => 'Rekayasa Perangkat Lunak'], 
        //     ['nama' => 'Teknik Komputer dan Jaringan'], 
        //     ['nama' => 'Mutimedia'], 
        //     ['nama' => 'Desain Komunikasi Visual']
        // ];

        // Jurusan::create($jurusans);
    }
}
