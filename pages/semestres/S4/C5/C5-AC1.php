<?php
$competence = basename(__DIR__);
$fichier = basename(__FILE__);
$source = __DIR__ . '/../../S3/' . $competence . '/' . $fichier;

if (file_exists($source)) {
    ob_start();
    include $source;
    $html = ob_get_clean();

    $html = preg_replace('/\s*<table class="tableau-preuves.*?<\/table>\s*/s', "\n\n", $html);
    $html = str_replace('panel-S3-', 'panel-S4-', $html);
    $html = preg_replace("/(\r\n|\r|\n){3,}/", PHP_EOL . PHP_EOL, $html);

    echo $html;
    ?>
    <table class="tableau-preuves preuve-acquis">
        <tr class="ligne-preuve">
            <td class="cellule-ressources">SAE 4</td>
            <td class="cellule-description"><strong>Rapport Digagnostic </strong> - Introduction du but du rapport </td>
            <td style="text-align:right;">
                <button class="bouton-apercu" onclick="ouvrirImage('assets/img/S4/ContexteSae.png')">
                    <i class="fas fa-eye"> Preuve</i>
                </button>
            </td>
        </tr>
    </table>
    
    <?php
} else {
    echo '<div class="ac-tableau"><h3 class="accent" style="margin-bottom:1.5rem;">Fichier source introuvable: ' . htmlspecialchars($source, ENT_QUOTES, 'UTF-8') . '</h3></div>';
}
?>
