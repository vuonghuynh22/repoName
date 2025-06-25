<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Getting Started with Laravel',
                'content' => 'Laravel is a powerful PHP framework that makes web development enjoyable and creative.',
                'author' => 'John Doe',
                'published' => true,
            ],
            [
                'title' => 'Understanding Keploy Testing',
                'content' => 'Keploy is an innovative testing tool that captures and replays API interactions.',
                'author' => 'Jane Smith',
                'published' => true,
            ],
            [
                'title' => 'Draft Post About PHP 8.3',
                'content' => 'This is a draft post about the new features in PHP 8.3.',
                'author' => 'Bob Wilson',
                'published' => false,
            ],
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
