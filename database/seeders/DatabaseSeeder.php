<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


         \App\Models\Siswa::factory(10)->create();

//        Kelas::create([
//            'kelas' => "10 PPLG 1"
//        ]);
//
//        Kelas::create([
//            'kelas' => "10 PPLG 2"
//        ]);
//
//        Kelas::create([
//            'kelas' => "11 PPLG 1"
//        ]);
//
//        Kelas::create([
//            'kelas' => "11 PPLG 2"
//        ]);
//
//        Kelas::create([
//            'kelas' => "12 PPLG 1"
//        ]);
//
//        Kelas::create([
//            'kelas' => "12 PPLG 2"
//        ]);
    }
}
