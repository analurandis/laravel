<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
    	$faker = Faker\Factory::create();
    	for($i=0;$i<=50;$i++){

    		DB::table('posts')->insert([
            
        	'title'=> $faker->sentence(4,true),
        	'is_private'=>$faker->numberBetween(0,1),
        	'content'=>$faker->realText(),
        	'tag'=>$faker->word,
        	'created_at' => date("Y-m-d H:i:s"),
        	'created_at' => date("Y-m-d H:i:s")

        	]);

    	}

        
    }
}
