<?php

namespace ElaborateCode\AlgerianEducationSystem\Models;

use Illuminate\Database\Eloquent\Model;

class Cycle extends Model
{
    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [];

    /*
    |-------------------------------------
    | Relationships
    |-------------------------------------
    */
    public function classTypes()
    {
        return $this->hasMany(ClassType::class);
    }
}
