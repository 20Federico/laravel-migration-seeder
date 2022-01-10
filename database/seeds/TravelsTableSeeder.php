<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 10; $i++) { 
        $newTravel = new Travel();
        $newTravel->title = 'viaggio relax in ' . $faker->state();
        $newTravel->description = $faker->paragraph(2);
        $newTravel->place_of_departure = $faker->city();
        $newTravel->place_of_arrival = $faker->city();
        $newTravel->departure_date = $faker->date('Y_m_d');
        $newTravel->arrival_date = $faker->date('Y_m_d');
        $newTravel->departure_time = $faker->time('H:i');
        $newTravel->arrival_time = $faker->time('H:i');
        $newTravel->travelers_min_number = $faker->numberBetween(1, 2);
        $newTravel->travelers_max_number = $faker->numberBetween(1, 20);
        $newTravel->price_per_traveler = $faker->numberBetween(10, 2000);
        $newTravel->notes = $faker->sentence(3);
        $newTravel->save();
      }
    }
}
