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

       		['anik','123456',1],
       		['porimol','123456',2],
       		['apu','123456',3],
       		['nowfel','123456',4],
       		['omran','123456',5],
       		['arnob','123456',6],
       		['anirudda','123456',7]

       	];


       	foreach ($array as $value) {
       		# code...
       		foreach ($value as $values) {
       			# code...
				DB::table('superadmin')->insert(
				    ['username' => $values[0], 'password' => Hash::make($values[1])]
				);

       		}
       	}
    }
}
