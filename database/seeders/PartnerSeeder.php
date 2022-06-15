<?php

namespace Database\Seeders;

use App\Models\partner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        partner::create([
            'name'=>'Magaly Elena',
            'lastname'=>'Contreras',
            'dni'=>'7645783',
            'phone'=>'925709908',
            'birthdate'=>'2000-06-05',
            'email'=>'elena@email',
            'address'=>'Jr. Ramon Castillo Nro. 456',
        ]);
        partner::create([
            'name'=>'Jhonatan Daniel',
            'lastname'=>'Aguirre Medina',
            'dni'=>'8956345',
            'phone'=>'998765467',
            'birthdate'=>'2000-01-03',
            'email'=>'jhonatan@email',
            'address'=>'Jr. 6 de Agosto Nro. 566',
        ]);
        partner::create([
            'name'=>'Ismael Antonio',
            'lastname'=>'Lopez Aliaga',
            'dni'=>'0984564',
            'phone'=>'934568741',
            'birthdate'=>'1987-01-03',
            'email'=>'ismael@email',
            'address'=>'Jr. San Agustin Nro. 236',
        ]);
    }
}
