<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payment::create([
            'import'=>'89',
            'date'=>'2022-09-16',
            'observations'=>'ninguna',
            'collection_id'=>'1',
            'assistence_id'=>'1',
            'activity_id'=>'1',
        ]);
    }
}
