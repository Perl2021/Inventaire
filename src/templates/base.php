<?php
// Appel dee Autoloader qui charge toutes les classes
require 'C:\wamp\www\AppInventaire\app\vendor\autoload.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title><?= $title ?></title>
    <?php include_once('head.php'); ?>
</head>
<body>


    <?= $content ?>

<?php include_once('javascript.php')?>
</body>
<div><!-- Made by Perl Jourdain KIMBEMBE for Fruidor-Ugpban --></div>
</html>

