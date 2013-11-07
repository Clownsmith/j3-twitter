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
	{		$settings = array(			'oauth_access_token' => "87945234-nqNYshxTr1FqQCYdhuCeE1BVb4x1BmKWiBbRzmvAo",			'oauth_access_token_secret' => "hx0CQZk3VN4Siny4bKml62yK57OkwzunMPKBL6cddxk",			'consumer_key' => "K2I1AVfYiOtc5p5jnCghA",			'consumer_secret' => "FMdFxIfwbwU29GFMxiSek15AnD6n9Z332IUPpw7CdBc"		);		$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';		$getfield = '?screen_name='. $username .'&count='. $limit;		$requestMethod = 'GET';		$twitter = new TwitterAPIExchange($settings);		$tweets = json_decode($twitter->setGetfield($getfield)->buildOauth($url, $requestMethod)->performRequest());
		return $tweets;
	}
}
?>