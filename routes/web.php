<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Fatih Fikry Oktavianto', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => '1',
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Fatih Fikry Oktavianto',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. '
        ],
        [
            'id' => '2',
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Fatih Fikry Oktavianto',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis labore consectetur vitae minima qui asperiores tenetur illum. Similique quisquam libero minima nemo fugit cupiditate est amet distinctio quidem odio. Quisquam. '
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => '1',
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Fatih Fikry Oktavianto',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. '
        ],
        [
            'id' => '2',
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Fatih Fikry Oktavianto',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis labore consectetur vitae minima qui asperiores tenetur illum. Similique quisquam libero minima nemo fugit cupiditate est amet distinctio quidem odio. Quisquam. '
        ]
    ];

    $post = Arr::first($posts, function($post) use ($slug){
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});