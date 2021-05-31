<?php

/**
*  This is just a simple config file to store your web root and a few other items
*
*  Within your serving directory, `www` for example, place this file in `home/`. It is assumed home/ is a sibling to other serving subdirectories, like `sites`, `dev`, etc.
*  Add multiple directories like this:
*
*  $dir = array("/www/sites1/*","/www/sites2/*");
*/

/** root of this file **/
$projroot = dirname( $_SERVER['DOCUMENT_ROOT']);
/** directory name(s) */

$dir = array( $projroot."/sites/*");
$dir_served = array($projroot."/served/*");
$dir_dev = array($projroot."/dev/*");
/** Your local top level domain */
$tld = 'local';
/*
*  Icon file names you would like to display next to the link to each site.
*  In order of the priority they should be used.
*/
$icons = array( 'apple-touch-icon.png', 'favicon.png', 'favicon.ico' );
/*
*  Development tools you want displayed in the top navigation bar. Each item should be
*  an array containing keys 'name' and 'url'. An example is included (commented out) below.
*/
$devtools = array(
//	array( 'name' => 'Tool', 'url' => 'http://example.com/' ),
	array( 'name' => 'Bluehost', 'url' => 'https://my.bluehost.com/cgi/dm' ),
	array( 'name' => 'Bluehost Legacy Subdomains', 'url' => 'https://my.bluehost.com/cgi/dm/subdomain'),
	array( 'name' => 'Bootstrap', 'url' => 'https://getbootstrap.com/docs/4.2/getting-started/introduction/' ),
	array( 'name' => 'W3', 'url' => 'https://www.w3schools.com/' ),
	array( 'name' => 'schema', 'url' => 'https://schema.org/docs/gs.html' ),
	);
/*
*  Options for sites being displayed. These are completely optional, if you don't set
*  anything there are default options which will take over.
*  If you only want to specify a display name for a site you can use the format:
*  'sitedir' => 'Display Name',
*  Otherwise, if you want to set additional options you'll use an array for the options.
*  'sitedir' => array( 'displayname' => 'Display Name', 'adminurl' => 'http://example.sites.local/admin' ),
*/
$siteoptions = array( 'adminurl'
//  'dirname' => 'Display Name',
//	'dirname' => array( 'displayname' => 'DisplayName', 'adminurl' => 'http://something/admin' ),
);
/*
*  Directory names of sites you want to hide from the page. If you're using multiple directories
*  in $dir be aware that any directory names in the array below that show up in any of
*  your directories will be hidden.
*/
$hiddensites = array( 'home', );
