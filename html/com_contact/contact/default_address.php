<?php

/**
 * @package		Joomla.Site
 * @subpackage	com_contact
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

/* marker_class: Class based on the selection of text, none, or icons
 * jicon-text, jicon-none, jicon-icon
 */
?>
<?php if (($this->params->get('address_check') > 0) &&  ($this->contact->address || $this->contact->suburb  || $this->contact->state || $this->contact->country || $this->contact->postcode)) : ?>

	<?php if ($this->params->get('address_check') > 0) : ?>
		<span class="<?php echo $this->params->get('marker_class'); ?>" >
			<?php echo $this->params->get('marker_address'); ?>
		</span>
		<address>
	<?php endif; ?>

	<?php if ($this->contact->address && $this->params->get('show_street_address')) : ?>
	<tr>
	<td class="contact-title">
		<?php echo JText::_('COM_CONTACT_ADDRESS'); ?>
	</td>
	<td>
		<span class="contact-street">
			<?php echo nl2br($this->contact->address); ?>
		</span>
	</td>
	</tr>
	<?php endif; ?>

	<?php if ($this->contact->suburb && $this->params->get('show_suburb')) : ?>
	<tr>
	<td class="contact-title">
		<?php echo JText::_('COM_CONTACT_SUBURB'); ?>
	</td>
		<span class="contact-suburb">
			<?php echo $this->contact->suburb; ?>
		</span>
	</td>
	</tr>
	<?php endif; ?>

	<?php if ($this->contact->state && $this->params->get('show_state')) : ?>
	<tr>
	<td class="contact-title">
		<?php echo JText::_('COM_CONTACT_STATE'); ?>
	</td>
	<td>
		<span class="contact-state">
			<?php echo $this->contact->state; ?>
		</span>
	</td>
	</tr>
	<?php endif; ?>
	<?php if ($this->contact->postcode && $this->params->get('show_postcode')) : ?>
	<tr>
	<td class="contact-title">
		<?php echo JText::_('COM_CONTACT_POSTCODE'); ?>
	</td>
	<td>
		<span class="contact-postcode">
			<?php echo $this->contact->postcode; ?>
		</span>
	</td>
	</tr>
	<?php endif; ?>


	<?php if ($this->contact->country && $this->params->get('show_country')) : ?>
	<tr>
	<td class="contact-title">
		<?php echo JText::_('COM_CONTACT_COUNTRY'); ?>
	</td>
	<td>
		<span class="contact-country">
			<?php echo $this->contact->country; ?>
		</span>
	</td>
	</tr>
	<?php endif; ?>
<?php endif; ?>
<?php if ($this->params->get('address_check') > 0) : ?>
	</address>
<?php endif; ?>

<?php if($this->params->get('show_email') || $this->params->get('show_telephone')||$this->params->get('show_fax')||$this->params->get('show_mobile')|| $this->params->get('show_webpage') ) : ?>
<?php endif; ?>
<?php if ($this->contact->email_to && $this->params->get('show_email')) : ?>
	<tr>
	<td class="contact-title">
		<?php echo JText::_('COM_CONTACT_EMAIL_LABEL'); ?>
	</td>
	<td>
		<p>
			<span class="<?php echo $this->params->get('marker_class'); ?>" >
				<?php echo $this->params->get('marker_email'); ?>
			</span>
			<span class="contact-emailto">
				<?php echo $this->contact->email_to; ?>
			</span>
		</p>
	</td>
	</tr>
<?php endif; ?>
<?php if ($this->contact->telephone && $this->params->get('show_telephone')) : ?>
	<tr>
	<td class="contact-title">
		<?php echo JText::_('COM_CONTACT_TELEPHONE'); ?>
	</td>
	<td>
	<p>
		<span class="<?php echo $this->params->get('marker_class'); ?>" >
			<?php echo $this->params->get('marker_telephone'); ?>
		</span>
		<span class="contact-telephone">
			<?php echo nl2br($this->contact->telephone); ?>
		</span>
	</p>
	</td>
	</tr>
<?php endif; ?>
<?php if ($this->contact->fax && $this->params->get('show_fax')) : ?>
	<tr>
	<td class="contact-title">
		<?php echo JText::_('COM_CONTACT_FAX'); ?>
	</td>
	<td>
	<p>
		<span class="<?php echo $this->params->get('marker_class'); ?>" >
			<?php echo $this->params->get('marker_fax'); ?>
		</span>
		<span class="contact-fax">
		<?php echo nl2br($this->contact->fax); ?>
		</span>
	</p>
	</td>
	</tr>
<?php endif; ?>
<?php if ($this->contact->mobile && $this->params->get('show_mobile')) :?>
	<tr>
	<td class="contact-title">
		<?php echo JText::_('COM_CONTACT_MOBILE'); ?>
	</td>
	<td>
	<p>
		<span class="<?php echo $this->params->get('marker_class'); ?>" >
			<?php echo $this->params->get('marker_mobile'); ?>
		</span>
		<span class="contact-mobile">
			<?php echo nl2br($this->contact->mobile); ?>
		</span>
	</p>
	</td>
	</tr>
<?php endif; ?>
<?php if ($this->contact->webpage && $this->params->get('show_webpage')) : ?>
	<tr>
	<td class="contact-title">
		<?php echo JText::_('COM_CONTACT_WEBPAGE'); ?>
	</td>
	<td>
	<p>
		<span class="<?php echo $this->params->get('marker_class'); ?>" >
		</span>
		<span class="contact-webpage">
			<a href="<?php echo $this->contact->webpage; ?>" target="_blank">
			<?php echo $this->contact->webpage; ?></a>
		</span>
	</p>
	</td>
	</tr>
<?php endif; ?>
<?php if($this->params->get('show_email') || $this->params->get('show_telephone')||$this->params->get('show_fax')||$this->params->get('show_mobile')|| $this->params->get('show_webpage') ) : ?>
<?php endif; ?>
