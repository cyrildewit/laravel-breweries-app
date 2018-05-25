<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\OpeningHours\OpeningHours;

class Brewery extends Model
{
    public $distance;

    public $casts = [
        'opening_hours' => 'array'
    ];

    // a brewery hasMany owners (users)

    public function getFormattedLocation()
    {
        //
    }

    public function getDistance()
    {
        return $this->distance;
    }

    public function setDistance($distance)
    {
        $this->distance = $distance;

        return $this;
    }

    public function getOpeningHours()
    {
        $openingHours = [];

        is_array($openingHours = $this->opening_hours);

        return OpeningHours::create($openingHours);
    }
}
