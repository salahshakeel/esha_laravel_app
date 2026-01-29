<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class TestController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('test',[
            'employees' => $employees
        ]);
    }

    public function store(Request $request){
        $user = Employee::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        return back();
    }

    public function edit(Employee $employee){
        return view('edit',[
            'employee' => $employee
        ]);
    }

    public function update(Employee $employee,Request $request){
        $employee->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return redirect()->route('test.index');
    }

    public function destroy(Employee $employee){
       $employee->delete();
       return back();
    }
}
