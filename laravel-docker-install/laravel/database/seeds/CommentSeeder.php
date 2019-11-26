<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Post::class, 50)->make()->each(function ($comment){
            $comment->user_id = User::inRandomOrder()->first()->id;
            $comment->save();
        });
    }
}
