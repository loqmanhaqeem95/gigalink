<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $this->call('GigalinkAppSeeder');
        $this->command->info('Gigalink app seeds finished');
        // $this->call(UsersTableSeeder::class);
    }
}

class GigalinkAppSeeder extends Seeder {

   
}