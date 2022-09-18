<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i = 1 ; $i <= 10 ; $i++){
            Author::create([
                'name' => $faker->firstName,
                'surname'  => $faker->lastName,                
            ]);
        } 
    }
}
