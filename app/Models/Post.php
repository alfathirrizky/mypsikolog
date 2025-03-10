<?php

Namespace App\Models;
use Illuminate\Support\Arr;
class Post{
    public static function all(){
        return [
            [
                'id' => '1',
                'title' => 'Noteworthy technology acquisitions 2021',
                'body' => 'Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.'
            ],
            [
                'id' => '2',
                'title' => 'Noteworthy technology acquisitions 2021',
                'body' => 'Join us for a transformative event dedicated to raising awareness about mental health. This gathering aims to foster understanding, reduce stigma, and promote well-being through engaging discussions, expert talks, and interactive activities. Attendees will have the opportunity to learn about coping strategies, mindfulness practices, and the importance of mental health in daily life. We encourage open conversations about mental wellness, providing a safe space for individuals to share their experiences and find support. Together, we can create a healthier, more empathetic community. Don’t miss out on this important opportunity to make a difference!'
            ],
            [
                'id' => '3',
                'title' => 'Noteworthy technology acquisitions 2021',
                'body' => 'Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.'
            ],
            [
                'id' => '4',
                'title' => 'Noteworthy technology acquisitions 2021',
                'body' => 'Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.'
            ],
            [
                'id' => '5',
                'title' => 'Noteworthy technology acquisitions 2021',
                'body' => 'Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.'
            ],
        ];
    }
    public static function find($id) :array{
        // return Arr::first(static::all(), function ($post) use ($id) {
        //     return $post['id'] == $id;
        // });

        // return Arr::first(static::all(),fn($post)=>$post['id'] == $id);
        $post = Arr::first(static::all(),fn($post)=>$post['id'] == $id);
        if (! $post) {
            abort(404);
        }
        return $post;
    }
}