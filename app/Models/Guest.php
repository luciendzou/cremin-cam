<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Storage;

class Guest extends Model
{
    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'numero_compte',
        'photo_path',
        'status',
        'used_at',
    ];

    protected $casts = [
        'used_at' => 'datetime',
    ];

    public function getFullNameAttribute(): string
    {
        return trim($this->prenom.' '.$this->nom);
    }

    public function getPhotoUrlAttribute(): ?string
    {
        return $this->photo_path ? Storage::url($this->photo_path) : null;
    }

    public function verificationLogs()
    {
        return $this->hasMany(VerificationLog::class);
    }
}


