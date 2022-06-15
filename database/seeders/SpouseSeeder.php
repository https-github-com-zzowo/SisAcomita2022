<?php

namespace Database\Seeders;

use App\Models\spouse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        spouse::create([
            'fullname'=>'Ethan Anderson',
            'dni'=>'75784734',
            'phone'=>'995056734',
            'email'=>'ethan@email',
            'partner_id'=>1
        ]);
        spouse::create([
            'fullname'=>'Yamileth Rodriguez Mayta',
            'dni'=>'75846583',
            'phone'=>'948597362',
            'email'=>'yamileth@email',
            'partner_id'=>2
        ]);
        spouse::create([
            'fullname'=>'Milagros del Carmen',
            'dni'=>'09528543',
            'phone'=>'983756376',
            'email'=>'milagros@email',
            'partner_id'=>3
        ]);
    }
}
