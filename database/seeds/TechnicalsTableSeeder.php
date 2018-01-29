<?php

use Illuminate\Database\Seeder;
use App\Technical;

class TechnicalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Technical::class, 10)->create();
    }
}
