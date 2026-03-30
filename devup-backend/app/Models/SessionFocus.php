<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionFocus extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_debut',
        'duree',
        'user_id',
    ];

    protected $casts = [
        'date_debut' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
