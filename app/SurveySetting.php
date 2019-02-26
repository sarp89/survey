<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveySetting extends Model
{
    protected $fillable = [
        'survey_id', 'combination', 'single', 'unordered'
    ];

    public function survey() {
      return $this->belongsTo(Survey::class);
    }
}
