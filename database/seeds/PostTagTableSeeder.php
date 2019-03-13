<?php

use Illuminate\Database\Seeder;
use App\Models\Tag;
use App\Models\Post;
class PostTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = Tag::select('id')->first();
        $post = Post::select('id')->first();
        $post->tags()->sync([$tag->id]);
    }
}
