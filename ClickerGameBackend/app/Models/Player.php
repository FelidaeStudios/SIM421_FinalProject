<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Player extends Model
{
    use HasFactory;

    public function score()
    {
        return $this->hasOne(Score::class);
    }

    public function currentPoints()
    {
        return $this->hasOne(Points::class);
    }

    public function automationAmount()
    {
        return $this->hasMany(Automation::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}