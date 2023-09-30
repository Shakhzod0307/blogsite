<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Shakhzod',
            'last_name' => 'Rashidov',
            'email' => 'shakhzodrashidov@gmail.com',
            'role' => 'admin',
            'image'=>'01.jpg',
            'gender'=>'male',
            'mobile'=>'998933229074',
            'address'=>'Tashkent',
            'bio'=>"The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
                    as opposed to using 'Content here, content here', making it look like readable English. Many desktop
                    publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search
                    for 'lorem ipsum' will uncover many web sites still in their infancy",
            'password' => Hash::make('admin123'),
        ]);
        DB::table('users')->insert([
            'name' => 'Sarvar',
            'email' => 'sarvar007@gmail.com',
            'role' => 'user',
            'image' => '01.jpg',
            'mobile'=>'998906369074',
            'password' => Hash::make('admin123'),
        ]);
    }
}
