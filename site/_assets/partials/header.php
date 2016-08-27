<? 
	if( $home ){ 
		$pageclasses="wrapper home"; 
		$overlay = "/_assets/img/photo-overlay.png";
	}
	else { 
		$pageclasses="wrapper internal"; 
	}
?>

<header class="<? echo $pageclasses ?>" 
	style="background-image: url('<? echo $overlay;?>'), url('/_assets/img/<? echo $headerphoto ?>');">
	<section class="brand wrapper">
		<div class="brand-item">
			<a href="/" title="<? echo $sitetitle; ?>">
				<img class="logo" src="/_assets/img/financial-insurance-consultants-logo.svg" alt="<?php echo $sitetitle ?> Logo">
			</a>
		</div>
		<div class="brand-item">
			<div class="brand-item brand-item-subitem">
				<a href="tel:<? echo $sitetel; ?>"><? echo $sitephone; ?></a>
			</div>
			<div class="brand-item brand-item-subitem">
				<a href="/contact">contact us</a>
			</div>
		</div>
	</section>
	<nav class="navigation">	<? include('navs.php'); ?> </nav>


<!-- show this if home page -->
		<? if( $home ) { ?>
			<section class="slogan">
				<div class="slogan-content">
					<h4><? echo $headerTitle; ?></h4>
					<p><? echo $headerText; ?></p>
					<p><a href="/about" title="">Learn More</a></p>
				</div>
			</section>
		<? } ?>


<!-- show this for pages that are not the home page -->
		<? if( !$home ) { ?>
			<section class="slogan ">
				<div class="slogan-content internal">
					<h4><? echo $title ?></h4>
				</div>
			</section>
		<? } ?>
</header>