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

$marketcategories = string_to_tag_array(elgg_get_plugin_setting('market_categories', 'market'));
	
if ($marketcategories) {
	if (!is_array($marketcategories)){
		$marketcategories = array($marketcategories);
	}		

	echo "<ul>";
	$baseurl = elgg_get_site_url() . "market/category/";
	foreach($marketcategories as $category) {
		$active_category = elgg_get_entities_from_metadata(array(
		'type' => 'object',
		'subtype' => 'market',
		'metadata_name' => 'marketcategory',
		'metadata_value' => $category,
		'limit' =>'1'
		));
		
		if ($active_category > 0){
			$catlink .= "<li><a href='{$baseurl}" . urlencode($category) . "'>" . elgg_echo($category) . "</a></li>";
		}
	}
	if (elgg_get_plugin_setting('market_allowauctions', 'market') == 'yes') {
		$catlink .= "<li><a href='{$baseurl}" . urlencode('market:auction') . "'>" . elgg_echo('market:auction') . "</a></li>";
	}
	
	if (!empty($catlink)) echo "<ul>{$catlink}</ul>";
	echo "</ul>";
}

