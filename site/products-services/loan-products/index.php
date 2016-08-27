<?php include($_SERVER['DOCUMENT_ROOT'].'/_assets/partials/global-content.php'); ?>
<?php
	$title       = "loan servicing and loan origination products";
	$headerphoto = "fic_products_services_banner.jpg";
	$content = file_get_contents('content.html', true);
	$sidebar = file_get_contents('../sidebar.php', true);
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/_assets/partials/file-begin.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/_assets/partials/header.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/_assets/templates/default.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/_assets/partials/file-end.php'); ?>