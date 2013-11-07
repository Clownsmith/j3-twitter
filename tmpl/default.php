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
	<?php
	
		$tweets = $helper->fetchTweets();
	
	?>
</div>