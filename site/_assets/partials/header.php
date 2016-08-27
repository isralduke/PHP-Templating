<a href="/" title="<? echo $sitetitle; ?>">
	<img class="logo" src="/_assets/img/<? echo $logofile ?>" alt="<?php echo $sitetitle ?> Logo">
</a>
		
<a href="tel:<? echo $sitetel; ?>"><? echo $sitetel; ?></a>
			
		
<nav class="navigation">
	<? include('navs.php'); ?>
</nav>


<!-- show this if home page -->
	<? if( $home ) { ?>
		
		<h4><? echo $headerTitle; ?></h4>
		<p><? echo $headerText; ?></p>
		<p><a href="/about" title="">Learn More</a></p>
			
	<? } ?>


<!-- show this for pages that are not the home page -->
	<? if( !$home ) { ?>
		
		<h4><? echo $title ?></h4>
			
	<? } ?>