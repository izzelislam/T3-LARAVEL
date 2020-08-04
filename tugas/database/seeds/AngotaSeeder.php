<?php

use Illuminate\Database\Seeder;
use App\Model\Anggota;
use Faker\Factory;

class AngotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Anggota::truncate();
        $this->command->getOutput()->progressStart(300);
        $faker=Factory::create('id_ID');
        for ($i=0; $i <300 ; $i++) { 
        	Anggota::create([
        		'nama'=>$faker->firstName.' '.$faker->lastName,
        		'no_anggota'=>$faker->nik,
        		'email'=>$faker->email,
        		'alamat'=>$faker->address,
        	]);
        $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();
    }
}
