/*---------------------------------------------------------------
# Package - Joomla Template based on Helix Framework   
# ---------------------------------------------------------------
# Author - JoomShaper http://www.joomshaper.com
# Copyright (C) 2010 - 2012 JoomShaper.com. All Rights Reserved.
# license - PHP files are licensed under  GNU/GPL V2
# license - CSS  - JS - IMAGE files  are Copyrighted material 
# Websites: http://www.joomshaper.com
-----------------------------------------------------------------*/
window.addEvent('load', function(){
	$$('.ns2-video .ns2-image, .itemListView.video span.catItemImage img').each(function(el){//for adding video-icon class
		new Element('span.video-icon').inject(el, 'after');
	});
})