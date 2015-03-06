<?php

include 'news.php';

class NewsTest extends PHPUnit_Framework_TestCase 

	private $news;


    public function testAdd($data) {

	$news = new News();
 
	$news->attach(new RSSObserver());
	$news->attach(new CacheObserver());
	$news->attach(new NewsletterObserver());
 
	$news->add(array(
    	'title' => 'HelloWorld',
    	'content' => 'How are you?'
	));
}