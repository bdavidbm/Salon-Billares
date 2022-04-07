<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('games')->delete();*/
        DB::table('clients')->delete();
        DB::table('sales')->delete();
        DB::table('payments')->delete();
        DB::table('times')->delete();

        /*$this->call(GamesTableSeeder::class);*/
        $this->call(ClientsTableSeeder::class);
        $this->call(SalesTableSeeder::class);
        $this->call(PaymentsTableSeeder::class);
        $this->call(TimesTableSeeder::class);
    }
}
