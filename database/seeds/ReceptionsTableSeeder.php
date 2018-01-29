<?php

use Illuminate\Database\Seeder;
use App\Reception;

class ReceptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Reception::class, 10)->create();
    }
}
