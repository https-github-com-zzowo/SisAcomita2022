<?php

namespace Database\Seeders;

use App\Models\images;
use App\Models\post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts=post::factory(50)->create();
        foreach ($posts as $post) {
            images::factory(1)->create([
                'imageable_id'=>$post->id,
                'imageable_type'=>post::class
            ]);
        }
    }
}
