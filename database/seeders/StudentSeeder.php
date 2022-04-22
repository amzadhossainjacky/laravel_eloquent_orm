<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        // DB::table('students')->insert([
        //     'name' => 'Jamal',
        //     'email' => 'jamal@gmail.com',
        //     'password' => Hash::make('jamal123')
        // ]);

        // DB::table('students')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => Hash::make(Str::random(10))
        // ]);

        // foreach (Range(1, 10) as $value) {
        //     DB::table('students')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => Hash::make(Str::random(10))
        //     ]);
        // }


        //using faker

        $faker = Faker::create();
        foreach (Range(1, 100) as $value) {
            DB::table('students')->insert([
                'name' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'password' =>Hash::make($faker->password())
            ]);
        }

    }
}
