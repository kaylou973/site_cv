<?php require_once('public/inc/admin.header.inc.php'); ob_start(); ?>
<?php $r = execute_requete("SELECT * FROM projects");?>


<?php require_once('public/inc/admin.footer.inc.php'); ?>
