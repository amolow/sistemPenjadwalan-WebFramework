<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;	

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create('id_ID');
 
		for($i = 1; $i <= 5; $i++){
		 
	    		DB::table('dosen')->insert([
	    			'nama' => $faker->name,
	    			'nidn' => $faker->randomNumber(5, true),
	    			'alamat' => $faker->address,
	    			'kontak' => $faker->phoneNumber,
	    			'create_at' => $faker->dateTime,
	    			'update_at' => $faker->dateTime
		       	]);
		}
	}
}
