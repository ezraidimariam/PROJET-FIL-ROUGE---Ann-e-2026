<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'nom',
        'email',
        'password',
        'points',
        'level_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function admin()
    {
        return $this->hasOne(Admin::class);
    }

    public function sessionFocus()
    {
        return $this->hasMany(SessionFocus::class);
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    public function challenges()
    {
        return $this->belongsToMany(Challenge::class)->withPivot('status', 'completed_at');
    }
}
