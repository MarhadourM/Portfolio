<section id="page-competences" class="conteneur-page masque">
            <h2 class="grand-titre">Mon <span class="accent">Référentiel</span></h2>
            
            <div class="onglets-semestres">
                <button onclick="setSemestre(3)" id="btn-s3" class="bouton-semestre actif">S3</button>
                <button onclick="setSemestre(4)" id="btn-s4" class="bouton-semestre">S4</button>
                <button onclick="setSemestre(5)" id="btn-s5" class="bouton-semestre">S5</button>
                <button onclick="setSemestre(6)" id="btn-s6" class="bouton-semestre">S6</button>
            </div>

            <div class="mise-en-page-competences">
                <aside class="menu-competences">
                    <button onclick="setSkill(1)" id="tab-1" class="bouton-skill actif"><span>1. RÉALISER</span> <i class="fas fa-terminal"></i></button>
                    <button onclick="setSkill(2)" id="tab-2" class="bouton-skill"><span>2. OPTIMISER</span> <i class="fas fa-bolt"></i></button>
                    <button onclick="setSkill(3)" id="tab-3" class="bouton-skill"><span>3. ADMINISTRER</span> <i class="fas fa-server"></i></button>
                    <button onclick="setSkill(4)" id="tab-4" class="bouton-skill"><span>4. GÉRER</span> <i class="fas fa-database"></i></button>
                    <button onclick="setSkill(5)" id="tab-5" class="bouton-skill"><span>5. CONDUIRE</span> <i class="fas fa-tasks"></i></button>
                    <button onclick="setSkill(6)" id="tab-6" class="bouton-skill"><span>6. COLLABORER</span> <i class="fas fa-users"></i></button>
                </aside>

                <div id="contenu-dynamique">
                    <?php include 'semestres/S3.php'; ?>

                    <!-- Panels S4 -->
                    <div id="panel-S4-1" class="bloc-3d masque">
                        <h3 class="accent" style="margin-bottom:1.5rem;">S4 - Réaliser</h3>
                        <div class="grille-bilan">
                            <div class="cellule-statut statut-non">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--rouge-erreur); text-transform:uppercase;">Non Acquis</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                            <div class="cellule-statut statut-cours">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--ambre-alerte); text-transform:uppercase;">En cours</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                            <div class="cellule-statut statut-acquis">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--vert-succes); text-transform:uppercase;">Acquis</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                        </div>
                    </div>
                    <div id="panel-S4-2" class="bloc-3d masque">
                        <h3 class="accent" style="margin-bottom:1.5rem;">S4 - Optimiser</h3>
                        <div class="grille-bilan">
                            <div class="cellule-statut statut-non">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--rouge-erreur); text-transform:uppercase;">Non Acquis</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                            <div class="cellule-statut statut-cours">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--ambre-alerte); text-transform:uppercase;">En cours</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                            <div class="cellule-statut statut-acquis">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--vert-succes); text-transform:uppercase;">Acquis</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                        </div>
                    </div>
                    <div id="panel-S4-3" class="bloc-3d masque">
                        <h3 class="accent" style="margin-bottom:1.5rem;">S4 - Administrer</h3>
                        <div class="grille-bilan">
                            <div class="cellule-statut statut-non">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--rouge-erreur); text-transform:uppercase;">Non Acquis</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                            <div class="cellule-statut statut-cours">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--ambre-alerte); text-transform:uppercase;">En cours</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                            <div class="cellule-statut statut-acquis">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--vert-succes); text-transform:uppercase;">Acquis</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                        </div>
                    </div>
                    <div id="panel-S4-4" class="bloc-3d masque">
                        <h3 class="accent" style="margin-bottom:1.5rem;">S4 - Gérer</h3>
                        <div class="grille-bilan">
                            <div class="cellule-statut statut-non">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--rouge-erreur); text-transform:uppercase;">Non Acquis</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                            <div class="cellule-statut statut-cours">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--ambre-alerte); text-transform:uppercase;">En cours</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                            <div class="cellule-statut statut-acquis">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--vert-succes); text-transform:uppercase;">Acquis</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                        </div>
                    </div>
                    <div id="panel-S4-5" class="bloc-3d masque">
                        <h3 class="accent" style="margin-bottom:1.5rem;">S4 - Conduire</h3>
                        <div class="grille-bilan">
                            <div class="cellule-statut statut-non">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--rouge-erreur); text-transform:uppercase;">Non Acquis</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                            <div class="cellule-statut statut-cours">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--ambre-alerte); text-transform:uppercase;">En cours</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                            <div class="cellule-statut statut-acquis">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--vert-succes); text-transform:uppercase;">Acquis</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                        </div>
                    </div>
                    <div id="panel-S4-6" class="bloc-3d masque">
                        <h3 class="accent" style="margin-bottom:1.5rem;">S4 - Collaborer</h3>
                        <div class="grille-bilan">
                            <div class="cellule-statut statut-non">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--rouge-erreur); text-transform:uppercase;">Non Acquis</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                            <div class="cellule-statut statut-cours">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--ambre-alerte); text-transform:uppercase;">En cours</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                            <div class="cellule-statut statut-acquis">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--vert-succes); text-transform:uppercase;">Acquis</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                        </div>
                    </div>

                    <!-- Panels S5 -->
                    <div id="panel-S5-1" class="bloc-3d masque">
                        <h3 class="accent" style="margin-bottom:1.5rem;">S5 - Réaliser</h3>
                        <div class="grille-bilan">
                            <div class="cellule-statut statut-non">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--rouge-erreur); text-transform:uppercase;">Non Acquis</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                            <div class="cellule-statut statut-cours">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--ambre-alerte); text-transform:uppercase;">En cours</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                            <div class="cellule-statut statut-acquis">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--vert-succes); text-transform:uppercase;">Acquis</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                        </div>
                    </div>
                    <div id="panel-S5-2" class="bloc-3d masque">
                        <h3 class="accent" style="margin-bottom:1.5rem;">S5 - Optimiser</h3>
                        <div class="grille-bilan">
                            <div class="cellule-statut statut-non">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--rouge-erreur); text-transform:uppercase;">Non Acquis</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                            <div class="cellule-statut statut-cours">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--ambre-alerte); text-transform:uppercase;">En cours</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                            <div class="cellule-statut statut-acquis">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--vert-succes); text-transform:uppercase;">Acquis</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                        </div>
                    </div>
                    <div id="panel-S5-3" class="bloc-3d masque">
                        <h3 class="accent" style="margin-bottom:1.5rem;">S5 - Administrer</h3>
                        <div class="grille-bilan">
                            <div class="cellule-statut statut-non">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--rouge-erreur); text-transform:uppercase;">Non Acquis</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                            <div class="cellule-statut statut-cours">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--ambre-alerte); text-transform:uppercase;">En cours</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                            <div class="cellule-statut statut-acquis">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--vert-succes); text-transform:uppercase;">Acquis</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                        </div>
                    </div>
                    <div id="panel-S5-4" class="bloc-3d masque">
                        <h3 class="accent" style="margin-bottom:1.5rem;">S5 - Gérer</h3>
                        <div class="grille-bilan">
                            <div class="cellule-statut statut-non">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--rouge-erreur); text-transform:uppercase;">Non Acquis</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                            <div class="cellule-statut statut-cours">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--ambre-alerte); text-transform:uppercase;">En cours</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                            <div class="cellule-statut statut-acquis">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--vert-succes); text-transform:uppercase;">Acquis</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                        </div>
                    </div>
                    <div id="panel-S5-5" class="bloc-3d masque">
                        <h3 class="accent" style="margin-bottom:1.5rem;">S5 - Conduire</h3>
                        <div class="grille-bilan">
                            <div class="cellule-statut statut-non">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--rouge-erreur); text-transform:uppercase;">Non Acquis</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                            <div class="cellule-statut statut-cours">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--ambre-alerte); text-transform:uppercase;">En cours</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                            <div class="cellule-statut statut-acquis">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--vert-succes); text-transform:uppercase;">Acquis</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                        </div>
                    </div>
                    <div id="panel-S5-6" class="bloc-3d masque">
                        <h3 class="accent" style="margin-bottom:1.5rem;">S5 - Collaborer</h3>
                        <div class="grille-bilan">
                            <div class="cellule-statut statut-non">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--rouge-erreur); text-transform:uppercase;">Non Acquis</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                            <div class="cellule-statut statut-cours">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--ambre-alerte); text-transform:uppercase;">En cours</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                            <div class="cellule-statut statut-acquis">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--vert-succes); text-transform:uppercase;">Acquis</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                        </div>
                    </div>

                    <!-- Panels S6 -->
                    <div id="panel-S6-1" class="bloc-3d masque">
                        <h3 class="accent" style="margin-bottom:1.5rem;">S6 - Réaliser</h3>
                        <div class="grille-bilan">
                            <div class="cellule-statut statut-non">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--rouge-erreur); text-transform:uppercase;">Non Acquis</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                            <div class="cellule-statut statut-cours">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--ambre-alerte); text-transform:uppercase;">En cours</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                            <div class="cellule-statut statut-acquis">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--vert-succes); text-transform:uppercase;">Acquis</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                        </div>
                    </div>
                    <div id="panel-S6-2" class="bloc-3d masque">
                        <h3 class="accent" style="margin-bottom:1.5rem;">S6 - Optimiser</h3>
                        <div class="grille-bilan">
                            <div class="cellule-statut statut-non">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--rouge-erreur); text-transform:uppercase;">Non Acquis</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                            <div class="cellule-statut statut-cours">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--ambre-alerte); text-transform:uppercase;">En cours</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                            <div class="cellule-statut statut-acquis">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--vert-succes); text-transform:uppercase;">Acquis</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                        </div>
                    </div>
                    <div id="panel-S6-3" class="bloc-3d masque">
                        <h3 class="accent" style="margin-bottom:1.5rem;">S6 - Administrer</h3>
                        <div class="grille-bilan">
                            <div class="cellule-statut statut-non">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--rouge-erreur); text-transform:uppercase;">Non Acquis</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                            <div class="cellule-statut statut-cours">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--ambre-alerte); text-transform:uppercase;">En cours</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                            <div class="cellule-statut statut-acquis">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--vert-succes); text-transform:uppercase;">Acquis</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                        </div>
                    </div>
                    <div id="panel-S6-4" class="bloc-3d masque">
                        <h3 class="accent" style="margin-bottom:1.5rem;">S6 - Gérer</h3>
                        <div class="grille-bilan">
                            <div class="cellule-statut statut-non">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--rouge-erreur); text-transform:uppercase;">Non Acquis</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                            <div class="cellule-statut statut-cours">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--ambre-alerte); text-transform:uppercase;">En cours</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                            <div class="cellule-statut statut-acquis">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--vert-succes); text-transform:uppercase;">Acquis</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                        </div>
                    </div>
                    <div id="panel-S6-5" class="bloc-3d masque">
                        <h3 class="accent" style="margin-bottom:1.5rem;">S6 - Conduire</h3>
                        <div class="grille-bilan">
                            <div class="cellule-statut statut-non">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--rouge-erreur); text-transform:uppercase;">Non Acquis</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                            <div class="cellule-statut statut-cours">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--ambre-alerte); text-transform:uppercase;">En cours</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                            <div class="cellule-statut statut-acquis">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--vert-succes); text-transform:uppercase;">Acquis</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                        </div>
                    </div>
                    <div id="panel-S6-6" class="bloc-3d masque">
                        <h3 class="accent" style="margin-bottom:1.5rem;">S6 - Collaborer</h3>
                        <div class="grille-bilan">
                            <div class="cellule-statut statut-non">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--rouge-erreur); text-transform:uppercase;">Non Acquis</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                            <div class="cellule-statut statut-cours">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--ambre-alerte); text-transform:uppercase;">En cours</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                            <div class="cellule-statut statut-acquis">
                                <span style="font-size:0.6rem; font-weight:900; color:var(--vert-succes); text-transform:uppercase;">Acquis</span>
                                <ul style="font-size:0.8rem; margin-top:1rem; font-style:italic; list-style:none;"><li>Point à définir...</li></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>