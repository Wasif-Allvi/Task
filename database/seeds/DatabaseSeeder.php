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
        factory(App\Categories::class,50)->create();
        factory(App\People::class,50)->create();
        factory(App\Items::class,50)->create();
    }
}
