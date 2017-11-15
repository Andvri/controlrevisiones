<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $guarded = [];
    public function revisions(){
        return $this->hasMany(Revisions::class)->orderBy('created_at', 'desc');
    }
    public function test(){
        return $this->belongsTo(Test::class);
    }
}
