<?php

use Illuminate\Database\Seeder;
use App\Record;
class RecordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            for ($i=0; $i < 300; $i++) { 
	    	Record::create([
	            'firstname' => str_random(8),
	            'lastname' => str_random(8),
	            'email' => str_random(12).'@mail.com',
	            'phone' =>'080'.rand(94855434,43233156)
	        ]);
    	}
    }
}
