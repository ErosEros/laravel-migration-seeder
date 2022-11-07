<?php

use Illuminate\Database\Seeder;

use Faker\generetor as Faker;

use app\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for($i = 0; $i < 100; $i++){

                $train = new Train();
                $train->azienda=$faker->name();
                $train->save();
            }
        }
}
