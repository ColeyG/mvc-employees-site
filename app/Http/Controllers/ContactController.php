<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Contact Controller to Submit the Contact Form
 */
class ContactController extends Controller
{
  /**
   * Contact Controller Route
   *
   * @param Request $request
   * @return void
   */
  public function send(Request $request) {
    $validatedData = $request->validate([
      'name' => 'required',
      'email' => 'required',
      'message' => 'required'
  ]);
    return redirect('/')->with('alert', 'Sent Message! You\'ll hear from us soon! (Not Really)');
  }
}
