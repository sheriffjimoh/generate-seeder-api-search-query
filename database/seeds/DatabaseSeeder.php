<?php
// namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Record;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(RecordsSeeder::class);

          for ($i=0; $i < 300; $i++) { 
	    	Record::create([
	            'firstname' => Str::random(8),
	            'lastname' => Str::random(8),
	            'email' => Str::random(12).'@mail.com',
	            'phone' =>'080'.rand(94855434,43233156)
	        ]);
    	}
    }
}




    