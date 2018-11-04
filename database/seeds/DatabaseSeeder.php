<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //dar de alta el archivo que queremos que se pueda emigrar
        $this->call(PermissionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CitasTableSeeder::class);
        $this->call(ExpedientesTableSeeder::class);
        $this->call(CuentasTableSeeder::class);
    }
}
