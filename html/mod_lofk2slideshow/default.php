<?php 
/**
 * $ModDesc
 * 
 * @version   $Id: $file.php $Revision
 * @package   modules
 * @subpackage  $Subpackage.
 * @copyright Copyright (C) November 2010 LandOfCoder.com <@emai:landofcoder@gmail.com>.All rights reserved.
 * @license   GNU General Public License version 2
 */
 
// no direct access
defined('_JEXEC') or die; 


function utf_strlen($string=null)
{
	preg_match_all("/./us", $string, $match);
	return count($match[0]);
}

function utf_substr($str,$len)
{
	for($i=0;$i<$len;$i++)
	{
		$temp_str=substr($str,0,1);
		if(ord($temp_str) > 127)
		{
			$i++;
			if($i<$len)
			{
				$new_str[]=substr($str,0,3);
				$str=substr($str,3);
			}
		}
		else
		{
			$new_str[]=substr($str,0,1);
			$str=substr($str,1);
		}
	}
	return join($new_str);
}
?>

<!------------------------------------- THE CONTENT ------------------------------------------------->
<div id="lofass<?php echo $module->id; ?>" class="lof-ass<?php echo $params->get('moduleclass_sfx','');?> " style="height:<?php echo $moduleHeight;?>; width:<?php echo $moduleWidth;?>">
<div class="lofass-container <?php echo $css3; ?> <?php echo $themeClass ;?> <?php echo $class;?>">
    
    <?php if( $params->get("preload",1) ): ?>
    <div class="preload"><div></div></div>
    <?php endif; ?>
     <!-- MAIN CONTENT --> 
      <div class="lof-main-wapper" style="height:<?php echo (int)$params->get('main_height',300);?>px;width:<?php echo (int)$params->get('main_width',650);?>px;">
          <?php foreach( $list as $no => $row ): ?>
            <div class="lof-main-item<?php echo(isset($customSliderClass[$no])? " ".$customSliderClass[$no]:"" );?>">
              <?php if( $isIntrotext ) : ?>
                  <div class="lof-inner">
                  <?php echo $row->introtext; ?>
                  </div>
                <?php else: ?>
                     <?php echo $row->mainImage; ?> 
                 
                 <?php if( $enableBlockdescription ):  ?>    
                 <div class="lof-description">
                    <h4><a target="_<?php echo $openTarget ;?>" title="<?php echo $row->title;?>" href="<?php echo $row->link;?>">
					<?php if(utf_strlen($row->title)>10) {echo (utf_substr($row->title,20)."...");} else {echo $row->title;} ?></a>
                    <?php if( $row->description != '...') : ?>
                    <p><?php echo $row->description;?></p>
                    <?php endif; ?>
					
					</h4>
                 </div>
                 <?php endif; ?>
                 <?php endif; ?>
            </div> 
            <?php endforeach; ?>
        
      </div>
      <!-- END MAIN CONTENT --> 
        <!-- NAVIGATOR -->
      <?php if( $params->get('display_button',1) ) : ?>
                <div class="lof-buttons-control">
                  <a href="" onclick="return false;" class="lof-previous"><?php echo JText::_('Previous');?></a>
                  <a href="" class="lof-next"  onclick="return false;"><?php echo JText::_('Next');?></a>
                </div>
            <?php endif; ?>
        <?php if( $class ): ?>    
              <div class="lof-navigator-outer">
                    <ul class="lof-navigator">
                    <?php foreach( $list as $row ): ?>
                        <li>
                            <div>
                                <?php if( $navEnableThumbnail ): ?>
                                 <?php echo $row->thumbnail; ?> 
                                 <?php endif; ?>
                                 <?php if( $navEnableTitle ) : ?>
                                <h4><?php echo $row->subtitle;?></h4>
                                <?php endif; ?>
                                <?php if( $navEnableDate ) : ?>
                                <span><?php echo $row->date; ?></span>
                                <?php endif; ?>
                                <?php if( $navEnableCate ) :?>
                                 <p><i><?php echo JText::_("Published in");?></i>
                                     <a href="<?php echo  $row->categoryLink;?>"><i><?php echo $row->category_title;?></i></a></p>
                                <?php endif; ?>
                            </div>    
                        </li>
                     <?php endforeach; ?>     
                    </ul>
              </div>
       <?php endif; ?>       
  </div>
 </div> 