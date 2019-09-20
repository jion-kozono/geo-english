<?php

use Illuminate\Database\Seeder;
use App\ClearedRecord;

class ClearedRecordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ClearedRecord::class, 1)
            ->create();
    }
}
