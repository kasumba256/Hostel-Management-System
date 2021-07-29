<?php

namespace Database\Seeders;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;





class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       Eloquent::unguard();
       $this->{'UsersTableSeeder'};
    }
}
