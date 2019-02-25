<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;
use Auth;

class SurveyController extends Controller {
  public function index() {
    return view('survey.index');
  }

  public function create() {
    return view('survey.create');
  }

  public function store(Request $request) {
    dd($request);
    return redirect(route('survey.create'));
  }
}

/*
$types = $request->types;
$types = [
  [
    'name' => 'typename',
    'subtypes' => [
      [
        'name' => 'subtypename1'
      ],
      [
        'name' => 'subtypename2'
      ]
    ]
  ],
];

$survey = $request->survey;
$survey = [
  'name' => 'surveybla',
  'questions' => [
    [
      'text' => 'blablabla?',
      'options' => [

      ]
    ],
    [
      'text' => 'blablabla?'
    ],
    [
      'text' => 'blablabla?'
    ],
  ],
];
$settings = $request->settings;
$settings = [
  'combination' => true,
  'unordered' => true,
  'single' => false
];
$survey->settings()->create($settings);
*/
