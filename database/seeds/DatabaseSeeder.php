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
        
        $faker = Faker\Factory::create('id_ID');
     
     		DB::table('artikeltags')->delete();
     		DB::table('artikels')->delete(); 
     		DB::table('users')->delete();
         	DB::table('tags')->delete();
        	

    	for ($i=0; $i <10 ; $i++) { 
    		$user = Yblog\User::create(array(
    			'id_user' => 'usr-'.$i,
    			'name'    => $faker->name,
    			'email'   => $faker->email,
    			'password'=> Hash::make('yayan')
    			));
    	}

    	for ($i=0; $i <10 ; $i++) {
    		$artikel = Yblog\Artikel::create(array(
    		'id_artikel'=> 'art-'.$i,
    		'id_user'   =>  Yblog\User::OrderByRaw('rand()')->first()->id_user,
    		'title'     => $faker->text(30),
    		'content'   => $faker->text(200)
    			));
    	}



        for ($i=0; $i <10 ; $i++) { 
        	$tag = Yblog\Tag::create(array(
        		'id_tag' => $i,
        		'nama_tag' => $faker->tld, 
        		));
        }

        for ($i=0; $i <25 ; $i++) { 
        	$artikeltag = Yblog\Artikeltags::create(array(
        		'id_artikel'=> Yblog\Artikel::OrderByRaw('rand()')->first()->id_artikel,
        		'id_tag'    => Yblog\Tag::OrderByRaw('rand()')->first()->id_tag
        		));
        }
    }
}
