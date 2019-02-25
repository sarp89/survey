<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdateRequest;
use Auth;

class UserController extends Controller {
    public function index() {
        return view('user.index');
    }

    public function edit() {
      return view('user.edit')->withUser(Auth::user());
    }

    public function update(UserUpdateRequest $request) {
      $validated = $request->validated();
      dd($validated);
      Auth::user()->update($request->all());
      return redirect()->back();
    }
}
