<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Tag;

class PostTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 100 ; $i++){
            $post = Post::inRandomOrder()->first();

            $tag = Tag::inRandomOrder()->first()->id;

            $post->tags()->attach($tag);
        }
    }
}
