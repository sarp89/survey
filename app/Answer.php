<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
  protected $fillable = [
      'survey_id', 'question_id', 'option_id', 'participant_id'
  ];

  public function survey() {
    return $this->belongsTo(Survey::class);
  }

  public function question() {
    return $this->belongsTo(Question::class);
  }

  public function option() {
    return $this->belongsTo(Option::class);
  }

  public function participant() {
    return $this->belongsTo(Participant::class);
  }
}
