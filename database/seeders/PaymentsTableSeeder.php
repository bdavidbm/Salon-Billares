<?php

namespace Database\Seeders;

use App\Models\payment;
use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payments1 = new payment();

        $payments1->id_venta=1;
        $payments1->id_cliente=1;
        $payments1->precio=2500;

        $payments1->save();
        
        $payments2 = new payment();

        $payments2->id_venta=2;
        $payments2->id_cliente=2;
        $payments2->precio=15000;

        $payments2->save();

        $payments3 = new payment();

        $payments3->id_venta=3;
        $payments3->id_cliente=3;
        $payments3->precio=8000;

        $payments3->save();

        $payments4 = new payment();

        $payments4->id_venta=4;
        $payments4->id_cliente=4;
        $payments4->precio=9000;

        $payments4->save();
    }
}
