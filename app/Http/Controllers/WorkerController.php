<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Worker;

class WorkerController extends Controller
{
    public function add(){
        return view('worker.add');
    }

    public function store(Request $req){

        $name = $req->name;
        $email = $req->email;
        $gender = $req->gender;
        $dob = $req->dob;
        $salary=$req->salary;
        $description = $req->description;

        $obj= new Worker();
        $obj->name = $name;
        $obj->email = $email;
        $obj->gender = $gender;
        $obj->dob = $dob;
        $obj->salary = $salary;
        $obj->description = $description;

        if($obj->save()){
           
           return redirect()->route('workers')->with('success','Inserted Successfully');
          // return view('worker.list');
        }



    }
    public function all(){
        $emps = Worker::all(); //select all from employees

        return view('worker.list',['workers'=>$emps]);

    }
}
