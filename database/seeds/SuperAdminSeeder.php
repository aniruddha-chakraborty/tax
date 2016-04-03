<?php

use Illuminate\Database\Seeder;


class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	$array =  [

       		['anik','123456'],
       		['porimol','123456'],
       		['apu','123456'],
       		['nowfel','123456'],
       		['omran','123456'],
       		['arnob','123456'],
       		['anirudda','123456']

       	];


       	foreach ($array as $value) {
       		# code...
    				DB::table('superadmin')->insert(

    				    ['username' => $value[0], 'password' => Hash::make($value[1])]
    				
            );

       	}
    }
}
