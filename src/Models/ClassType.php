<?php

namespace ElaborateCode\AlgerianEducationSystem\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ClassType extends Model
{
    protected $guarded = ['id'];

    /*
    |-------------------------------------
    | Relationships
    |-------------------------------------
    */
    public function cycle(): BelongsTo
    {
        return $this->belongsTo(Cycle::class, 'cycle_id', 'id');
    }

    public function previousClassType(): BelongsTo
    {
        return $this->belongsTo(self::class, 'previous_class_type_id', 'id');
    }

    public function nextClassTypes(): HasMany
    {
        return $this->hasMany(self::class, 'previous_class_type_id', 'id');
    }

    public function previousLevelClassTypes()
    {
        return $this->hasMany(self::class, 'level', 'previous_level');
    }

    public function nextLevelClassTypes()
    {
        return $this->hasMany(self::class, 'previous_level', 'level');
    }
}
