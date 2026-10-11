<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userTeacherEmail = 'Richard@ski.sch.id';
        $userStudentEmail = 'Aricks.001@ski.sch.id';

        User::updateOrCreate(
            ['email'=> $userTeacherEmail], 
            [
                'name' => 'Richard',
                'password' => bcrypt('password'),
                'role' => 'teacher'
            ]
        ); 

        User::updateOrCreate(
            ['email'=> $userStudentEmail], 
            [
                'name' => 'Aricks',
                'password' => bcrypt('password'),
                'role' => 'student'
            ]
        );
    }
}