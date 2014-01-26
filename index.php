<!DOCTYPE html>
<html data-lf-edit="entries" lang="en" class="no-js" >
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title><?php $settings->out( 'site-meta', 'title' ); ?></title>
		<meta name="description" content="<?php $settings->out( 'site-meta', 'description' ); ?>" />
		<meta name="author" content="<?php $settings->out( 'site-meta', 'author' ); ?>" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="<?php $template->url( 'css/jquery.jscrollpane.custom.css' ); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php $template->url( 'css/bookblock.css' ); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php $template->url( 'css/custom.css' ); ?>" />
		<script src="<?php $template->url( 'js/modernizr.custom.79639.js' ); ?>"></script>
		<?php $hook->apply( 'head' ); ?>
	</head>
	<body>
		<div id="container" class="container">	
			<div class="menu-panel">
				<ul id="menu-toc" class="menu-toc">
					<?php $entry_titles = $content->get( 'entries' ); if ( $entry_titles ) : ?>
					<?php foreach ( $entry_titles as $entry_title ) : if ( !isset( $entry_title['title'] ) || !$entry_title['title'] ) return; ?>
					<li><a href="#<?php echo str_replace(' ', '-', $entry_title['title']); ?>"><?php echo $entry_title['title']; ?></a></li>
					<?php endforeach; ?>
					<?php endif; ?>
				</ul>
			</div>

			<div class="bb-custom-wrapper">
				<div id="bb-bookblock" class="bb-bookblock">
				    <?php $entries = $content->get( 'entries' ); if ( $entries ) : ?>
				    <?php foreach ( $entries as $entry ) : if ( !isset( $entry['entry'] ) || !$entry['entry'] ) return; ?>
				    <div class="bb-item" id="<?php echo str_replace(' ', '-', $entry['title']); ?>">
				    	<div class="content">
				    		<div class="scroller">
				    		    <h2><?php echo $entry['title']; ?></h2>
				    		    <?php echo $entry['entry']; ?>
				    		</div>
				    	</div>
				    </div>
				    <?php endforeach; ?>
				    <?php endif; ?>
				</div>
				
				<nav>
					<span id="bb-nav-prev">&larr;</span>
					<span id="bb-nav-next">&rarr;</span>
				</nav>

				<span id="tblcontents" class="menu-button">Table of Contents</span>
			</div>
		</div><!-- /container -->
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="<?php $template->url( 'js/jquery.mousewheel.js' ); ?>"></script>
		<script src="<?php $template->url( 'js/jquery.jscrollpane.min.js' ); ?>"></script>
		<script src="<?php $template->url( 'js/jquerypp.custom.js' ); ?>"></script>
		<script src="<?php $template->url( 'js/jquery.bookblock.js' ); ?>"></script>
		<script src="<?php $template->url( 'js/page.js' ); ?>"></script>
		<script>
			$(function() {

				Page.init();

			});
		</script>
		
		<?php $hook->apply( 'footer' ); ?>
	</body>
</html>
