<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserTableSeeder::class);
         $this->call(PostTableSeeder::class);
         $this->call(PostHistoriesTableSeeder::class);
         $this->call(CommentTableSeeder::class);
         $this->call(TagsTableSeeder::class);
         $this->call(PostTagTableSeeder::class);

    }
}
