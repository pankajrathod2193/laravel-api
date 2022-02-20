<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\student;

class DeviceController extends Controller
{
    //
    function add(Request $req)
    {
        $student = new Student;
        $student->name=$req->name;
        $student->mobile=$req->mobile;
        $student->city=$req->city;
        $student->save();
    }
    function update(Request $req)
    {
        $student = Student::find($req->id);
        $student->name=$req->name;
        $student->mobile=$req->mobile;
        $student->city=$req->city;
        $student->save();
    }
    function delete($id)
    {
        $student = Student::find($id);
        $student->delete();
    }
    function search($name)
    {
        return Student::where("name",$name)->get();
    }
}
