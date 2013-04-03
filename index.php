<?php
/*---------------------------------------------------------------
# Joomla Template based on Helix Framework   
# ---------------------------------------------------------------
# Template Name: Clear Grey
# Template Version: 1.0.0
# ---------------------------------------------------------------
# Author: Appcell @ Skydrifter http://skydrifter.net
# Copyright (C) 2013 - 2014 SkyDrifter.net. All Rights Reserved.
# license - PHP files are licensed under  GNU/GPL V2
# license - CSS & JS & IMAGE files are copyrighted material 
# Websites: http://skydrifter.net
-----------------------------------------------------------------*/
//no direct accees



defined ('_JEXEC') or die ('resticted access');
$app = JFactory::getApplication();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns:wb="http://open.weibo.com/wb" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language;?>" >
	<head>

		<jdoc:include type="head" />
		<link rel="stylesheet" href="templates/clear_grey/css/frame.css">
		<link rel="stylesheet" href="templates/clear_grey/css/bootstrap.css">
		<script src="templates/clear_grey/js/bootstrap.js" type="text/javascript"></script>
		<link rel="stylesheet" href="templates/clear_grey/css/template.css">
		<link rel="stylesheet" href="templates/clear_grey/css/templatePhone.css">
		<link rel="stylesheet" href="templates/clear_grey/css/typography.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans|Oxygen' rel='stylesheet' type='text/css'>
		<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js?appkey=" type="text/javascript" charset="utf-8"></script>

		
		<!--[if IE 9]>
		<![endif]-->  

		<!--[if lt IE 9]>  
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script> 
		<![endif]-->  
		
		<!--[if lt IE 8]>  
			<link rel="stylesheet" href="templates/clear_grey/css/templateIE.css">
			<link rel="stylesheet" href="templates/clear_grey/css/typographyIE.css">
		<![endif]-->


		
		<!--[if gt IE 6]>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<link rel="stylesheet" href="http://xycss.com/demos/basic-example/ie.css">
		
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->



		<script src="templates/clear_grey/js/jquery.qtip-1.0.0-rc3.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="templates/clear_grey/js/spin.js" type="text/javascript"></script>
		<script src="templates/clear_grey/js/navigation.js" type="text/javascript"></script>



		<!--[if IE]> 
		<script type="text/javascript">

		</script>
		<![endif]-->


<?php 
	session_start();
	if(isset($_SESSION['BROWSER_WARNING']))
	{

	}
	else
	{
	?>

		<script>
		var bro=jQuery.browser;
		if(bro.msie&&bro.version<8)
		{			
			jQuery('html').qtip({
						content: '<?php echo JText::_('IE_OUTDATE_WARNING'); ?>',
						position: {
							corner: {
								target: 'center',
								tooltip: 'center'
								}
						},
						show: {ready: true, when: { event: 'none' } },
						hide: {fixed: true, when: { event: 'unfocus' } }
		
					});
		}

		</script>

	<?php

	$_SESSION['BROWSER_WARNING']='true';
	}

?>



	</head>
<body>
<!--header-->
<!--main-->
<div id="header-container-bg" class="dark-container hidden-phone">
	<div id="line1-bg" class="dividing-line-bg"></div>
