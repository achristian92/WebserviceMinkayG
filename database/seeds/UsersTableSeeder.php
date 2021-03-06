<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        'name' => "Administrador",
        'apellidos' => "Minky",
        'telefono' => "123456",
        'email' => "sistemas@minkay.com.pe",
        'password' => bcrypt('123456'),
        'accesoWeb' => "1",
        'accesoApp' => "1",
        'remember_token' => str_random(10),
        ]);
    }
}
