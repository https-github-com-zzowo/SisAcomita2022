<?php

namespace Database\Seeders;

use App\Models\stand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        stand::create([
            'name'=>'A1',
            'status'=>'Alquilado',

        ]);
        stand::create([
            'name'=>'A2',
            'status'=>'Alquilado',

        ]);
        stand::create([
            'name'=>'A3',
            'status'=>'Alquilado',


        ]);
        stand::create([
            'name'=>'A4',
            'status'=>'Alquilado',

        ]);

    }
}
