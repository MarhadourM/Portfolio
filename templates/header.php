<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="barre-navigation">
        <div class="groupe-liens">
            <a href="competences" class="bouton-menu <?php echo ($page === 'competences') ? 'actif' : ''; ?>">Compétences</a>
            <a href="projets" class="bouton-menu <?php echo ($page === 'projets') ? 'actif' : ''; ?>">Projets</a>
        </div>

        <div class="logo-mm"><a href="home" class="<?php echo ($page === 'home') ? 'actif' : ''; ?>">MM</a></div>

        <div class="groupe-liens">
            <a href="parcours" class="bouton-menu <?php echo ($page === 'parcours') ? 'actif' : ''; ?>">Parcours</a>
            <a href="contact" class="bouton-menu <?php echo ($page === 'contact') ? 'actif' : ''; ?>">Contact</a>
        </div>
    </nav>
