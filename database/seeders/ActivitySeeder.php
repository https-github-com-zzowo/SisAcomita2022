<?php

namespace Database\Seeders;

use App\Models\activity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        activity::create([
            'name'=>'Aniversario de la Asociasión',
            'description'=>'La asistencia deber ser obligatoria',
            'datetime'=>'2022-07-03',
            'status'=>'Obligatorio',

        ]);

        activity::create([
            'name'=>'Limpieza del Mercado Acomita II',
            'description'=>'La asistencia deber ser obligatoria',
            'datetime'=>'2022-08-11',
            'status'=>'Obligatorio',

        ]);

        activity::create([
            'name'=>'Apoyo al paro de 24 Hrs',
            'description'=>'La asistencia deber ser obligatoria',
            'datetime'=>'2022-11-01',
            'status'=>'Normal',

        ]);

    }
}
