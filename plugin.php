<?php
/*
Plugin Name: ShortURL exists?
Plugin URI: https://github.com/s22-tech/
Description: Custom API action to see if shorturl exists
Version: 1.1
Author: s22_tech
Author URI: https://github.com/s22-tech/
Date: 2021-01-03
Based On: https://github.com/YOURLS/API-action
Returns: json string
*/

// Define custom action.
yourls_add_filter( 'api_action_locate_shorturl', 's22_locate_shorturl' );

function s22_locate_shorturl () {
	// Need 'shorturl' parameter.
	if ( !isset( $_REQUEST['keyword'] ) ) {
		return array(
			'statusCode' => 400,
			'simple'     => "Need a 'shorturl' parameter",
			'message'    => 'error: missing param',
		);
	}

	$shorturl = $_REQUEST['keyword'];

	// Check for valid shorturl.
	if ( yourls_is_shorturl( $shorturl ) ) {
		return array(
			'statusCode' => 200,
			'simple '    => 'Success: short URL exists!',
			'message'    => 'keyword found',
		);
	}
	else {
		return array(
			'statusCode' => 404,
			'simple '    => 'Error: short URL not found',
			'message'    => 'error: not found',
		);
	}
}

/*

Example URL:
https://example.com/yourls-api.php?username=admin&password=xxxx&action=locate_shorturl&keyword=abc101&format=json

Explanation:
The 1st part of yourls_add_filter() is the api action to take.  In this case, it creates the "locate_shorturl" action.

Breakdown:
api        - tells us it's an api
action     - sets up the "action=" parameter key
locate_url - is the "action=" parameter value


The 2nd part of yourls_add_filter() is the function to call when using the api.

Without "format=json" in the URL, yourls returns an XML result.

*/
