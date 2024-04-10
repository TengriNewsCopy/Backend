<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'News 1',
                'content' => 'Content 1',
                'image' => 'image1.jpg',
                'author' => [
                    'name' => 'Author 1',
                    'image' => 'author1.jpg',
                    'job_title' => 'Job Title 1'
                ],
                'views' => 100,
                'comments' => [
                    [
                        'name' => 'Commenter 1',
                        'comment' => 'Comment 1',
                        'published_at' => '2024-04-09 15:49:09'
                    ],
                    [
                        'name' => 'Commenter 2',
                        'comment' => 'Comment 2',
                        'published_at' => '2024-04-09 15:49:09'
                    ],
                ],
                'tags' => ['tag1', 'tag2'],
                'published_at' => '2024-04-09 15:49:09',
            ],
            [
                'title' => 'News 2',
                'content' => 'Content 2',
                'image' => 'image2.jpg',
                'author' => [
                    'name' => 'Author 2',
                    'image' => 'author2.jpg',
                    'job_title' => 'Job Title 2'
                ],
                'views' => 200,
                'comments' => [
                    [
                        'name' => 'Commenter 3',
                        'comment' => 'Comment 3',
                        'published_at' => '2024-04-09 15:49:09'
                    ],
                    [
                        'name' => 'Commenter 4',
                        'comment' => 'Comment 4',
                        'published_at' => '2024-04-09 15:49:09'
                    ],
                ],
                'tags' => ['tag3', 'tag4'],
                'published_at' => '2024-04-09 15:49:09',
            ],
            [
                'title' => 'News 3',
                'content' => 'Content 3',
                'image' => 'image3.jpg',
                'author' => [
                    'name' => 'Author 3',
                    'image' => 'author3.jpg',
                    'job_title' => 'Job Title 3'
                ],
                'views' => 300,
                'comments' => [
                    [
                        'name' => 'Commenter 5',
                        'comment' => 'Comment 5',
                        'published_at' => '2024-04-09 15:49:09'
                    ],
                    [
                        'name' => 'Commenter 6',
                        'comment' => 'Comment 6',
                        'published_at' => '2024-04-09 15:49:09'
                    ],
                ],
                'tags' => ['tag5', 'tag6'],
                'published_at' => '2024-04-09 15:49:09',
            ],
            [
                'title' => 'News 4',
                'content' => 'Content 4',
                'image' => 'image4.jpg',
                'author' => [
                    'name' => 'Author 4',
                    'image' => 'author4.jpg',
                    'job_title' => 'Job Title 4'
                ],
                'views' => 400,
                'comments' => [
                    [
                        'name' => 'Commenter 7',
                        'comment' => 'Comment 7',
                        'published_at' => '2024-04-09 15:49:09'
                    ],
                    [
                        'name' => 'Commenter 8',
                        'comment' => 'Comment 8',
                        'published_at' => '2024-04-09 15:49:09'
                    ],
                ],
                'tags' => ['tag7', 'tag8'],
                'published_at' => '2024-04-09 15:49:09',
            ],
            [
                'title' => 'News 5',
                'content' => 'Content 5',
                'image' => 'image5.jpg',
                'author' => [
                    'name' => 'Author 5',
                    'image' => 'author5.jpg',
                    'job_title' => 'Job Title 5'
                ],
                'views' => 500,
                'comments' => [
                    [
                        'name' => 'Commenter 9',
                        'comment' => 'Comment 9',
                        'published_at' => '2024-04-09 15:49:09'
                    ],
                    [
                        'name' => 'Commenter 10',
                        'comment' => 'Comment 10',
                        'published_at' => '2024-04-09 15:49:09'
                    ],
                ],
                'tags' => ['tag9', 'tag10'],
                'published_at' => '2024-04-09 15:49:09',
            ],
        ];

        foreach ($data as $news) {
            News::updateOrCreate(
                [
                    'title' => $news['title'],
                ],
                $news
            );
        }

    }
}
