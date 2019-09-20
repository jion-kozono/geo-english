<?php

use Illuminate\Database\Seeder;
use App\CourceLevel;

class CourceLevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CourceLevel::class, 1)
            ->create();
    }
}
