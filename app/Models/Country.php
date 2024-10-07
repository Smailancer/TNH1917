<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code'];

    /**
     * Relationship with Vote.
     */
    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    /**
     * Relationship with User.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
