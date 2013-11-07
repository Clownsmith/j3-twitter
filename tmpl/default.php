<?php
//============================================================================
// @ mod_j3twitter
// # Chris Smith - 7/11/2013
// # Twitter Module for Joomla 3.2.x
//============================================================================
// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<div class="j3-twitter">
	<?php		$tweet_num = $params->get('tweet_num');		$username = $params->get('username');		$oauth = $params->get('token');		$oauth_secret = $params->get('token_secret');		$key = $params->get('key');		$key_secret = $params->get('key_secret');		
		$tweets = $helper->fetchTweets($tweet_num, $username, $oauth, $oauth_secret, $key, $key_secret);				foreach ($tweets as $key => $tweet)		{ ?>			<?php							$text = Twitter_Autolink::create($tweet->text, true)->addLinks();						?>			<div class="tweet tweet-<?php echo $key; ?>">				<div class="tweet-text"><?php echo $text; ?></div>				<div class="tweet-date"><?php echo date('g:ia - jS M Y', strtotime($tweet->created_at)); ?></div>			</div>	<?php			}		
	?>
</div>