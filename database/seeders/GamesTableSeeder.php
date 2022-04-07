<?php

namespace Database\Seeders;

use App\Models\game;
use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $game1 = new game();

        $game1->descripcion="1";
        $game1->presio=250;
        $game1->minutos_presio=5;

        $game1->save();

        $game2 = new game();

        $game2->descripcion="2";
        $game2->presio=250;
        $game2->minutos_presio=5;

        $game2->save();

        $game3 = new game();

        $game3->descripcion="3";
        $game3->presio=250;
        $game3->minutos_presio=5;

        $game3->save();

        $game4 = new game();

        $game4->descripcion="4";
        $game4->presio=250;
        $game4->minutos_presio=5;

        $game4->save();
    }
}
