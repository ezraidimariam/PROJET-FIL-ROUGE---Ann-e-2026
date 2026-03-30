<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'contenu',
        'date',
        'lu',
        'user_id',
    ];

    protected $casts = [
        'date' => 'datetime',
        'lu' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
