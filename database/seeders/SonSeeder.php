<?php

namespace Database\Seeders;

use App\Models\son;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        son::create([
            'fullname'=>'Dayana Anderson Contreras',
            'dni'=>'89647534',
            'level'=>'primaria',
            'partner_id'=>1
        ]);
        son::create([
            'fullname'=>'Hamilton Aguirre Rodriguez',
            'dni'=>'98347534',
            'level'=>'secundaria',
            'partner_id'=>2
        ]);
        son::create([
            'fullname'=>'David Lopez del Carmen',
            'dni'=>'89647534',
            'level'=>'primaria',
            'partner_id'=>3
        ]);
    }
}
