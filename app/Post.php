<?php

namespace App;

use Corcel\Post as Corcel;

class Post extends Corcel{
    protected $connection = 'wordpress';
    public static function posts_blog(){
        $posts = self::orderBy('id', 'DESC')->type("post")->status('publish')->take(3)->get();
        foreach ($posts as $post) {
            $wp_post[] = array('titulo' => $post->post_title,'texto' => $post->post_content,
                'foto' => str_replace(".jpg",'-250x187.jpg',$post->thumbnail->attachment->guid),'link' => $post->guid);
        }
        return $wp_post;
    }
}