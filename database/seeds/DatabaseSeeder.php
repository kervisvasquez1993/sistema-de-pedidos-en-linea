<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
         // php artisan db_seed --> para poblar la base de datos con los seeder


    }
}
