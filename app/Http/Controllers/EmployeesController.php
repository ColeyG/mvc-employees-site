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

   public function destroy (\App\Employee $employee) {
    $employee->delete();

    return redirect('/');
   }
}
