<?php

namespace Database\Seeders;

use App\Models\Family;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Family::create([
            'parentesco'=>'ESPOSA',
            'fullname'=>'Dayana Anderson Contreras',
            'celphone'=>'953428107',
            'dni'=>'89647534',
            'age'=>'15',
            'partner_id'=>1
        ]);
        Family::create([
            'parentesco'=>'Hijo',
            'fullname'=>'Hamilton Aguirre Rodriguez',
            'celphone'=>'953428107',
            'dni'=>'89647534',
            'age'=>'15',
            'partner_id'=>2
        ]);
        Family::create([
            'parentesco'=>'Hijo',
            'fullname'=>'David Lopez del Carmen',
            'celphone'=>'953428107',
            'dni'=>'89647534',
            'age'=>'15',
            'partner_id'=>3
        ]);
    }
}
