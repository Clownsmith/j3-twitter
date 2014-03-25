<?php
//============================================================================
// @ mod_j3twitter
// # Chris Smith - 7/11/2013
// # Twitter Module for Joomla 3.2.x
//============================================================================
class modJ3TwitterHelper
{
	//======================================================================
	// # Fetch tweets
	//======================================================================
	public static function fetchTweets($limit = 5, $username = "", $oauth = "", $oauth_secret = "", $key = "", $key_secret="")
	{		$settings = array(			'oauth_access_token' => $oauth,			'oauth_access_token_secret' => $oauth_secret,			'consumer_key' => $key,			'consumer_secret' => $key_secret		);		$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';		$getfield = '?screen_name='. $username .'&count='. $limit;		$requestMethod = 'GET';		$twitter = new TwitterAPIExchange($settings);		$tweets = json_decode($twitter->setGetfield($getfield)->buildOauth($url, $requestMethod)->performRequest());
		return $tweets;
	}
}
?>