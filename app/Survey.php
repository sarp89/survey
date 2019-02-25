<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model {

  protected $fillable = [
      'user_id', 'name', 'combination'
  ];

  public function user() {
    return $this->belongsTo(User::class);
  }

  public function answers() {
    return $this->hasMany(Answer::class);
  }

  public function combinations() {
    return $this->hasMany(Combination::class);
  }

  public function participants() {
    return $this->hasMany(Participant::class);
  }

  public function questions() {
    return $this->hasMany(Question::class);
  }

  public function results() {
    return $this->hasMany(Result::class);
  }

}
