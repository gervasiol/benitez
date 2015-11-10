<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('clientes')->insert([
            'nombre'=>str_random(10),
            'apellido'=>str_random(10),
            'cuil'=>str_random(10)
            ]);

        // $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}
