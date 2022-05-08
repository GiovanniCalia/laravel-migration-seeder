<?php

use Illuminate\Database\Seeder;
use App\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 1; $i < 100; $i++) {
            $trainData = [
                'Azienda'               => $faker->word(),
                'Stazione_di_partenza'  => $faker->city(),
                'Stazione_di_arrivo'    => $faker->city(),
                'Orario_di_partenza'    => $faker->time(),
                'Orario_di_arrivo'      => $faker->time(),
                'Codice_treno'          => $faker->numberBetween(10000, 99999),
                'Numero_carrozze'       => $faker->numberBetween(3, 50),
                'In_orario'             => $faker->boolean(),
                'Cancellato'            => $faker->boolean(),
                'Data_di_partenza'      => $faker->date(),
            ];

            $train = new Train();
            $train->fill($trainData);
            $train->save();
        }
    }
}
