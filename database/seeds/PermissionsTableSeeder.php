<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //Users

        Permission::create([
            'name' => 'Navegar Usuarios',
            'slug' => 'users.index',
            'description' => 'Lista y navega todos los usuarios del sistema',
        ]);

        Permission::create([
            'name' => 'ver destalle de  Usuarios',
            'slug' => 'users.show',
            'description' => 'ver en detalle cada usuario del sistema',
        ]);

        Permission::create([
            'name' => 'edicion de  Usuarios',
            'slug' => 'users.edit',
            'description' => 'Editar cualquier dato de usuario del sistema',
        ]);

        Permission::create([
            'name' => 'eliminar Usuarios',
            'slug' => 'users.destroy',
            'description' => 'Eliminar cualquier dato de usuario del sistema',
        ]);

        //citas
        Permission::create([
            'name' => 'Navegar citas',
            'slug' => 'citas.index',
            'description' => 'Lista y navega todos las citas del sistema',
        ]);

        Permission::create([
            'name' => 'ver destalle de cita',
            'slug' => 'citas.show',
            'description' => 'ver en detalle cada cita del sistema',
        ]);

        Permission::create([
            'name' => 'creacion de citas',
            'slug' => 'citas.create',
            'description' => 'Crear cualquier dato de una cita del sistema',
        ]);

        Permission::create([
            'name' => 'edicion de citas',
            'slug' => 'citas.edit',
            'description' => 'Editar cualquier dato de cita del sistema',
        ]);

        Permission::create([
            'name' => 'eliminar cita',
            'slug' => 'citas.destroy',
            'description' => 'Eliminar cualquier dato de citas del sistema',
        ]);

        //Roles
        Permission::create([
            'name' => 'Navegar roles',
            'slug' => 'roles.index',
            'description' => 'Lista y navega todos los roles del sistema',
        ]);

        Permission::create([
            'name' => 'ver destalle de  rol',
            'slug' => 'roles.show',
            'description' => 'ver en detalle cada rol del sistema',
        ]);

        Permission::create([
            'name' => 'creacion de roles',
            'slug' => 'roles.create',
            'description' => 'Editar cualquier dato de un rol del sistema',
        ]);

        Permission::create([
            'name' => 'edicion de roles',
            'slug' => 'roles.edit',
            'description' => 'Editar cualquier dato de rol del sistema',
        ]);

        Permission::create([
            'name' => 'eliminar rol',
            'slug' => 'roles.destroy',
            'description' => 'Eliminar cualquier dato de rol del sistema',
        ]);

        //expediente

        Permission::create([
            'name' => 'Navegar expedientes',
            'slug' => 'expedientes.index',
            'description' => 'Lista y navega todos los expedientes del sistema',
        ]);

        Permission::create([
            'name' => 'ver destalle de expediente',
            'slug' => 'expedientes.show',
            'description' => 'ver en detalle cada expediente del sistema',
        ]);

        Permission::create([
            'name' => 'creacion de expedientes',
            'slug' => 'expedientes.create',
            'description' => 'Crear cualquier dato de un expediente del sistema',
        ]);

        Permission::create([
            'name' => 'edicion de expedientes',
            'slug' => 'expedientes.edit',
            'description' => 'Editar cualquier dato de expedinete del sistema',
        ]);

        Permission::create([
            'name' => 'eliminar expediente',
            'slug' => 'expedientes.destroy',
            'description' => 'Eliminar cualquier dato de expedientes del sistema',
        ]);
    }
}
