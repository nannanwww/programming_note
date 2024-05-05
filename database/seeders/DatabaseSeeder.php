<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LanguagesTableSeeder::class);
        $this->call(FrameworksTableSeeder::class);
        $this->call(CodesTableSeeder::class);
        $this->call(CommandsTableSeeder::class);
        $this->call(ProcessesTableSeeder::class);
        $this->call(RulesTableSeeder::class);
        $this->call(ShortcutsTableSeeder::class);
    }
}
