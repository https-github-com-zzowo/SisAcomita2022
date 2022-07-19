<?php

namespace Database\Seeders;

use App\Models\assistence;
use App\Models\Collection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Collection::create([
            'name'=>'Cuota por limieza',
            'date'=>'2022-01-05',
            'amount'=>'30',
            'type'=>'cuota',
            'activity_id'=>null,
        ]);

        Collection::create([
            'name'=>'Cuota para Aniversario',
            'date'=>'2022-03-15',
            'amount'=>'50',
            'type'=>'cuota',
            'activity_id'=>null,
        ]);

        Collection::create([
            'name'=>'Cuota Beneficiencia',
            'date'=>'2022-04-16',
            'amount'=>'10',
            'type'=>'cuota',
            'activity_id'=>null,
        ]);

        Collection::create([
            'name'=>'Multa por inasistencia de Aniversario',
            'date'=>'2022-07-15',
            'amount'=>'40',
            'type'=>'multa',
            'activity_id'=>'1',
        ]);

        Collection::create([
            'name'=>'Multa por no participar en Limpieza de la asociación',
            'date'=>'2022-08-15',
            'amount'=>'30',
            'type'=>'multa',
            'activity_id'=>'2',
        ]);

        Collection::create([
            'name'=>'Multa por inasistencia al paro',
            'date'=>'2022-11-04',
            'amount'=>'20',
            'type'=>'multa',
            'activity_id'=>'3',
        ]);
    }
}
