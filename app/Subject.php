<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $guarded = [];
    public function sections(){
        return $this->hasMany(Section::class);
    }
}
