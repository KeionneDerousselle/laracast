<?php

class POST
{
    public $title;
    public $published;

    public function __construct($title, $published)
    {
        $this->title = $title;
        $this->published = $published;
    }
}

$posts = [
    new Post('My First Post', false),
    new Post('My Second Post', true),
    new Post('My Third Post', false),
    new Post('My Fourth Post', true)
];

$unpublishedPosts = array_filter(
    $posts,
    function ($post) {
        return !$post->published;
    }
);
var_dump($unpublishedPosts);

$publishedPosts = array_filter(
    $posts,
    function ($post) {
        return $post->published;
    }
);
var_dump($publishedPosts);

$modified = array_map(function ($post) {
    $post->published = true;
    return $post;
}, $posts);
var_dump($modified);

$titles = array_map(function ($post) {
    return $post->title;
}, $posts);
var_dump($titles);

$titlesAgain= array_column($posts, 'title');
var_dump($titlesAgain);
