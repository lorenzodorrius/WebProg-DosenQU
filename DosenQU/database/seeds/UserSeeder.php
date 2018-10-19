<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //untuk mudahin codingan

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   //ketik DB terus nanti muncul suggestion atau ctrl+spasi
        $faker = Faker\Factory::create();
        for($i = 0 ; $i < 10 ; $i++){//buat ngeloop db
            DB::table('users')->insert([ //template untuk insert
                'name' => $faker->name,//str_random(16),
                'age' => rand(17,30),
                'address' => $faker->address//"BINUS Anggrek"
            ]);
        }
    }
}
