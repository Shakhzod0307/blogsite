<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blogs')->insert([
            'title' => 'Praesent Auctor Justo',
            'description' => ' Et pulvinar pellentesque lectus urna luctus lorem a laoreet enim ligula vitae turpis curabitur ullamcorper arcu lobortis tempus ornare arcu elit dapibus ante at.',
            'images' => 'face23.jpg',
        ]);
        DB::table('blogs')->insert([
            'title' => 'Pharetra Libero Nisi',
            'description' => 'Vel diam maecenas mattis massa nec rutrum mattis leo felis posuere eros eget elementum tortor leo non enim praesent id metus in auctor enim a tortor nunc laoreet.',
            'images' => 'face6.jpg',
        ]);
        DB::table('blogs')->insert([
            'title' => 'Praesent Auctor Justo',
            'description' => 'Et pulvinar pellentesque lectus urna luctus lorem a laoreet enim ligula vitae turpis curabitur ullamcorper arcu lobortis tempus ornare arcu elit dapibus ante at.',
            'images' => 'face26.jpg',
        ]);
        DB::table('blogs')->insert([
            'title' => 'Pharetra Libero Nisi',
            'description' => 'Et pulvinar pellentesque lectus urna luctus lorem a laoreet enim ligula vitae turpis curabitur ullamcorper arcu lobortis tempus ornare arcu elit dapibus ante at.',
            'images' => 'circle.jpg',
        ]);
    }
}
