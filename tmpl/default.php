<?php
//============================================================================
// @ mod_j3twitter// @license		GNU/GPL
// # Chris Smith - 7/11/2013
// # Twitter Module for Joomla 3.2.x
//============================================================================
// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<div class="j3-twitter">
	<?php				foreach ($tweets as $key => $tweet)		{ ?>			<?php								$text = preg_replace("/\\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|]/i", "<a href=\"\\0\" target=\"_blank\">\\0</a>", $tweet->text);				$text = preg_replace("/@(\w+)/i", "<a href=\"http://twitter.com/$1\" target=\"_blank\">$0</a>", $text);				$text = preg_replace("/#(\w+)/i", "<a href=\"http://twitter.com/search?q=$1\" target=\"_blank\">$0</a>", $text);						?>			<div class="tweet tweet-<?php echo $key; ?>">				<div class="tweet-text"><?php echo $text; ?></div>				<div class="tweet-date"><?php echo date('g:ia - jS M Y', strtotime($tweet->created_at)); ?></div>			</div>	<?php			}		
	?>
</div>