<?php include($_SERVER['DOCUMENT_ROOT'].'/_assets/partials/global-content.php'); ?>
<?php
	$title       = "protector portal";
	$headerphoto = "header-photo-inner-1.jpg";
	$content = file_get_contents('content.html', true);
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/_assets/partials/file-begin.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/_assets/partials/header.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/_assets/templates/default.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/_assets/partials/file-end.php'); ?>