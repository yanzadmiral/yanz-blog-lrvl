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
        // $this->call(UsersTableSeeder::class);
        //factory(Yblog\Artikel::class, 10)->create();
        DB::table('users')->delete();
        $faker = Faker\Factory::create();
    	for ($i=0; $i <10 ; $i++) { 
    		$user = Yblog\User::create(array(
    			'id_user' => 'usr-'.$i,
    			'name'    => $faker->name,
    			'email'   => $faker->email,
    			'password'=> Hash::make('yayan')
    			));
    	}

     	//    DB::table('artikels')->delete();
    	// $faker = Faker\Factory::create();

    	// for ($i=01; $i <=10 ; $i++) { 
    	// 	$artikel = Yblog\Artikel::create(array(
    	// 		'artikel_id'=> 'Art-'.$i,  
    	// 		'user_id'=> rand(1,100),
    	// 		'title'  => $faker->text(140),
    	// 		'content'=> $faker->text(500)

    	// 	));
    	// }
    }
}
