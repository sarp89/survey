<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
  protected $fillable = [
      'question_id', 'type_id', 'weight', 'number', 'text'
  ];

  public function question() {
    return $this->belongsTo(Question::class);
  }

  public function type() {
    return $this->belongsTo(Type::class);
  }
}
