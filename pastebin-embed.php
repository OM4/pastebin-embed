<?php
/*
Plugin Name: Pastebin Embed
Plugin URI: http://om4.com.au/wordpress-plugins/
Description: Easily embed Pastebin.com snippets in WordPress. To use, simply paste the URL to a pastebin snippet on its own line on a WordPress post or page.
Version: 1.0.0
Author: OM4
Author URI: http://om4.com.au/
Text Domain: pastebin-embed
Git URI: https://github.com/OM4/pastebin-embed
Git Branch: release
License: GPLv2
*/

/*

   Copyright 2014 OM4 (email: info@om4.com.au    web: http://om4.com.au/)

   This program is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation; either version 2 of the License, or
   (at your option) any later version.

   This program is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU General Public License for more details.

   You should have received a copy of the GNU General Public License
   along with this program; if not, write to the Free Software
   Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


class OM4_Pastebin_Embed {

	public function __construct() {
		wp_embed_register_handler( 'pastebin', '#http://pastebin.com/([a-zA-Z0-9\-_]+)/?$#i', array( $this, 'embed_handler' ) );
	}

	public function embed_handler( $matches, $attr, $url, $rawattr ) {
		return sprintf( '<script src="http://pastebin.com/embed_js.php?i=%s"></script>', $matches[1] );
	}


}

global $om4_pasetbin_embed;
$om4_pasetbin_embed = new OM4_Pastebin_Embed();