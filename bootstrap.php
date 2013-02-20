<?php

Autoloader::add_core_namespace( 'Social' );


Autoloader::add_classes( array(

	'Social\\Twitter'		=> __DIR__.'/classes/twitter.php',
	'Social\\TwitterOAuth'	=> __DIR__.'/vendor/twitter/twitteroauth.php',

	'Social\\Fb'			=> __DIR__.'/classes/fb.php',
	'Social\\Facebook'		=> __DIR__.'/vendor/facebook/facebook.php',
	'Social\\BaseFacebook'	=> __DIR__.'/vendor/facebook/base_facebook.php'


));