<?php

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
        $this->call(UserSeederTable::class);
        $this->call(StatesTableSeeder::class);
        $this->call(CitysTableSeeder::class);
        $this->call(CategorySeederTable::class);
        $this->call(CustomerSeederTable::class);
    }
}
