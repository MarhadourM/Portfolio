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
                    <?php include 'semestres/S4.php'; ?>
                    <?php include 'semestres/S5.php'; ?>
                    <?php include 'semestres/S6.php'; ?>
                </div>
            </div>
        </section>