<?php
/**
 * @version		$Id: breadcrumbs.php 1492 2012-02-22 17:40:09Z joomlaworks@gmail.com $
 * @package		K2
 * @author		JoomlaWorks http://www.joomlaworks.net
 * @copyright	Copyright (c) 2006 - 2012 JoomlaWorks Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

?>

<div id="k2ModuleBox<?php echo $module->id; ?>" class="k2BreadcrumbsBlock<?php if($params->get('moduleclass_sfx')) echo ' '.$params->get('moduleclass_sfx'); ?>">
	<?php
	$output = '';
	if ($params->get('home')) {
		$output .= '<span class="breadorigin breadtitle"><a href="'.JURI::root().'">'.$params->get('home',JText::_('K2_HOME')).'</a></span>';
		if (count($path)) {
			foreach ($path as $link) {
				$output .= '<span class="breadseparater"></span>'.'<span class="breadtitle">'.$link.'</span>';
			}
		}
		if($title){
			$output .= '<span class="breadseparater"></span>'.'<span class="breadtitle">'.$title.'</span>';
		}
	} else {
		if($title){
			$output .= '<span class="breadorigin"></span>';
		}
		if (count($path)) {
			foreach ($path as $link) {
				$output .= '<span class="breadtitle">'.$link.'</span>'.'<span class="breadseparater"></span>';
			}
		}
		$output .= '<span class="breadtitle">'.$title.'</span>';
	}

	echo $output;
	?>
</div>
