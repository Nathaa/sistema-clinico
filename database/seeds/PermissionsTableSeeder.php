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
            'name' => 'Ver los pagos de paciente',
            'slug' => 'expedientes.showCuentas',
            'description' => 'Lista y navega todos las cuentas en el expedientes del sistema',
        ]);

        Permission::create([
            'name' => 'Ver citas del paciente',
            'slug' => 'expedientes.showCitas',
            'description' => 'ver en detalle cada cita en el expediente del sistema',
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


        //cuentas

        Permission::create([
            'name' => 'creacion de cuentas',
            'slug' => 'cuentas.create',
            'description' => 'Crear una cuenta de pacientes de la clinica',
        ]);


        Permission::create([
            'name' => 'Navegar Cuentas',
            'slug' => 'cuentas.index',
            'description' => 'Crear y navega las cuentas almacenadas ',
        ]);

        Permission::create([
            'name' => 'ver destalle de Cuentas',
            'slug' => 'cuentas.show',
            'description' => 'ver en detalle cada usuario del sistema',
        ]);

        Permission::create([
            'name' => 'editar de Cuentas',
            'slug' => 'cuentas.edit',
            'description' => 'Editar cualquier dato de usuario del sistema',
        ]);

        Permission::create([
            'name' => 'eliminar Cuentas',
            'slug' => 'cuentas.destroy',
            'description' => 'Eliminar una pago de la clinica',
        ]);


        //consulta pagos

        Permission::create([
            'name' => 'creacion de consulta de pago del paciente',
            'slug' => 'consultaPagos.create',
            'description' => 'Crear una consulta de los pagos con filtro de fecha',
        ]);

        Permission::create([
            'name' => 'Navegar consulta de pagos del paciente ',
            'slug' => 'consultaPagos.index',
            'description' => 'navega las consulta de pagos almacenadas filtrada por fechas ',
        ]);

        Permission::create([
            'name' => 'ver destalle de consulta de pagos del paciente',
            'slug' => 'consultaPagos.show',
            'description' => 'ver en detalle cada consulta de pago de la clinica filtrada por fechas',
        ]);

        Permission::create([
            'name' => 'eliminar consulta de Pagos ',
            'slug' => 'consultaPagos.destroy',
            'description' => 'Eliminar una consulta de pago de la clinica filtrada por fecha',
        ]);

         //consulta pagos pacientes

        

        Permission::create([
            'name' => 'Navegar historial de pagos de la clinica',
            'slug' => 'consultaPagoPaciente.index',
            'description' => 'navega las consulta de pagos almacenadas con filtracion de paciente ',
        ]);

        Permission::create([
            'name' => 'ver destalle de pagos por paciente ',
            'slug' => 'consultaPagoPaciente.show',
            'description' => 'ver en detalle la consulta de pago filtrada por pacientes',
        ]);

        Permission::create([
            'name' => 'eliminar consulta de Pago por paciente',
            'slug' => 'consultaPagoPaciente.destroy',
            'description' => 'Eliminar la consulta de pago filtrada por paciente',
        ]);


    }
}
