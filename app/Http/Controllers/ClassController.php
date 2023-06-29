<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class ClassController extends Controller
{
    public function index(){
        $tests = Test::all();
        return view('test', ['tests' => $tests]);
    }


    public function show($id){
        return view('base', ["id" => $id]);
    }
}
