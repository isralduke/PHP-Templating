<!-- this is for partner logos at the bottom of the footer -->
<?php
	$partners = array(
		array( '$url' => 'http://www.domain.com', '$title' => 'Go to this Website', '$logofile' => 'logofile.svg', '$alttext' => 'This is a partner logo'),
		array( '$url' => 'http://www.domain.com', '$title' => 'Go to this Website', '$logofile' => 'logofile.svg', '$alttext' => 'This is a partner logo')
	);
?>

<footer class="wrapper">
	<p class="">
		<?php include($_SERVER['DOCUMENT_ROOT'].'/_assets/partials/navs.php'); ?>
		<a href="tel:<? echo $sitetel; ?>"><? echo $sitephone; ?></a>
	</p>
	<p class=""><?php echo $sitetitle ?> &copy;  <?php echo date("Y") ?></p>
	<p>
		<!-- loop to display partner logos -->
		<?php
			foreach ( $partners as $loopitem ) {
				echo '<a href="' . $loopitem['$url'] . '" title="' . $loopitem['$title']. '" class="link-logo-partner" target="_blank">';
				echo '<img src="/_assets/img/' . $loopitem['$logofile'] . '" alt="' . $loopitem['$alttext'] . '" class="logo logo-partner"></a>';
			}
		?>
	</p>
</footer>



