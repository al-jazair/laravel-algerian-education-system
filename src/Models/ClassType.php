<?php

namespace ElaborateCode\AlgerianEducationSystem\Models;

use Illuminate\Database\Eloquent\Model;

class ClassType extends Model
{
    protected $guarded = ['id'];

    /*
    |-------------------------------------
    | Relationships
    |-------------------------------------
    */
    public function cycle()
    {
        return $this->belongsTo(Cycle::class);
    }
}
