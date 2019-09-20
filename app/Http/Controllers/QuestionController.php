<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    public function inTest() {
        $questions = DB::table('questions')->get();
        return view('test.inTest',['questions' => '$questions'] );
    }
}
