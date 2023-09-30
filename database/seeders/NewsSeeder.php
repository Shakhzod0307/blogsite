<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->insert([
            'title' => 'Hendrerit Venenatis',
            'description' => 'Malesuada ut eleifend sed odio class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos pellentesque ut est vitae orci ultrices posuere cras ornare arcu vivamus a leo vestibulum venenatis erat non arcu proin risus tellus bibendum.',
            'category' => 'weather',
            'updated_time'=> '04 April 2045'

        ]);
        DB::table('news')->insert([
            'title' => 'Sed Volutpat Sit Amet',
            'description' => 'Ultrices vitae ante fusce tellus quam placerat id bibendum eget pharetra at velit maecenas ut eros vel tortor viverra auctor phasellus ligula mauris erat suspendisse vitae sapien eu mi placerat tincidunt proin semper lorem in urna vivamus suscipit est vitae nisi.',
            'category' => 'crime',
            'updated_time'=>'04 March 2045'

        ]);
        DB::table('news')->insert([
            'title' => 'Hendrerit Venenatis',
            'description' => 'Malesuada ut eleifend sed odio class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos pellentesque ut est vitae orci ultrices posuere cras ornare arcu vivamus a leo vestibulum venenatis erat non arcu proin risus tellus bibendum.',
            'category' => 'weather',
            'updated_time'=> '25 April 2022'

        ]);
    }
}
