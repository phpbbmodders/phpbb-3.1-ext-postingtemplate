<?php
/**
*
* Posting Template [English]
*
* @package language Posting Template
* @copyright (c) 2014 RMcGirr83
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'FORUM_POST_TPL'					=> 'Posting template',
	'FORUM_POST_TPL_EXPLAIN'			=> 'The posting template is the text that appears in the textarea when starting a new topic in this forum. If you don’t wish to use it, just leave it blank.',	
));
