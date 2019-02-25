<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
  protected $fillable = [
      'survey_id', 'name'
  ];

  public function survey() {
    return $this->belongsTo(Survey::class);
  }

  public function subtypes() {
    return $this->hasMany(Subtype::class);
  }
}
