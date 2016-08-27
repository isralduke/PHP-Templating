<main class="site-content">
	<article class="wrapper">
		<aside class="sidebar">
			<? 
				if ( $sidebar ) { 
					echo $sidebar; 
				}
				else {
					$sidebar = file_get_contents('../about/sidebar.html', true);
					echo $sidebar;
				} 
			?>
		</aside>
		<section class="content">
			<h3><? echo $title; ?></h3>
			<div class="page-content">
				<? echo $content; ?>
			</div>
		</section>
	</article>
</main>