<?php include($_SERVER['DOCUMENT_ROOT'].'/_assets/partials/global-content.php'); ?>
<?php
	$title       = "products &amp; services";
	$content = file_get_contents('content.html', true);
	$sidebar = file_get_contents('sidebar.php', true);
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/_assets/partials/file-begin.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/_assets/partials/header.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/_assets/templates/default.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/_assets/partials/file-end.php'); ?>