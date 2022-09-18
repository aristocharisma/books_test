<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Author;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
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
            Book::create([
                'name' => $faker->firstName,
                'author'  => $faker->lastName,  
                'co_author'  => $faker->lastName,                
              
            ]);
        } 
    }
}
