<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revisions extends Model
{
    protected $guarded = [];
    public function evaluation(){
        return $this->belongsTo(Evaluation::class);
    }
}
