<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurveyController extends Controller {
  public function index() {
    return view('survey.index');
  }

  public function create() {
    return view('survey.create');
  }

  public function store(Request $request) {
    //
    return redirect(route('survey.index'));
  }
}
