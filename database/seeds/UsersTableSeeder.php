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
        $faker = Faker\Factory::create();
        
        for($i=0; $i<10; $i++){
            DB::table('users')->insert([
            'name' => $faker->name,
            'email' => $faker->freeEmail,
            'password' => bcrypt('abc123'),
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
        ]);
        }
    }
}
