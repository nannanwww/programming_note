<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('codes')->insert([
            'language_id' => '1',
            'library' => 'library',
            'check_flag' => '1',
            'category' => 'category 1',
            'main_code' => '<? php is main>',
            'example' => '<? php is example>//@;',
            'explain' => 'explainTEST',
            'description' => 'descriptionTEST',
            'image' => 'images/default.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
