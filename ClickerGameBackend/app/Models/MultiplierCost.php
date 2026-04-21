<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MultiplierCost extends Model
{
    use HasFactory;

    public function multiplier(): BelongsTo
    {
        return $this->belongsTo(Multiplier::class);
    }
}