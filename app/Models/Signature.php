<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signature extends Model
{
    use HasFactory;

    // Attributes that are mass assignable
    protected $fillable = ['name', 'email', 'country_id', 'receive_updates'];



    // Defining the relationship with the Country model
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
