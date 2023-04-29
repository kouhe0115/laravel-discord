<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i =0; $i< 10; $i++) {
            DB::table('posts')->insert([
                'avatar' => 'https://avatars.githubusercontent.com/u/48540862?s=40&v=4',
                'display_name' => 'display_name' . $i,
                'image' => '',
                'text' => 'text' . $i,
                'user_name' => 'user_name' . $i,
            ]);
        }
    }
}
