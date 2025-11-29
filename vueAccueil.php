<?php $titre = "Mon Blog Minimaliste"; ?>

<?php ob_start(); ?>

<?php foreach ($billets as $billet): ?>
<article>
    <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
    <time><?= $billet['date'] ?></time>
    <p><?= $billet['contenu'] ?></p>
</article>
<?php endforeach; ?>

<?php
$contenu = ob_get_clean();
require 'gabarit.php';
?>
