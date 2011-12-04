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

if (elgg_is_active_plugin('tag_cumulus')){

	echo "<h3>" . elgg_echo('tags') . "</h3>";
	echo display_tag_cumulus(0,50,'tags','object','market','','');

}

