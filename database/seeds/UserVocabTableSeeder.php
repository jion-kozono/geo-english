<?php

use Illuminate\Database\Seeder;
use App\UserVocab;

class UserVocabTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(UserVocab::class, 1)
            ->create();
    }
}
