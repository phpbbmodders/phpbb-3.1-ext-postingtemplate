<?php
/**
*
* @package Posting Template
* @copyright (c) 2014 RMcGirr83
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace phpbbmodders\postingtemplate\migrations;

class install_postingtemplate extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['posting_template_version']) && version_compare($this->config['posting_template_version'], '1.0.0', '>=');
	}

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\dev');
	}

	public function update_schema()
	{
		return array(
			'add_columns'	=> array(
				$this->table_prefix . 'forums'	=> array(
					'forum_post_tpl'	=> array('TEXT', ''),
				),
			),
		);
	}

	public function update_data()
	{
		return array(
			array('config.add', array('posting_template_version', '1.0.0')),
		);
	}

	public function revert_schema()
	{
		return array(
			'drop_columns'	=> array(
				$this->table_prefix . 'forums'	=>array(
					'forum_post_tpl',
				),
			),
		);
	}

	public function revert_data()
	{
		return array(
			array('config.remove', array('posting_template_version')),
		);
	}
}
