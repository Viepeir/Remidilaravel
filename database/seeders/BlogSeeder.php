<?php

namespace Database\Seeders;

use App\Models\Blog;
use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blogs')->truncate();

        Blog::factory()
            ->count(30)
            ->create();

        // DB::table('blogs')->insert([
        //     'title' => 'blog 2',
        //     'description' => 'ini adalah description untuk blog 2',
        // ]);

        // DB::table('blogs')->insert([
        //     'title' => 'blog 3',
        //     'description' => 'ini adalah description untuk blog 3',
        // ]);

        // DB::table('blogs')->insert([
        //     'title' => 'blog 4',
        //     'description' => 'ini adalah description untuk blog 4',
        // ]);
    }
}
