<?php

use Illuminate\Database\Seeder;
use App\Tag;
use Illuminate\Support\Str;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['Naruto', 'Kakashi', 'Sasuke', 'Sakura', 'Tsunade', 'Gaara', 'Madara', 'Minato'];

        foreach($data as $tag){
            $new_tag = new Tag();
            $new_tag->tag = $tag;
            $new_tag->slug = Str::slug($tag, '-');
            $new_tag->save();
        }
    }
}
