<?php

function linkify($tweet) {
	$tweet = linkify_links($tweet);
	$tweet = linkify_usernames($tweet);

	return $tweet;
}

function linkify_usernames($tweet) {
  return preg_replace_callback(
    '#@(\w+?)(?: |$)#',
    function ($matches) {
      return '<a href="https://twitter.com/'.$matches[1].'">'.$matches[0].'</a>';
    },
    $tweet);
}

function linkify_links($tweet) {
  return preg_replace_callback(
    '#\b(([\w-]+://?|www[.])[^\s()<>]+(?:\([\w\d]+\)|([^[:punct:]\s]|/)))#iS',
    function ($matches) {
      return '<a href="'.$matches[0].'">'.$matches[0].'</a>';
    },
    $tweet);
}