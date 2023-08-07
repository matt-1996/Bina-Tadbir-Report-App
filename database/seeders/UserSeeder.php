<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $name;
        for($i=1; $i<=200; $i++){
            $name = $i;
            // echo "The number is: $i <br>";
            DB::table('users')->insert([
                'name' => $i,
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('password'),
                'isAdmin' => 0,
                'address' => Str::random(10),
                'phone' => Str::random(10),
                'city' => Str::random(5),
                'description' => Str::random(10),
            ]);
        }
    }
}
