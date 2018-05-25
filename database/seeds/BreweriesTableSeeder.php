<?php

use App\Models\Brewery;
use Illuminate\Database\Seeder;

class BreweriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brewery::create([
            'name' => 'Brouwerij de Molen',
            'lat' => 52.0859306,
            'lng' => 4.741387899999999,
            'opening_hours' => [
                'wednesday' => ['12:00-22:00'],
                'thursday' => ['12:00-22:00'],
                'friday' => ['12:00-22:00'],
                'saturday' => ['12:00-22:00'],
                'sunday' => ['12:00-22:00'],
            ],
        ]);

        Brewery::create([
            'name' => 'De Naeckte Brouwers',
            'lat' => 52.290288,
            'lng' => 4.840041,
            'opening_hours' => [
                'friday' => ['15:00-23:00'],
                'saturday' => ['15:00-23:00'],
                'sunday' => ['15:00-20:00'],
            ],
        ]);

        Brewery::create([
            'name' => 'Jopen',
            'lat' => 52.085931,
            'lng' => 4.741388,
            'opening_hours' => [
                'monday' => ['10:00-01:00'],
                'tuesday' => ['10:00-01:00'],
                'wednesday' => ['10:00-01:00'],
                'thursday' => ['10:00-01:00'],
                'friday' => ['10:00-01:00'],
                'saturday' => ['10:00-01:00'],
                'sunday' => ['10:00-01:00'],
            ],
        ]);
    }
}
