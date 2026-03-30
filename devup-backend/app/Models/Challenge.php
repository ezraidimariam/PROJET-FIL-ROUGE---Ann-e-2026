<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
        'points_recompense',
        'admin_id',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('status', 'completed_at');
    }
}
