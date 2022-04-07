<?php

namespace Database\Seeders;

use App\Models\time;
use Illuminate\Database\Seeder;

class TimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time1 = new time();

        $time1->id_venta=1;
        $time1->id_games=1;
        $time1->hora_inicio='17:10';
        $time1->hora_final='18:00';
        $time1->precio=2500;

        $time1->save();

        $time2 = new time();

        $time2->id_venta=2;
        $time2->id_games=2;
        $time2->hora_inicio='14:30';
        $time2->hora_final='19:30';
        $time2->precio=15000;

        $time2->save();

        $time3 = new time();

        $time3->id_venta=3;
        $time3->id_games=3;
        $time3->hora_inicio='15:20';
        $time3->hora_final='18:00';
        $time3->precio=8000;

        $time3->save();

        $time4 = new time();

        $time4->id_venta=4;
        $time4->id_games=4;
        $time4->hora_inicio='16:30';
        $time4->hora_final='18:30';
        $time4->precio=9000;

        $time4->save();
    }
}
