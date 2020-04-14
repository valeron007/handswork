<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function index(Request $request){
        $student = new Student();
        $student->studentName = 'andrey1111';
        $student->studentAge = 18;
        $student->save();
        return 'запись создана';
    }

}
