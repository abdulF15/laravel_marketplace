<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Market;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Category;
use illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Abdul Rojak',
            'username'=>'Rojak_SHOP',
            'email' => 'Abdul@gmail.com',
            'password'=>Hash::make('12345'),
            'remember_token' => Str::random(10)
        ]);
        User::create([
            'name' => 'Malih',
            'username'=>'Malih_SHOP',
            'email' => 'Malih@gmail.com',
            'password'=>Hash::make('12345'),
            'remember_token' => Str::random(10)
        ]);
        User::create([
            'name' => 'Sholeh',
            'username'=>'Sholeh_SHOP',
            'email' => 'sholeh@gmail.com',
            'password'=>Hash::make('12345'),
            'remember_token' => Str::random(10),
        ]);

        Category::create([
            'name'=>'Beauty',
            'slug'=>'beauty',
        ]);

        Category::create([
            'name'=>'Sport',
            'slug'=>'sport',
        ]);
        Category::create([
            'name'=>'Electronic',
            'slug'=>'electronic',
        ]);

        for ($i = 1; $i <= 20; $i++) {
            Market::create([
                'title' => 'Product ke'.$i,
                'desription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt excepturi nostrum laboriosam. Commodi ex corporis suscipit dignissimos, asperiores ratione alias blanditiis excepturi deserunt, ipsam, est explicabo incidunt! Exercitationem, necessitatibus sint!-' . $i,
                'category_id' => rand(1,3),
                'user_id' => rand(1,3), 
                'price' => rand(100, 500), 
            ]);
        }
        
    }
}
