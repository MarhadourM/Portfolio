<div id="panel-S3-C4-AC4" class="ac-tableau">
    <h3 class="accent" style="margin-bottom:1.5rem;">AC4 : Sécuriser l'accès à une base de données</h3>
    <div class="grille-bilan">
        <div class="cellule-statut statut-non">
            <span class="statut-label statut-label-non">Non Acquis</span>
            <ul class="statut-items">
                <li>Aucune gestion des droits utilisateurs</li>
                <li>Mots de passe en clair ou absent</li>
                <li>Données sensibles non chiffrées</li>
            </ul>
        </div>
        <div class="cellule-statut statut-cours">
            <span class="statut-label statut-label-cours">En cours d'acquisition</span>
            <ul class="statut-items">
                <li>Utilisateurs créés mais avec droits excessifs</li>
                <li>Mots de passe basiquement protégés</li>
                <li>Certaines données sensibles chiffrées</li>
            </ul>
        </div>
        <div class="cellule-statut statut-acquis">
            <span class="statut-label statut-label-acquis">Acquis</span>
            <ul class="statut-items">
                <li>Utilisateurs avec droits minimaux et rôles bien définis</li>
                <li>Mots de passe chiffrés avec algorithmes forts</li>
                <li>Données sensibles chiffrées et audit des accès en place</li>
            </ul>
        </div>
    </div>
    <table class="tableau-preuves preuve-acquis">
        <tr class="ligne-preuve">
            <td class="cellule-ressources">SAE</td>
            <td class="cellule-description"><strong>Phase Développement</strong> - Enregistrement du hash mots de passe utilisateurs </td>
            <td style="text-align:right;">
                <button class="bouton-apercu" onclick="ouvrirImage('assets/img/mdp-hash.png')">
                    <i class="fas fa-eye"> Preuve</i>
                </button>
            </td>
        </tr>
    </table>
</div>
