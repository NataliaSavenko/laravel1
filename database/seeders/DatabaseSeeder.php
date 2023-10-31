<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'admin',
             'email' => 'admin@test.com',
            'password'=>Hash::make('123'),
            'admin'=>true,
         ]);

         \App\Models\User::factory()->create([
            'name' => 'notadmin',
            'email' => 'notadmin@test.com',
           'password'=>Hash::make('123'),
           'admin'=>false,
        ]);


Category::factory(10)->has(Product::factory()->count(rand(5,20)))->create();


    }
}
