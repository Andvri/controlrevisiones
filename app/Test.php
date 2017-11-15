<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $guarded = [];
    public function evaluations(){
        return $this->hasMany(Evaluation::class)->orderBy('created_at', 'desc');
    }
    public function section(){
        return $this->belongsTo(Section::class);
    }
}
