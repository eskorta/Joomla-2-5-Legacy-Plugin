<?php
defined('JPATH_BASE') or die;
defined('_JEXEC') or die('Restricted access');

jimport('joomla.plugin.plugin');

if(!defined('DS')){
    define('DS',DIRECTORY_SEPARATOR);
}

Class JController extends JControllerLegacy{ }
Class JModel extends JModelLegacy{ }
/*
Class JFTP extends JClientFtp{ }
Class JLDAP extends JClientLdap{ }
*/
Class JWebClient extends JApplicationWebClient{ }
Class JView extends JViewLegacy{ }
jimport('joomla.filesystem.folder');
jimport('joomla.filesystem.files');

class plgSystemj25legacy extends JPlugin
 {
      /**
	 * Constructor
	 *
	 * @access	protected
	 * @param	object	$subject The object to observe
	 * @param 	array   $config  An array that holds the plugin configuration
	 * @since	1.0
	 */
	function plgSystemj25legacy( &$subject, $config )
	{
		parent::__construct( $subject, $config );
	}

}

?>
