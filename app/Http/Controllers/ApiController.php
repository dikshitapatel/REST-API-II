<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class ApiController extends Controller
{
    public function insert(Request $request)
    {
        $employees = new Employee();

        $employees->fname = $request->input('fname');
        $employees->lname = $request->input('lname');
        $employees->city = $request->input('city');

        $employees->save();
        return response()->json($employees);


    }


    public function fetch()
    {
        $employees = Employee::all();
        return response()->json($employees);
    }
    public function fetchbyid($id)
    {
        $employees = Employee::find($id);
        return response()->json($employees);
    }
    public function update(Request $request,$id)
    {
        $employees =  Employee::find($id);

        $employees->fname = $request->input('fname');
        $employees->lname = $request->input('lname');
        $employees->city = $request->input('city');

        $employees->save();
        return response()->json($employees);


    }
    public function delete(Request $request,$id)
    {
        $employees = Employee::find($id);
        $employees->delete();
        return response()->json($employees);
    }
}
