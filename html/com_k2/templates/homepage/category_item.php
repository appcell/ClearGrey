<?php
/**
 * @version		$Id: category_item.php 1492 2012-02-22 17:40:09Z joomlaworks@gmail.com $
 * @package		K2
 * @author		JoomlaWorks http://www.joomlaworks.net
 * @copyright	Copyright (c) 2006 - 2012 JoomlaWorks Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

// Define default image size (do not change)
K2HelperUtilities::setDefaultImage($this->item, 'itemlist', $this->params);

?>

<!-- Start K2 Item Layout -->

		  <?php if($this->item->params->get('catItemTitle')): ?>
		  <tr>
		  <!-- Item title -->
		  <td class="catItemTitle">




			<?php if ($this->item->params->get('catItemTitleLinked')): ?>
				<a href="<?php echo $this->item->link; ?>">
				<?php echo $this->item->title; ?>
			</a>
			<?php else: ?>
			<?php echo $this->item->title; ?>
			<?php endif; ?>


				<?php if(isset($this->item->editLink)): ?>
				<!-- Item edit link -->
				<span class="paperItemEditLink">
					<a class="modal" rel="{handler:'iframe',size:{x:990,y:550}}" href="<?php echo $this->item->editLink; ?>">
						<?php echo JText::_('K2_EDIT_ITEM'); ?>
					</a>
				</span>
				<?php endif; ?>





		</div>

	  	<?php if($this->item->params->get('catItemFeaturedNotice') && $this->item->featured): ?>
	  	<!-- Featured flag -->
	  	<span>
		  	<sup>
		  		<?php echo JText::_('K2_FEATURED'); ?>
		  	</sup>
	  	</span>
	  	<?php endif; ?>
	  </td>
	</tr>
	  <?php endif; ?>
<!-- End K2 Item Layout -->
