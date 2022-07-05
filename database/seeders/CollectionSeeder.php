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
            'date'=>'2022-08-12',
            'amount'=>'30',
            'type'=>'cuota',
            'assistence_id'=>'1'
        ]);
    }
}
