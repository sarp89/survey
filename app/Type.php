<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
  protected $fillable = [
      'survey_id', 'parent_id', 'name'
  ];

  public function survey() {
    return $this->belongsTo(Survey::class);
  }

  public function parent() {
    return $this->belongsTo($this, 'parent_id');
  }

  public function children() {
    return $this->hasMany($this, 'parent_id', 'id');
  }
}
