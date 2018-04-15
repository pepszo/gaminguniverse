<?php ob_start() ?>
Bienvenu sur mon tout premier site :)

<?php
$title = 'Accueil';
$content = ob_get_clean();
include 'includes/layout.php';