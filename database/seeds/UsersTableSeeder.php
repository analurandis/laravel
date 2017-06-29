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
    	for($i=0;$i<=20;$i++){

    		DB::table('users')->insert([
        	'name'=> $faker->sentence(2,true),
        	'email'=>$faker->sentence(1,true)'@gmail.com',
        	'password'=>$faker->sentence('secret'),
        	'about'=>$faker->sentence(2,true),
        	'created_at' => date("Y-m-d H:i:s"),
        	'created_at' => date("Y-m-d H:i:s")

        	]);

    	}
    }
}
