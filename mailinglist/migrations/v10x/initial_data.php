<?php
/**
* Mailing List extension for the phpBB Forum Software package.
*
* @copyright (c) 2015 DavidIQ.com
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace davidiq\mailinglist\migrations\v10x;

/**
* Migration stage 1: Initial data changes to the database
*/
class initial_data extends \phpbb\db\migration\migration
{
	/**
	* Add Mailing List data to the database.
	*
	* @return array Array of table data
	* @access public
	*/
	public function update_data()
	{
		return array(
			array('config.add', array('mailinglist_email', '')),
			array('config.add', array('mailinglist_post_type', 1)),
			array('config.add', array('mailinglist_include_contents', false)),
			array('config.add', array('mailinglist_unsubscribe', '')),
			array('config.add', array('mailinglist_listeneremail', '')),
		);
	}
}
