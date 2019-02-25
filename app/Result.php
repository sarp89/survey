<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
  protected $fillable = [
      'survey_id', 'type_id', 'ranged', 'name', 'text'
  ];

  public function survey() {
    return $this->belongsTo(Survey::class);
  }

  public function type() {
    return $this->belongsTo(Type::class);
  }

  public function ranges() {
    return $this->hasMany(Range::class);
  }
}