</div>
<div id="main" class="container">

		<div id="header" class="row hidden-phone">
			<div id="header-container" class="dark-container hidden-phone">
				<div id="banner-container" class="span2 hidden-phone">
				<?php if($this->countModules('banner')) : ?>
					<div id="banner">
						<jdoc:include type="modules" name="banner" />
					</div>
					<div class="triangle-l"></div>
					<div class="triangle-r"></div>
				<?php endif; ?>
				</div>
				<div id="logo" class="span5">
					<div id="logo-wrapper"><jdoc:include type="modules" name="logo" />
					</div>
				</div>
				<?php if($this->countModules('login') || $this->countModules('searchbar')) : ?>
				<div id="right-top-bar" class="span3">
					<div id="login">
						<jdoc:include type="modules" name="login" />
					</div>
					<div id="searchbar">
						<jdoc:include type="modules" name="searchbar" />
					</div>
				</div>
				<?php endif; ?>
				<div id="line1" class="dividing-line">
					<div class="linepart part1"></div>
					<div class="linepart part2"></div>
					<div class="linepart part3"></div>
					<div class="linepart part4"></div>
					<div class="linepart part5"></div>
				</div>
			</div>
		</div>
		<div id="header-phone" class="visible-phone">
			<p style="color: #000; font-size: 1.5em; padding: 1em 0;"><?php echo htmlspecialchars($app->getCfg('sitename')); ?></p>
			<jdoc:include type="modules" name="searchbar" />
		</div>

	<div id="main-container" class="row" >
			<div id="left-wrapper" class="span2 wrapper">
				<div id="main-nav" class="hidden-phone">
					<div id="main-nav-selector-f" class="main-nav-selector"></div>
					<div id="main-nav-current"></div>
					<div id="main-nav-selector-s" class="main-nav-selector"></div>
					<jdoc:include type="modules" name="main-nav" />
				</div>
				<div id="main-nav-phone" class="visible-phone">
					<jdoc:include type="modules" name="main-nav" />
				</div>
				<?php if($this->countModules('left-panel1')) : ?>
				<div id="left-panel1"  class="hidden-phone left-panel column-panel">
					<jdoc:include type="modules" name="left-panel1" />
				</div>
				<?php endif; ?>
				<?php if($this->countModules('left-panel2')) : ?>
				<div id="left-panel2"  class="hidden-phone left-panel column-panel">
					<jdoc:include type="modules" name="left-panel2" />
				</div>
				<?php endif; ?>
			</div>
				<?php if(($this->countModules('mid-panel1') || $this->countModules('mid-panel2') || $this->countModules('mid-panel3'))) : ?>
					<div id="mid-wrapper" class="span5 wrapper">
						<?php if($this->countModules('mid-panel1')) : ?>
							<div id="mid-panel1" class="mid-panel column-panel">
								<jdoc:include type="modules" name="mid-panel1" />
							</div>
						<?php endif; ?>
						<?php if($this->countModules('mid-panel2')) : ?>
							<div id="mid-panel2" class="mid-panel after column-panel">
								<jdoc:include type="modules" name="mid-panel2" />
							</div>
						<?php endif; ?>
						<?php if($this->countModules('mid-panel3')) : ?>
							<div id="mid-panel3" class="mid-panel after column-panel">
								<jdoc:include type="modules" name="mid-panel3" />
							</div>
						<?php endif; ?>
					</div>
				<?php endif; ?>
				<?php if($this->countModules('right-panel1') || $this->countModules('right-panel2') || $this->countModules('right-panel3')) : ?>
				<div id="right-wrapper" class="span3 wrapper">
				<?php if($this->countModules('right-panel1')) : ?>
					<div id="right-panel1" class="right-panel column-panel">
						<jdoc:include type="modules" name="right-panel1" />
					</div>
				<?php endif; ?>
				<?php if($this->countModules('right-panel2')) : ?>
					<div id="right-panel2" class="right-panel column-panel">
						<jdoc:include type="modules" name="right-panel2" />
					</div>
				<?php endif; ?>
				<?php if($this->countModules('right-panel3')) : ?>
					<div id="right-panel3" class="right-panel column-panel">
						<jdoc:include type="modules" name="right-panel3" />
					</div>
				<?php endif; ?>
				</div>
				<?php endif; ?>


				<?php if(!(($this->countModules('right-panel1') || $this->countModules('right-panel2') || $this->countModules('right-panel3'))||($this->countModules('mid-panel1') || $this->countModules('mid-panel2') || $this->countModules('mid-panel3')))) : ?>
				<div id="content-pane-wrapper" class="wrapper <?php if($this->countModules('content-pane-right1') || $this->countModules('content-pane-right2') || $this->countModules('content-pane-right3')) echo "span6"; else echo "span8"; ?>">
					<?php if($this->countModules('breadcrumbs')) : ?>
					<div id="breadcrumbs">
						<jdoc:include type="modules" name="breadcrumbs" />
					</div>
					<?php endif; ?>

					<div id="content-pane" class="row-fluid" >
							<jdoc:include type="message" />
							<jdoc:include type="component" />
							<jdoc:include type="modules" name="content-panel1" />
					</div>
				</div>

				<?php if($this->countModules('content-pane-right1') || $this->countModules('content-pane-right2') || $this->countModules('content-pane-right3')) : ?>
				<div id="content-pane-right" class="span2 wrapper">
					<?php if($this->countModules('content-pane-right1')) : ?>
					<div id="content-pane-right1" class="content-pane-right">
							<jdoc:include type="modules" name="content-pane-right1" />
					</div>
					<?php endif; ?>
					<?php if($this->countModules('content-pane-right2')) : ?>
					<div id="content-pane-right2" class="content-pane-right">
							<jdoc:include type="modules" name="content-pane-right2" />
					</div>
					<?php endif; ?>
					<?php if($this->countModules('content-pane-right3')) : ?>
					<div id="content-pane-right3" class="content-pane-right">
							<jdoc:include type="modules" name="content-pane-right3" />
					</div>
					<?php endif; ?>
				</div>
				<?php endif; ?>

				<?php endif; ?>
	</div> <!--main-container-->


	<div id="footer-container" class="row">
		<div id="line2" class="dividing-line">
			<div class="linepart part1"></div>
			<div class="linepart part2"></div>
			<div class="linepart part3"></div>
			<div class="linepart part4"></div>
			<div class="linepart part5"></div>		
		</div>
		<div id="footer-copyright" class="span6">
			<div class="copyright">
				<p>Copyright &copy; 2013 
				
				<strong><a href="<?php echo htmlspecialchars($app->getCfg('root')); ?>" alt="<?php echo htmlspecialchars($app->getCfg('sitename')); ?>"><?php echo htmlspecialchars($app->getCfg('sitename')); ?></a></strong>. All rights reserved.</p>
					<jdoc:include type="modules" name="footer-copyright" />
			</div>
		</div>
		<div id="footer-nav" class="span4">
			<jdoc:include type="modules" name="footer-nav" />
		</div>
	</div>


</div> <!--main-->


<div id="footer-container-bg">
	<div id="line2-bg" class="dividing-line-bg"></div>
</div>









</body>
</html>