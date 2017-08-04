<?php

use Illuminate\Database\Seeder;

class BreedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('breeds')->insert([
            ['id'=>2,'name' => 'Domestic'],
            ['id'=>3,'name' => 'Persian'],
            ['id'=>4,'name' => 'Siamese'],
        ]);
    }
}
