let semestreActif = 3;
        let skillActif = 1;

        function allerVers(pageId) {
            document.querySelectorAll('.page-conteneur').forEach(p => p.classList.add('cache'));
            document.getElementById('page-' + pageId).classList.remove('cache');

            document.querySelectorAll('.bouton-menu').forEach(b => b.classList.remove('actif'));
            const b = document.getElementById('nav-' + pageId);
            if(b) b.classList.add('actif');
            window.scrollTo({top: 0, behavior: 'smooth'});
        }

        function changerSemestre(num) {
            semestreActif = num;
            document.querySelectorAll('.bouton-semestre').forEach(b => b.classList.remove('actif'));
            const btn = document.getElementById('btn-s' + num);
            if(btn) btn.classList.add('actif');
            rafraichirAffichageCompetence();
        }

        function ongletSkill(num) {
            skillActif = num;
            document.querySelectorAll('.bouton-sidebar').forEach(b => b.classList.remove('actif'));
            const tab = document.getElementById('tab-' + num);
            if(tab) tab.classList.add('actif');
            rafraichirAffichageCompetence();
        }

        function rafraichirAffichageCompetence() {
            // Masquer tous les panels qui commencent par "panel-S"
            document.querySelectorAll('.carte-competence').forEach(p => {
                if (p.id.startsWith('panel-S')) p.classList.add('cache');
            });

            // Afficher le panel correspondant à la combinaison Semestre + Compétence
            const idCible = `panel-S${semestreActif}-${skillActif}`;
            const target = document.getElementById(idCible);
            if (target) {
                target.classList.remove('cache');
            } else {
                // Optionnel : afficher un message "Contenu non disponible" si le panel n'existe pas encore
                console.log("Panel non défini : " + idCible);
            }
        }

        function ouvrirImage(url) {
            document.getElementById('lightbox').style.display = 'flex';
            document.getElementById('img-agrandie').src = url;
            document.body.style.overflow = 'hidden';
        }

        function fermerImage() {
            document.getElementById('lightbox').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Initialisation au chargement
        window.onload = () => {
            rafraichirAffichageCompetence();
        };