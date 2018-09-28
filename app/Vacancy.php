<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $guarded = [];

    public function candidates(){
        return $this->hasMany(Candidate::class);
    }
}
