<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
  public function send(Request $request) {
    $validatedData = $request->validate([
      'name' => 'required',
      'email' => 'required',
      'message' => 'required'
  ]);
    return $request->all();
  }
}
