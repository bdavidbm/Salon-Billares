<?php

namespace Database\Seeders;

use App\Models\sale;
use Illuminate\Database\Seeder;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sale1 = new sale();

        $sale1->id_Usuario=1;
        $sale1->fecha='2022-04-06';
        $sale1->hora='18:00';
        $sale1->precio_total=2500;
        $sale1->numero_clientes=1;

        $sale1->save();

        $sale2 = new sale();

        $sale2->id_Usuario=2;
        $sale2->fecha='2022-04-06';
        $sale2->hora='19:30';
        $sale2->precio_total=15000;
        $sale2->numero_clientes=1;

        $sale2->save();

        $sale3 = new sale();

        $sale3->id_Usuario=1;
        $sale3->fecha='2022-04-05';
        $sale3->hora='18:00';
        $sale3->precio_total=8000;
        $sale3->numero_clientes=1;

        $sale3->save();

        $sale4 = new sale();

        $sale4->id_Usuario=1;
        $sale4->fecha='2022-04-04';
        $sale4->hora='18:30';
        $sale4->precio_total=9000;
        $sale4->numero_clientes=1;

        $sale4->save();
    }
}
