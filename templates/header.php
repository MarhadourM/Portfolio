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
            <button onclick="allerVers('competences')" id="nav-competences" class="bouton-menu actif">Compétences</button>
            <button onclick="allerVers('projets')" id="nav-projets" class="bouton-menu">Projets</button>
        </div>

        <div class="logo-mm" onclick="allerVers('competences')">MM</div>

        <div class="groupe-liens">
            <button onclick="allerVers('parcours')" id="nav-parcours" class="bouton-menu">Parcours</button>
            <button onclick="allerVers('contact')" id="nav-contact" class="bouton-menu">Contact</button>
        </div>
    </nav>

</body>
</html>