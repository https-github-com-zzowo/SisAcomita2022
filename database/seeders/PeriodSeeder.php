<?php

namespace Database\Seeders;

use App\Models\Period;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Period::create([
            'name'=>'2015-2016',
            'dateinit'=>'2015-01-01',
            'dateout'=>'2016-12-31',

        ]);

        Period::create([
            'name'=>'2017-2018',
            'dateinit'=>'2017-01-01',
            'dateout'=>'2018-12-31',

        ]);

        Period::create([
            'name'=>'2019-2020',
            'dateinit'=>'2019-01-01',
            'dateout'=>'2020-12-31',

        ]);

        Period::create([
            'name'=>'2021-2022',
            'dateinit'=>'2021-01-01',
            'dateout'=>'2022-12-31',
            'status'=>'1'

        ]);

        Period::create([
            'name'=>'2023-2024',
            'dateinit'=>'2023-01-01',
            'dateout'=>'2024-12-31',

        ]);
    }
}
