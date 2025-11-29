<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title><?= $titre ?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css" />
</head>

<body>

<nav class="navbar">
    <div class="nav-container">
        <h2 class="nav-logo">MonBlog</h2>
    </div>
</nav>

<div id="global">
    <header>
        <h1>Mon Blog MVC</h1>
        <p>Un blog moderne avec un style bleu-violet élégant.</p>
    </header>

    <div class="content">
        <?= $contenu ?>
    </div>
</div>

<footer class="footer">
    © <?= date('Y') ?> — Version premium colorée
</footer>

</body>
</html>
