<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
  protected $fillable = [
      'question_id', 'subtype_id', 'weight', 'number', 'text'
  ];

  public function question() {
    return $this->belongsTo(Question::class);
  }

  public function subtype() {
    return $this->belongsTo(Subtype::class);
  }
}
