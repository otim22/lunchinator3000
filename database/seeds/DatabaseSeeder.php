<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Register the user seeder
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // Register the user seeder
        $this->call('UsersTableSeeder');
        
        Model::reguard();
    }

}
