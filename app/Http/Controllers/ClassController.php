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

    public function getForm(){
        return view('create');
    }

    public function store(){
        error_log(request('title'));

        $title = request('title');
        $description = request('description');

        $test = new Test();
        $test->title = $title;
        $test->description = $description;
        $test->save();
        return redirect('login')->with('mssg', 'test created successfully');
    }

    public function show($id){
        return view('base', ["id" => $id]);
    }
}
