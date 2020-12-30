<?php

namespace App\Http\Controllers;
use  Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        return DB::table('students')->get();
    }

    public function create(){
        return view('student.add');
    }

    public function show($id){
        return DB::table('students')->where('id',$id)->get();
    }

    public function store(Request $request){
        $flag = DB::table('students')
        ->insert(["name"=>$request->name,
        "email"=>$request->email,
        "enrollment"=>$request->enroll]);

        if($flag){
            return "Success";
        } else {
            return "Fail";
        }
    }
}
