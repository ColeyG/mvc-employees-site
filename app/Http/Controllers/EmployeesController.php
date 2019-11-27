<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Employees Controller, Primary Route Controller
 */
class EmployeesController extends Controller
{
    /**
     * index route
     *
     * @return void
     */
    public function index () {
      return view('employees');
    }

    /**
     * about route
     *
     * @return void
     */
    public function about () {
     return view('about');
    }

    /**
     * manage route
     *
     * @return void
     */
    public function manage () {
      return view('manage');
    }

    /**
     * contact route
     *
     * @return void
     */
    public function contact () {
      return view('contact');
    }

    /**
     * employee route
     *
     * @return void
     */
    public function employee ($employee) {
      return view('employee')->with('employee', $employee);
    }

    /**
     * destroy route
     *
     * @return void
     */
   public function destroy (\App\Employee $employee) {
    $employee->delete();

    return redirect()->back();
   }

   /**
    * search route
    *
    * @return void
    */
   public function search(Request $request) {
    $employees = \App\Employee::where('name', 'LIKE', "%{$request->employee}%")->get();

    return view('search')->with('employees', $employees);
   }

   /**
    * create route
    *
    * @return void
    */
   public function create() {
     return view('create');
   }

   /**
    * Create employee route
    *
    * @param Request $request
    * @return void
    */
   public function createEmployee(Request $request) {
    $validatedData = $request->validate([
      'name' => 'required',
      'role' => 'required',
      'code' => 'required',
      'image' => 'required'
    ]);

    $newEmployee = new \App\Employee;

    $newEmployee->name = $request->name;
    $newEmployee->role = $request->role;
    $newEmployee->code = $request->code;
    $newEmployee->imageNumber = $request->image;
    $newEmployee->gender = $request->gender;

    $newEmployee->save();

    return redirect('/manage');
  }

  /**
   * edit route
   *
   * @param $employee
   * @return void
   */
  public function edit ($employee) {
    return view('edit')->with('employee', $employee);
  }

  /**
   * editAction route
   *
   * @param Request $request
   * @return void
   */
  public function editAction (Request $request) {
    \App\Employee::whereId($request->id)->update([
      'name' => $request->name,
      'role' => $request->role,
      'code' => $request->code,
      'imageNumber' => $request->image,
      'gender' => $request->gender
      ]);

      return redirect('/manage');
  }
}
