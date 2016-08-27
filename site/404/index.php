<?php include($_SERVER['DOCUMENT_ROOT'].'/_assets/partials/global-content.php'); ?>
<?php
	$pagetitle = 'Page Not Found';
	$content   = file_get_contents('content.html', true);
	$aside     = file_get_contents('aside.html', true);
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/_assets/partials/file-begin.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/_assets/partials/header.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/_assets/templates/404.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/_assets/partials/footer.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/_assets/partials/file-end.php'); ?>