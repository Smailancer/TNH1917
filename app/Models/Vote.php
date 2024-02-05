<?php

namespace App\Models;

use App\Models\Option;
use App\Models\Country;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vote extends Model
{
    use HasFactory;

        protected $fillable = [

            'user_id',
            'country_id',
            'percentage',
            'option_id',
            'notes',
        ];

        public function user()
    {
        return $this->belongsTo(User::class);
    }

        public function country()
    {
        return $this->belongsTo(Country::class);
    }

        public function options()
    {
        return $this->belongsToMany(Option::class);
    }

}
