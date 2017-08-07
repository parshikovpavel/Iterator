<?php
require 'Post.php';
require 'ArrayIterator/PostCollection.php';

$collection = new PostCollection();

$post1 = new Post([
	'title' => 'Title1', 
	'content' => 'Content1',
	'publicationDate' => time()
]);

$post2 = new Post([
	'title' => 'Title2', 
	'content' => 'Content2',
	'publicationDate' => time()
]);
		
$post3 = new Post([
	'title' => 'Title3', 
	'content' => 'Content3',
	'publicationDate' => time()
]);

$collection->add($post1)
		->add($post2)
		->add($post3);

foreach($collection as $post) {
	echo (string)$post;
}
		
		