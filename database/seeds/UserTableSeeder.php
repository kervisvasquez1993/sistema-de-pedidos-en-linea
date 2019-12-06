<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
       'name' => 'kervis19931005',
        'email' => 'kervisvasquez244@gmail.com',
        'password' => bcrypt('Kervisvasquez1993')
        ]);
    }
}
