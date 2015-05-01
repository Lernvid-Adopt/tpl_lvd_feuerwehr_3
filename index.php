<?php
defined( '_JEXEC' ) or die( 'Access to this location is RESTRICTED.' );
echo '<?xml version="1.0" encoding="utf-8"?'.'>'; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
<?php
	// inserting mootools
		JHTML::_('behavior.mootools');
?>
<meta name="designer" content="Juergen Koller - http://www.lernvid.com" />
<meta name="licence" content="Copywright http://www.xpellshop.com/" />
<link href="templates/<?php echo $this->template ?>/css/reset.css" rel="stylesheet" type="text/css" media="all" />
<link href="templates/<?php echo $this->template ?>/css/template.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/css/<?php echo $this->params->get('colorVariation'); ?>.css" rel="stylesheet" type="text/css" />
	  <!--[if IE 7]>
	  <link href="templates/<?php echo $this->template ?>/css/ie7.css" rel="stylesheet" type="text/css" media="all" />
   <![endif]-->
   <!--[if lt IE 7]>
	  <link href="templates/<?php echo $this->template ?>/css/ie5x6x.css" rel="stylesheet" type="text/css" media="all" />
   <![endif]-->
	<?php
		if($this->countModules("left")&&!$this->countModules("right")){ $contentwidth="left";}
		if($this->countModules("right")&&!$this->countModules("left")){ $contentwidth="right";}
		if($this->countModules("left")&&$this->countModules("right")) {$contentwidth="middle"; }
	?>
</head>
<body>
<div id="wrapper">
	<div id="bg_up">
		<div id="masthead_container">
			<div id="masthead">
				<div id="masthead_up">
					<div id="searchbox">
						<div id="search">
							<div id="search_inner">
					             <jdoc:include type="modules" name="user4" style="xhtml" />
							</div>
						</div>
					</div>	
					<?php if (($this->params->get('showFeuerwehr')) !=0) : ?>
						<div id="feuerwehr">
							<p><?php echo  $this->params->get('FeuerwehrName');  ?></p>
						</div>
					<?php endif; ?>
				</div>
				<div id="masthead_down">
					<?php if (($this->params->get('showSitetitle')) !=0) : ?>
						<div id="sitetitle"><?php echo $mainframe->getCfg('sitename');?></div>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div id="container">
		<!-- Begin Container -->
			<?php if($this->countModules('user3')) : ?>
				<div id="navigation">
		             <jdoc:include type="modules" name="user3" style="xhtml" />
				</div>
			<?php endif; ?>
			<?php if($this->countModules('user5 or use6 or user7')) : ?>
				<div id="user_modules2">
						<?php if($this->countModules('user5')) : ?>
							<div id="user5">
								<jdoc:include type="modules" name="user5" style="rounded" />
							</div>
						<?php endif; ?>				
						<?php if($this->countModules('user6')) : ?>
							<div id="user6">
								<jdoc:include type="modules" name="user6" style="rounded" />
							</div>
						<?php endif; ?>				
						<?php if($this->countModules('user7')) : ?>
							<div id="user7">
								<jdoc:include type="modules" name="user7" style="rounded" />
							</div>
						<?php endif; ?>				
				</div>
		<div class="clr"></div>
			<?php endif; ?>				
			<div id="top">
					<?php if($this->countModules('top')) : ?>
			             <jdoc:include type="modules" name="top" style="rounded" />
					<?php endif; ?>		
			</div>
			<!-- Begin Page Content -->
			<div id="page_content">
					<?php if($this->countModules('left')) : ?>
						<div id="sidebar_left">
				             <jdoc:include type="modules" name="left" style="rounded" />
						</div>
					<?php endif; ?>		
					<?php if($this->countModules('right')) : ?>
						<div id="sidebar_right">
				             <jdoc:include type="modules" name="right" style="rounded" />
						</div>
					<?php endif; ?>		
				    <div id="content_out<?php echo $contentwidth; ?>">
						<div class="content">
							 <jdoc:include type="component" />
						</div>
					</div>
			</div>	
			<!-- End Page Content -->
			<div id="container2">
				<div id="user_modules1">
							<?php if($this->countModules('user1')) : ?>
								<div id="user1">
							           <jdoc:include type="modules" name="user1" style="rounded" />
								</div>
							<?php endif; ?>			
							<?php if($this->countModules('user2')) : ?>
								<div id="user2">
								           <jdoc:include type="modules" name="user2" style="rounded" />
								</div>
							<?php endif; ?>			
				</div>					
				<?php if($this->countModules('user8 or use9 or user10')) : ?>
					<div id="user_modules0">
						<?php if($this->countModules('user8')) : ?>
							<div id="user8">
								<jdoc:include type="modules" name="user8" style="rounded" />
							</div>
						<?php endif; ?>				
						<?php if($this->countModules('user9')) : ?>
							<div id="user9">
								<jdoc:include type="modules" name="user9" style="rounded" />
							</div>
						<?php endif; ?>				
						<?php if($this->countModules('user10')) : ?>
							<div id="user10">
								<jdoc:include type="modules" name="user10" style="rounded" />
							</div>
						<?php endif; ?>				
					</div>
				<?php endif; ?>				
				<div id="footer">
					<jdoc:include type="modules" name="footer" />
				</div>
				<div id="bottom">
					<div id="date"><?php echo JHTML::Date($this->date_field, "%A, %d. %B %Y"); ?></div>
					<div id="go_top"><p><a href="#masthead">Top</a></p></div>
					<div id="syndicate">
						<?php if($this->countModules('syndicate')) : ?>
							<jdoc:include type="modules" name="syndicate" />
						<?php endif; ?>				
					</div>
				</div>
				<div id="copyright_info">
					<?php if (($this->params->get('showCopyrightinfo')) !=0) : ?>
						<p><?php echo  $this->params->get('CopyrightInfo');  ?></p>
					<?php endif; ?>
					<?php if (($this->params->get('showValidateurl')) !=0) : ?>
						<p>Valid <a href="http://validator.w3.org/check?uri=referer" target="_blank">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check?uri=templates/<?php echo $this->template ?>/css/template.css" target="_blank">CSS</a></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="clr"></div>
		<div id="designed_by">
			<p>Design by: <a href="http://www.lernvid.com" target="_blank">LernVid.com</a></p>
		</div>
	</div>
</div>
<jdoc:include type="modules" name="debug" style="xhtml" />
</body>
</html>