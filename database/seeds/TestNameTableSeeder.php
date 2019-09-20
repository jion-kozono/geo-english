<?php

use Illuminate\Database\Seeder;
use App\TestName;


class TestNameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(TestName::class, 1)
        //     ->create();
        DB::table('test_name')->insert([
            'test_name'=>'実力テスト',
            'skill_flag'=>'1',
        ]);
    }
}