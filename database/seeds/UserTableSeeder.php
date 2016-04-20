<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      	DB::table('users')->insert([
            'name' => 'Joko Irianto',
            'email' => 'irianto94@outlook.com',
            'password' => bcrypt('superuser'),
            'group' => 'superuser',
        ]);

        DB::table('users')->insert([
            'name' => 'administrator',
            'email' => 'bemunair2016@gmail.com',
            'password' => bcrypt('jenengku2016'),
            'group' => 'administrator',
        ]);
    }
}
