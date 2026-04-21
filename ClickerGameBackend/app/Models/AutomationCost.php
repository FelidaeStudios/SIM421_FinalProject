<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AutomationCost extends Model
{
    use HasFactory;

    public function automation(): BelongsTo
    {
        return $this->belongsTo(Automation::class);
    }
}