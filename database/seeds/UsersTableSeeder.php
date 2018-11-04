<?php

use App\User;
use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'special' => 'all-access',
        ]);

        User::create([
         'name' => 'Nathaly Amaya',
         'email' => 'mamita.a53@gmail.com',
         'password' => bcrypt('fresitayy'),
        ]);

        DB::table('role_user')->insert([
         'role_id' => '1',
         'user_id' => '1',
        ]);
    }
}
