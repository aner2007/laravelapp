<?php

namespace App\Models;

use Database\Factories\AccommodationFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accommodation extends Model
{
    use HasFactory;

    /**
     * Get the factory for this model.
     *
     * @return \Database\Factories\AccommodationFactory
     */
    protected static function newFactory()
    {
        return AccommodationFactory::new();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['_token', 'title', 'description', 'price'];

    // Ostatak vaše klase...
}

