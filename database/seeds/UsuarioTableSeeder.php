<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->insert([
            'cedula' => '1095840005',
            'nombre' => 'Jairo Salazar',
            'username' => 'jsv1280',
            'correo' => 'jsv1280@gmail.com',
            'pass' => bcrypt('password'),
            'telefono' => '12345',
            'idGenero' => 1
        ]);
    }
}
