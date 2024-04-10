<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    public function poll(): BelongsTo {
        return $this->belongsTo(Poll::class);
    }

    public function votes(): hasMany {
        return $this->hasMany(Vote::class);
    }
}
