<?php

namespace Database\Seeders;

use App\Models\client;
use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client1= new client();

        $client1->name="Carlos";
        $client1->apellido="Ortega";
        $client1->cedula=123456789;
        $client1->fecha_nacimiento='1995-12-30';
        $client1->celular=31811111;
        $client1->email="carlos@ej.com";
        $client1->direccion="calle real";
        $client1->credito=false;
        
        $client1->save();

        $client2= new client();

        $client2->name="Daniel";
        $client2->apellido="Basante";
        $client2->cedula=234567891;
        $client2->fecha_nacimiento='1990-05-08';
        $client2->celular=31822222;
        $client2->email="daniel@ej.com";
        $client2->direccion="calle leon";
        $client2->credito=false;

        $client2->save();
        
        $client3= new client();

        $client3->name="Jairo";
        $client3->apellido="Melo";
        $client3->cedula=345678912;
        $client3->fecha_nacimiento="1988-01-28";
        $client3->celular=31833333;
        $client3->email="jairo@ej.com";
        $client3->direccion="pueblo nuevo";
        $client3->credito=false;

        $client3->save();

        $client4= new client();

        $client4->name="Tomas";
        $client4->apellido="Aguirre";
        $client4->cedula=456789123;
        $client4->fecha_nacimiento="1992-06-08";
        $client4->celular=31844444;
        $client4->email="tomas@ej.com";
        $client4->direccion="calle arboleda";
        $client4->credito=false;

        $client4->save();
    }
}
