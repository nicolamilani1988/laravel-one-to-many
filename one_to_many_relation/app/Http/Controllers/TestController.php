<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Task;

class TestController extends Controller
{
    public function home(){

        $employees = Employee::all();
        $tasks = Task::all();
        return view('pages.home', compact('employees','tasks'));
    }

    public function employee($id){

        $employee = Employee::findOrFail($id);
        $tasks = Task::all();
        //$task = Task::findOrFail($id);

        return view('pages.employee', compact('employee','tasks'));
    }
}
