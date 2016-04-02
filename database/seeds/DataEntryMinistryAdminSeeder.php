<?php

use Illuminate\Database\Seeder;
use DB;
use Hash;

class DataEntryMinistryAdminSeeder extends Seeder
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
       		['omran','123456']

       	];

        for ($i = 1 ; $i <= 7; $i++) {

          foreach ($array as $value) {
            # code...
            foreach ($value as $values) {
              # code...
              DB::table('data_entry_ministry')->insert(
                  ['username' => $values[0], 'password' => Hash::make($values[1]) , 'type' => $i]
              );

            }
          }

        }
    }
}
