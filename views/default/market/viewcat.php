<?php
/**
 * Elgg Market Plugin
 * @package market
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author slyhne
 * @copyright slyhne 2010-2011
 * @link www.zurf.dk/elgg
 * @version 1.8
 */

$linkstr = '';
if (isset($vars['entity']) && $vars['entity'] instanceof ElggEntity) {
		
	$marketcategories = $vars['entity']->universal_marketcategories;
	if (!empty($marketcategories)) {
		if (!is_array($marketcategories)) $marketcategories = array($marketcategories);
		foreach($marketcategories as $category) {
			$link = $vars['url'] . 'search?tagtype=universal_marketcategories&tag=' . urlencode($category);
			if (!empty($linkstr)) $linkstr .= ', ';
			$linkstr .= '<a href="'.$link.'">' . elgg_echo($category) . '</a>';
		}
	}
}
echo $linkstr;

