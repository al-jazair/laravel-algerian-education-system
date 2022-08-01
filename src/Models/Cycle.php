<?php

namespace ElaborateCode\AlgerianEducationSystem\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cycle extends Model
{
    public $incrementing = false;

    protected $keyType = 'string';

    public $timestamps = false;

    protected $fillable = [];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->table = config('algerian-education-system.cycles_table_name') ?? 'cycles';
    }

    /*
    |-------------------------------------
    | Relationships
    |-------------------------------------
    */
    public function classTypes(): HasMany
    {
        return $this->hasMany(ClassType::class, 'cycle_id', 'id');
    }
}
