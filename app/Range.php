<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Range extends Model
{
  protected $fillable = [
      'result_id', 'subtype_id', 'from', 'to', 'name', 'text'
  ];

  public function result() {
    return $this->belongsTo(Result::class);
  }

  public function subtype() {
    return $this->belongsTo(Subtype::class);
  }
}
