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

        $this->call([
            UsersTableSeeder::class,
            RestuarantsTableSeeder::class,
            ReviewsTableSeeder::class,
        ]);

        $this->command->info('data seeded successfully!');
        
        Model::reguard();
    }

}
