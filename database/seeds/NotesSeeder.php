<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class NotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 100; $i++) {
            \DB::table('notes')->insert(array(
                'title' => $faker->sentence(2, true),
                'content'=> $faker->paragraph(),
                'category_id' => $faker->randomElement([
                    '1', '2', '3', '4', '5'
                ]),
                'user_id' => $faker->randomElement([1, 2, 3, 4, 5]),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ));
        }
    }
}
