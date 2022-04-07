<?php

namespace Database\Seeders;

use App\Models\customer;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer1 = new customer();

        $customer1->name="Carlos";
        $customer1->apellido="Ortega";
        $customer1->cedula=123456789;
        $customer1->fecha_nacimiento='1990-02-20';
        $customer1->celular=3181111111;
        $customer1->email="carlos@ej.com";
        $customer1->direccion="calle real";
        $customer1->credito=false;

        $customer1->save();

        $customer2 = new customer();

        $customer2->name="Daniel";
        $customer2->apellido="Basante";
        $customer2->cedula=234567891;
        $customer2->fecha_nacimiento='1985-12-27';
        $customer2->celular=3182222222;
        $customer2->email="daniel@ej.com";
        $customer2->direccion="calle leon";
        $customer2->credito=false;

        $customer2->save();
        
        $customer3 = new customer();

        $customer3->name="Jairo";
        $customer3->apellido="Melo";
        $customer3->cedula=345678912;
        $customer3->fecha_nacimiento="1993-06-05";
        $customer3->celular=3183333333;
        $customer3->email="jairo@ej.com";
        $customer3->direccion="pueblo nuevo";
        $customer3->credito=false;

        $customer3->save();

        $customer4 = new customer();

        $customer4->name="Tomas";
        $customer4->apellido="Aguirre";
        $customer4->cedula=456789123;
        $customer4->fecha_nacimiento="1995-10-12";
        $customer4->celular=1;
        $customer4->email="tomas@ej.com";
        $customer4->direccion="calle arboleda";
        $customer4->credito=false;

        $customer4->save();
    }
}
