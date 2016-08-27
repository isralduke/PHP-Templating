<?php include($_SERVER['DOCUMENT_ROOT'].'/_assets/partials/global-content.php'); ?>
<?php
	$headerphoto = "header-photo-inner-2.jpg";
	$title   = "contact us";
	$pageheadline   = "";
	$content = file_get_contents('content.html', true);
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/_assets/partials/file-begin.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/_assets/partials/header.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/_assets/templates/contact.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/_assets/partials/file-end.php'); ?>