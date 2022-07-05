<?php

namespace Database\Seeders;

use App\Models\assistence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function PHPSTORM_META\type;

class AssistenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        assistence::create([
            'status'=>'Asistió',
            'activity_id'=>'1',
            'partner_id'=>'1'
        ]);

        assistence::create([
            'status'=>'Asistió',
            'activity_id'=>'1',
            'partner_id'=>'2'
        ]);

        assistence::create([
            'status'=>'Asistió',
            'activity_id'=>'1',
            'partner_id'=>'3',
        ]);

        assistence::create([
            'status'=>'Asistió',
            'activity_id'=>'2',
            'partner_id'=>'1'
        ]);

        assistence::create([
            'status'=>'Asistió',
            'activity_id'=>'2',
            'partner_id'=>'2'
        ]);

        assistence::create([
            'status'=>'Falta',
            'activity_id'=>'2',
            'partner_id'=>'3',
        ]);

        assistence::create([
            'status'=>'Asistió',
            'activity_id'=>'3',
            'partner_id'=>'1'
        ]);

        assistence::create([
            'status'=>'Falta',
            'activity_id'=>'3',
            'partner_id'=>'2'
        ]);

        assistence::create([
            'status'=>'Falta',
            'activity_id'=>'3',
            'partner_id'=>'3',
        ]);


    }
}
