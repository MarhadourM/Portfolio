<div id="panel-S3-C4-AC3" class="ac-tableau">
    <h3 class="accent" style="margin-bottom:1.5rem;">AC3 : Intégrer une base de données à une application</h3>
    <div class="grille-bilan">
        <div class="cellule-statut statut-non">
            <span class="statut-label statut-label-non">Non Acquis</span>
            <ul class="statut-items">
                <li>Connexion à la base de données non fonctionnelle</li>
                <li>Les données ne sont pas persistantes</li>
                <li>Aucune gestion des erreurs de base de données</li>
            </ul>
        </div>
        <div class="cellule-statut statut-cours">
            <span class="statut-label statut-label-cours">En cours d'acquisition</span>
            <ul class="statut-items">
                <li>Connexion fonctionnelle mais sans pool de connexions</li>
                <li>CRUD basique implémenté de manière rudimentaire</li>
                <li>Peu de protection contre les injections SQL</li>
            </ul>
        </div>
        <div class="cellule-statut statut-acquis">
            <span class="statut-label statut-label-acquis">Acquis</span>
            <ul class="statut-items">
                <li>Connexion robuste avec gestion de pool et reconnexion automatique</li>
                <li>CRUD complètes avec requêtes paramétrées </li>
                <li>Protection contre les injections SQL et gestion des transactions</li>
            </ul>
        </div>
    </div>
    <table class="tableau-preuves preuve-acquis ">
        <tr class="ligne-preuve">
            <td class="cellule-ressources">SAE</td>
            <td class="cellule-description"><strong>Phase Développement</strong> - Création du model pour la SAE</td>
            <td style="text-align:right;">
                <button class="bouton-apercu" onclick="ouvrirImage('/Portfolio/assets/img/CRUD.png')">
                    <i class="fas fa-eye"> Preuve</i>
                </button>
            </td>
        </tr>
    </table>
</div>
