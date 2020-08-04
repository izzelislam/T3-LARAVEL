<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buku')->truncate();
        $this->command->getOutput()->progressStart(1000);
        $faker=Factory::create('id_ID');
        for ($i=0; $i < 1000; $i++) { 
        	DB::table('buku')->insert([
        		'judul'=>$faker->sentence(4),
        		'penulis'=>$faker->name,
        		'penerbit'=>$faker->company,
        		'jumlah'=>rand(2,10),
        		'kondisi'=>$faker->randomElement(['baik','rusak']),
        	]);
        $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();
    }
}
