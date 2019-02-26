<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
use App\Survey;
use Auth;

class ParentTest extends Controller
{
    public function makeParent() {
      $user = Auth::user();
      $survey = $user->surveys()->first();
      $type = $survey->types()->first();
      $subtype = $type->children()->create([
        'name' => 'childTypeOne'
      ])->pivot();
      dd($subtype);
    }
}
