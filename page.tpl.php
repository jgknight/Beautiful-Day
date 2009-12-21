<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>

<body>

<div class="top">
				
	<div class="header">

		<div class="left">
			<a href="/"><?php print $site_name; ?></a>
		</div>
		
		<div class="right">

			<?php print $rightbox; ?>
		</div>

	</div>	

</div>

<div class="container">	

	<div class="navigation">
		<?php if (isset($primary_links)) { ?>
		<?php print noobbox_beautifulday_primarylinks($primary_links, array('class' => 'links primary-links')) ?>
		<?php } ?> 
		<div class="clearer"><span></span></div>
	</div>

	<div class="main">		
		
		<div class="content">
			<?php print $breadcrumb; ?>
          		<?php print $header; ?>
			<h1 class="title"><?php print $title; ?></h1>
			<div class="tabs"><?php print $tabs; ?></div>
			<?php print $help; ?>
          		<?php print $messages; ?>
          		<?php print $content; ?>
			<?php print $feed_icons; ?>

		</div>

		<div class="sidenav">

			<?php print $right; ?>

		</div>

		<div class="clearer"><span></span></div>

	</div>

	<div class="footer">
	
		<div class="left"><?php print $footer_message; ?> Valid <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> &amp; <a href="http://validator.w3.org/check?uri=referer">XHTML</a>.</div>
		<div class="right"><a href="http://templates.arcsin.se/">Template</a> by <a href="http://arcsin.se/">Arcsin</a> | Ported by <a href="http://noobbox.com">Noobbox</a></div>

		<div class="clearer"><span></span></div>
		<?php if(isset($footer)){ print $footer; } ?>

	</div>

</div>
<?php print $closure; ?>
</body>

</html>