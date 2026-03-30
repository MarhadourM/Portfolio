<section id="page-competences" class="conteneur-page masque">
            <h2 class="grand-titre">Mes <span class="accent">Compétences</span></h2>
            
            <div class="onglets-semestres">
                <button onclick="setSemestre(3)" id="btn-s3" class="bouton-semestre actif">S3</button>
                <button onclick="setSemestre(4)" id="btn-s4" class="bouton-semestre">S4</button>
                <button onclick="setSemestre(5)" id="btn-s5" class="bouton-semestre">S5</button>
                <button onclick="setSemestre(6)" id="btn-s6" class="bouton-semestre">S6</button>
            </div>

            <div class="mise-en-page-competences">
                <aside class="menu-competences">
                    <button onclick="setSkill(1)" id="tab-1" class="bouton-skill actif"><span>Competence 1</span> <i class="fas fa-terminal"></i></button>
                    <button onclick="setSkill(2)" id="tab-2" class="bouton-skill"><span>Competence 2</span> <i class="fas fa-bolt"></i></button>
                    <button onclick="setSkill(3)" id="tab-3" class="bouton-skill"><span>Competence 3</span> <i class="fas fa-server"></i></button>
                    <button onclick="setSkill(4)" id="tab-4" class="bouton-skill"><span>Competence 4</span> <i class="fas fa-database"></i></button>
                    <button onclick="setSkill(5)" id="tab-5" class="bouton-skill"><span>Competence 5</span> <i class="fas fa-tasks"></i></button>
                    <button onclick="setSkill(6)" id="tab-6" class="bouton-skill"><span>Competence 6</span> <i class="fas fa-users"></i></button>
                </aside>

                <div class="espace-competence">
                    <div id="bloc-description" class="bloc-description">
                        <h3 id="titre-description" class="titre-description">Competence 1</h3>
                        <p id="texte-description" class="texte-description">Sélectionnez une compétence pour voir sa description</p>
                    </div>

                    <div id="contenu-dynamique">
                        <?php include __DIR__ . '/semestres/S3/S3.php'; ?>
                        <?php include __DIR__ . '/semestres/S4/S4.php'; ?>
                        <?php include __DIR__ . '/semestres/S5/S5.php'; ?>
                        <?php include __DIR__ . '/semestres/S6/S6.php'; ?>
                    </div>
                </div>
            </div>
        </section>