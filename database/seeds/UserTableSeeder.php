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
        App\User::create([
            'name' => 'Modion Communications',
            'email' => 'modioncommunications.com',
            'password' => bcrypt('@Mrmodion2021'),
            'description' => 'Nigerias leading public relations and marketing communications agency.',
        ]);
    }
}
