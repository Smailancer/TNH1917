<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'country_id',
        'percentage',
        'notes',
         'public_vote', 'downloaded', 'sent_to_embassy', 'published_on_social_media'
    ];

    /**
     * Relationship with User.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relationship with Country.
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * Relationship with Option.
     */
    public function options()
    {
        return $this->belongsToMany(Option::class);
    }
    
}
