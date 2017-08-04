<?php

use Illuminate\Database\Seeder;

class CatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cats')->insert([
            ['id'=>1,'name' => 'Katy','date_of_birth'=>'2016-07-11','breed_id' =>1],
            ['id'=>2,'name' => 'Puts','date_of_birth'=>'2016-08-11','breed_id' =>1],
            ['id'=>3,'name' => 'Retty','date_of_birth'=>'2016-09-11','breed_id' =>2],
            ['id'=>4,'name' => 'Betty','date_of_birth'=>'2016-05-11','breed_id' =>3],
            ['id'=>5,'name' => 'Fens','date_of_birth'=>'2016-04-11','breed_id' =>4],
            ['id'=>6,'name' => 'Blacky','date_of_birth'=>'2016-03-11','breed_id' =>2],
            ['id'=>7,'name' => 'Snow','date_of_birth'=>'2016-01-11','breed_id' =>1],
        ]);
    }
}
