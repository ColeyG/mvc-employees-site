<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index () {
      return view('employees');
    }

    public function about () {
     return view('about');
    }

    public function manage () {
      return view('manage');
    }

    public function contact () {
      return view('contact');
    }

    public function employee ($employee) {
      return view('employee')->with('employee', $employee);
    }

   public function destroy (\App\Employee $employee) {
    $employee->delete();

    return redirect()->back();
   }

   public function search(Request $request) {
    $employees = \App\Employee::where('name', 'LIKE', "%{$request->employee}%")->get();

    return view('search')->with('employees', $employees);
   }

   public function create() {
     return view('create');
   }
}
