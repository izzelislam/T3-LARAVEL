<?php

use Illuminate\Database\Seeder;
use App\Model\Petugas;
use Faker\Factory;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Petugas::truncate();
        $this->command->getOutput()->progressStart(50);
        $faker=Factory::create('id_ID');
        for ($i=0; $i <50 ; $i++) { 
        	Petugas::create([
        		'nama'=>$faker->name,
        		'no_petugas'=>$faker->ean8,
        		'email'=>$faker->email,
        		'alamat'=>$faker->address,
        	]);
        $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();
    }
}
