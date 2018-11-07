<?php

use Illuminate\Database\Seeder;
use App\Post_type;

class Post_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pt = new Post_type();
        $pt->type_name = "Post";
        $pt->description = "A single post in the blog system, use this if you just want to add a single segmented post.";
        $pt->save();

        $pg = new Post_type();
        $pg->type_name = "Page";
        $pg->description = "A full page post in the blog system, use this if you just want to add a new page";
        $pg->save();
    }
}
