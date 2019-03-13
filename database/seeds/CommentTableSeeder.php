<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Post;
use App\Models\Comment;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::select('id')->first();
        $post = Post::select('id')->first();
        Comment::insert([
            'user_id' => $user->id,
            'post_id' => $post->id,
            'comment' => 'Test comment'
        ]);
    }
}
