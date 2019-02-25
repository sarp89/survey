<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
  protected $fillable = [
      'survey_id', 'user_id'
  ];

  public function survey() {
    return $this->belongsTo(Survey::class);
  }

  public function user() {
    return $this->belongsTo(User::class);
  }

  public function answers() {
    return $this->hasMany(Answer::class);
  }
}
