<?php

namespace Database\Seeders;

use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 100; $i++) {
            $oraPart = $faker->dateTimeBetween('now', Carbon::now()->endOfYear());
            $oraArr = Carbon::instance($oraPart)->addHours(rand(1, 10))->addMinutes(rand(0, 59));
            $newTrain = new Train();
            $newTrain->azienda = $faker->company();
            $newTrain->stazPartenza = $faker->city();
            $newTrain->stazArrivo = $faker->city();
            $newTrain->oraPartenza = $oraPart;
            $newTrain->oraArrivo = $oraArr;
            do {
                $cod = strtoupper($faker->bothify("??####"));
            } while (Train::where('codice', $cod)->exists());
            $newTrain->codice = $cod;
            $newTrain->nCarrozze = $faker->randomDigit();
            $inOr = $faker->boolean();
            $newTrain->inOrario = $inOr;
            $newTrain->cancellato = $faker->boolean(30);
            $newTrain->nome = $faker->name();
            if (!$inOr){
                $newTrain->ritardo = rand(1,100);
            }
            $newTrain->save();
        }
    }
}
