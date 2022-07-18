<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'qwerty',
            'email'=>'qwe@qwe',
            'password'=>bcrypt('12345678')
        ]);
        User::create([
            'name'=>'andre',
            'email'=>'andre@gmail.com',
            'password'=>bcrypt('12345678')
        ]);
        User::create([
            'name'=>'Lino Alex Huamanvilca',
            'email'=>'lino@gmail.com',
            'password'=>bcrypt('12345678')
        ]);
        User::create([
            'name'=>'kevin arturo',
            'email'=>'arturo@gmail.com',
            'password'=>bcrypt('12345678')
        ]);


        User::factory(5)->create();
    }
}
