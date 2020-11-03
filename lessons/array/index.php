<?php

class Post{

	public $title;
	public $published;

	public function __construct($title, $published)
	{
		$this->title = $title;
		$this->published = $published;

	}
}

$posts = [

	new Post('My first post', true),
	new Post('Narrative post', false),
	new Post('News post', true)

];

$pub = array_filter($posts, function($post)
{
	return $post->published;
}
);

$titles = array_column($posts, 'title');

var_dump($titles);