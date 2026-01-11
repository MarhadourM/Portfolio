<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <nav class="barre-navigation">
        <div class="groupe-liens">
            <a href="index.php?page=competences" class="bouton-menu <?php echo ($page === 'competences') ? 'actif' : ''; ?>">Compétences</a>
            <a href="index.php?page=projets" class="bouton-menu <?php echo ($page === 'projets') ? 'actif' : ''; ?>">Projets</a>
        </div>

        <div class="logo-mm"><a href="index.php?page=home" class="<?php echo ($page === 'home') ? 'actif' : ''; ?>">MM</a></div>

        <div class="groupe-liens">
            <a href="index.php?page=parcours" class="bouton-menu <?php echo ($page === 'parcours') ? 'actif' : ''; ?>">Parcours</a>
            <a href="index.php?page=contact" class="bouton-menu <?php echo ($page === 'contact') ? 'actif' : ''; ?>">Contact</a>
        </div>
    </nav>
