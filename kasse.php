<?php require_once('header.inc.php'); ?>

<p class="lead">Vielen Dank für Ihre Bestellung. Wir senden Ihnen Ihre Artikel an die bei uns hinterlegte Adresse.</p>

<?php 

/* Session zerstören */
$_SESSION = array();
session_destroy();

?>


<?php get_footer(false,true); ?>