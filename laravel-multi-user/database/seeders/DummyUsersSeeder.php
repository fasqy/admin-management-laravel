<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            DummyUsersSeeder::class,
        ]);

        $userData = [
            [
                'name'=>'Mas Operator',
                'email'=>'Operator@gmail.com',
                'role'=>'operator',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'Mas Keuangan',
                'email'=>'Keuangan@gmail.com',
                'role'=>'keuangan',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'Mas Marketing',
                'email'=>'Marketing@gmail.com',
                'role'=>'marketing',
                'password'=>bcrypt('123456')
            ],
        ];


        foreach($userData as $key => $val){
            User::create($val);
        }

    }
}