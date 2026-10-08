<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $student = [
            ['nis' => '1001','name' => 'Aricks','gender' => 'laki-laki','class' => '12 TKJ 1','major' => 'TKJ'],
            ['nis' => '1002','name' => 'Benedict','gender' => 'laki-laki','class' =>  '12 AKL 1','major' =>  'AKL'],
            ['nis' => '1003','name' => 'Nathan','gender' => 'laki-laki','class' =>  '12 BID 1','major' =>  'BID']
        ];

        Student::upsert($student, ['nis'], ['name', 'gender', 'class', 'major']);
    }
}
