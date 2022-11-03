<?php

use Illuminate\Database\Seeder;
use App\Train;
use Faker\Generator as Faker;
class PopulateTrain extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train = new Train();
        $train->company = 'Trenitalia';
        $train->departure_station = 'Roma Termini';
        $train->arrival_station = 'Milano Centrale';
        $train->departure_time = '10:00';
        $train->arrival_time = '12:00';
        $train->train_code = 'T123';
        $train->carriages = '10';
        $train->on_time = '1';
        $train->cancelled = '0';
        $train->save();

    }
}

class FakerTrains extends Seeder {
    public function run(Faker $faker) {
        for($i=0; $i< 100;$i++){
            $train = new Train();
            $train->company = $faker->company;
            $train->departure_station = $faker->city;
            $train->arrival_station = $faker->city;
            $train->departure_time = $faker->time;
            $train->arrival_time = $faker->time;
            $train->train_code = $faker->randomNumber(3);
            $train->carriages = $faker->randomNumber(2);
            $train->on_time = $faker->boolean;
            $train->cancelled = $faker->boolean;
            $train->save();
        }
    }
}
