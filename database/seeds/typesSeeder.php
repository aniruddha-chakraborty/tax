<?php

use Illuminate\Database\Seeder;
use DB;

class typesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [

        	'rajuk',
        	'brtc',
        	'police',
        	'visa',
        	'passport',
        	'business',
        	'election'
        ];
    
         foreach ($types as $value) {
         	# code...
				DB::table('types')->insert(
				    ['ministry_name' => $values]
				);
         }
    }
}
