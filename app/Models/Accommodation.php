<?php

namespace App\Models;

use Database\Factories\AccommodationFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accommodation extends Model
{
    use HasFactory;

    protected $fillable = ['_token', 'title', 'description', 'price'];

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
     * Get the bookings for the accommodation.
     */
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
  
}
