<?php 

/**
 * This file is part of the Zendesk package.
 * 
 * (c) Marc Witteveen <marc.witteveen@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MarcWitteveen\Zendesk;

/**
 * A simple php wrapper for Zendesk.
 */
class Zendesk {

	/**
	 * Render Zendesk chat widget
	 * @param string $key Zendesk key, available in widget section
	 * @param boolean $enabled If set to true then output the chat widget
	 * @return string The generated HTML code
	 */
	public static function widget($key = "", $enabled = false)
	{
		$output = "<!-- Start of Zendesk Widget script -->\r\n";
		$output .= sprintf("<script id='ze-snippet' src='%s'></script>\r\n", $key);
		$output .= "<!-- End of Zendesk Widget script -->\r\n";

		if (!empty($key) && $enabled) {
			echo $output;
		}
	}
}