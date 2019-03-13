<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\PostHistory;
class PostHistoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = Post::select('id')->first();
        PostHistory::insert([
            [
                'post_id' => $post->id,
                'title' => 'test_title_1',
                'content' => 'test_content_1',
                'status' => '0',
                'thumbnail' => 'test_1.png',
            ],
            [
                'post_id' => $post->id,
                'title' => 'test_title',
                'content' => 'test_content',
                'status' => '1',
                'thumbnail' => 'test.png',
            ]
        ]);
    }
}
