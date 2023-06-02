<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home(){
        $student = Student::orderBy("id")->get();
        return view("welcome",[
            "student"=>$student
        ]);
    }

    public function studentCreate(){
        return view("form");
    }

    public function studentSave(Request $request){
        $request->validate([
            "name"=>"required",
            "age"=>"required|numeric|min:0",
            "address"=>"required",
            "telephone" => "required|min:10|max:20"
        ],[
            // thong bao gi thi thong bao
        ]);
        Student::create([
            "name" => $request->get("name"),
            "age" => $request->get("age"),
            "address" => $request->get("address"),
            "telephone" => $request->get("telephone")
        ]);
        return redirect()->to("/welcome");
    }
}
