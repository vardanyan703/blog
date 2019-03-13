<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Post;
class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::select('id')->first();
        Post::insert([
            'user_id' => $user->id,
            'slug' => 'test_slug',
        ]);
    }
}
