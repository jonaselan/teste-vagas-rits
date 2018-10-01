<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $guarded = [];

    public function candidates(){
        return $this->belongsTo(Vacancy::class);
    }

}
