<?php

namespace Database\Factories;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    protected $model = Booking::class;

    public function definition()
    {
        $startDate = $this->faker->dateTimeBetween('now', '+1 week');
        $endDate = $this->faker->dateTimeBetween($startDate, strtotime('+1 week'));

        return [
            'accommodation_id' => function () {
                return \App\Models\Accommodation::factory()->create()->id;
            },
            'start_date' => $startDate,
            'end_date' => $endDate,
            // dodajte ostale atribute rezervacije
        ];
    }
}
