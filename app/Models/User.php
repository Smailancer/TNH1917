<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Notifications\Notifiable;
use Filament\Panel;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements FilamentUser
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'username',
        'name',
        'email',
        'password',
        'country_id'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Determine if the user can access the Filament panel.
     */
    public function canAccessPanel(Panel $panel): bool
    {
        return str_ends_with($this->email, 'admin@smail.com');
    }

    /**
     * Check if the user has cast a vote.
     */
    public function hasVoted(): bool
    {
        return $this->vote()->exists();
    }

    /**
     * Relationship with Vote.
     */
    public function vote()
    {
        return $this->hasOne(Vote::class);
    }
}
