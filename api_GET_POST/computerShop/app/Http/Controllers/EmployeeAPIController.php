<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeAPIController extends Controller
{
    public function list(){
        $employees = Employee::all();
        return $employees;
    }
    public function add(Request $req){
        $emp = new Employee();
        $emp->eName = $req->eName;
        $emp->empType = $req->empType;
        $emp->pass = $req->pass;
        $emp->pNumber = $req->pNumber;
        $emp->email = $req->email;
        $emp->address = $req->address;
        $emp->dob = $req->dob;
        $emp->eSalary = $req->eSalary;
        $emp->save();

    }
}
