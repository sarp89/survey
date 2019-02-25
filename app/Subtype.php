<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subtype extends Model
{
  protected $fillable = [
      'name', 'type_id'
  ];

  public function type() {
    return $this->belongsTo(Type::class);
  }

  public function ranges() {
    return $this->hasMany(Range::class);
  }
}
