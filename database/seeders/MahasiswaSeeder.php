<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;	

class MahasiswaSeeder extends Seeder
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
		 
	    		DB::table('mahasiswa')->insert([
	    			'nama' => $faker->name,
	    			'nim' => $faker->randomNumber(5, true),
	    			'tanggal_lahir' => $faker->dateTime,
	    			'alamat' => $faker->address,
	    			'tahun_masuk' => $faker->dateTime,
	    			'create_at' => $faker->dateTime,
	    			'update_at' => $faker->dateTime
		       	]);
		}
	}
}
