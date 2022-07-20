<?php

namespace Database\Seeders;

use App\Models\Payment;
use Carbon\Carbon;
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
            'import'=>'200',
            'date'=>Carbon::now()->format('Y-m-d H:i:s'),
            'partner_id'=>'1',
            'collection_id'=>'1',
            'assistence_id'=>null,
        ]);

        Payment::create([
            'import'=>'30',
            'date'=>Carbon::now()->format('Y-m-d H:i:s'),
            'partner_id'=>'2',
            'collection_id'=>'1',
            'assistence_id'=>null,
        ]);

        Payment::create([
            'import'=>'30',
            'date'=>Carbon::now()->format('Y-m-d H:i:s'),
            'partner_id'=>'3',
            'collection_id'=>'1',
            'assistence_id'=>null,
        ]);

        Payment::create([
            'import'=>'20',
            'date'=>Carbon::now()->format('Y-m-d H:i:s'),
            'partner_id'=>'4',
            'observations'=>'Debe 10 soles',
            'collection_id'=>'1',
            'assistence_id'=>null,
        ]);

        Payment::create([
            'import'=>'50',
            'date'=>Carbon::now()->format('Y-m-d H:i:s'),
            'partner_id'=>'1',
            'collection_id'=>'2',
            'assistence_id'=>null,
        ]);

        Payment::create([
            'import'=>'50',
            'date'=>Carbon::now()->format('Y-m-d H:i:s'),
            'partner_id'=>'2',
            'collection_id'=>'2',
            'assistence_id'=>null,
        ]);

        Payment::create([
            'import'=>'50',
            'date'=>Carbon::now()->format('Y-m-d H:i:s'),
            'partner_id'=>'3',
            'collection_id'=>'2',
            'assistence_id'=>null,
        ]);

        Payment::create([
            'import'=>'50',
            'date'=>Carbon::now()->format('Y-m-d H:i:s'),
            'partner_id'=>'4',
            'collection_id'=>'2',
            'assistence_id'=>null,
        ]);

        Payment::create([
            'import'=>'10',
            'date'=>Carbon::now()->format('Y-m-d H:i:s'),
            'partner_id'=>'1',
            'collection_id'=>'3',
            'assistence_id'=>null,
        ]);

        Payment::create([
            'import'=>'10',
            'date'=>Carbon::now()->format('Y-m-d H:i:s'),
            'partner_id'=>'2',
            'collection_id'=>'3',
            'assistence_id'=>null,
        ]);

        Payment::create([
            'import'=>'10',
            'date'=>Carbon::now()->format('Y-m-d H:i:s'),
            'partner_id'=>'3',
            'collection_id'=>'3',
            'assistence_id'=>null,
        ]);

        Payment::create([
            'import'=>'10',
            'date'=>Carbon::now()->format('Y-m-d H:i:s'),
            'partner_id'=>'4',
            'collection_id'=>'3',
            'assistence_id'=>null,
        ]);
    }
}
