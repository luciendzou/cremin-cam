<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VerificationLog extends Model
{
    protected $fillable = [
        'nom_saisi',
        'guest_id',
        'result',
    ];

    public function guest()
    {
        return $this->belongsTo(Guest::class);
    }
}

