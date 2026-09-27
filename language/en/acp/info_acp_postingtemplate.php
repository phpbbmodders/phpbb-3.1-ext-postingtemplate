<?php
/**
 *
 * Posting Template extension for the phpBB Forum Software package
 *
 * @author RMcGirr83 (Rich McGirr)
 * @copyright (c) 2014 phpbbmodders.net
 * @copyright (c) 2026, phpBB Modders, https://www.phpbbmodders.com/
 * @license GNU General Public License, version 2 (GPL-2.0)
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
