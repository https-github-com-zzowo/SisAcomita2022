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
            'name'=>'Cristhian Efrain',
            'email'=>'qwe@qwe',
            'profile'=>'https://i.pinimg.com/564x/91/9a/67/919a6724c8d20b671cdaaa6fd2966b8b.jpg',
            'password'=>bcrypt('12345678')
        ]);
        User::create([
            'name'=>'Andre Luque Alfaro',
            'email'=>'andre@gmail.com',
            'profile'=>'https://i.pinimg.com/564x/94/e5/32/94e5325468d2859b075bfabb4dc83c4e.jpg',
            'password'=>bcrypt('12345678')
        ]);
        User::create([
            'name'=>'Lino Alex Huamanvilca',
            'email'=>'lino@gmail.com',
            'profile'=>'https://i.pinimg.com/564x/dd/05/a3/dd05a3032b7eaa30edb49d64f9cd4a5b.jpg',
            'password'=>bcrypt('12345678')
        ]);
        User::create([
            'name'=>'kevin arturo',
            'email'=>'arturo@gmail.com',
            'profile'=>'https://i.pinimg.com/originals/4c/65/12/4c6512de435d34bc11a5f82f6dfa7579.jpg',
            'password'=>bcrypt('12345678')
        ]);


        User::factory(5)->create();
    }
}
