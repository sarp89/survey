<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Combination extends Model
{
  protected $fillable = [
      'survey_id', 'name', 'text'
  ];

  public function survey() {
    return $this->belongsTo(Survey::class);
  }
}
