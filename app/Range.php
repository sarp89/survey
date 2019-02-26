<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Range extends Model
{
  protected $fillable = [
      'result_id', 'type_id', 'from', 'to', 'name', 'text'
  ];

  public function result() {
    return $this->belongsTo(Result::class);
  }

  public function type() {
    return $this->belongsTo(Type::class);
  }
}
