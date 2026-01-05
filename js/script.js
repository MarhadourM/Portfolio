let semestreActif = 3;
        let skillActif = 1;

        function setSemestre(num) {
            semestreActif = num;
            skillActif = 1;  // Réinitialise la compétence à 1
            document.querySelectorAll('.bouton-semestre').forEach(b => b.classList.remove('actif'));
            const btn = document.getElementById('btn-s' + num);
            if(btn) btn.classList.add('actif');
            document.querySelectorAll('.bouton-skill').forEach(b => b.classList.remove('actif'));
            const tab = document.getElementById('tab-1');
            if(tab) tab.classList.add('actif');
            rafraichirAffichageCompetence();
        }

        function setSkill(num) {
            skillActif = num;
            document.querySelectorAll('.bouton-skill').forEach(b => b.classList.remove('actif'));
            const tab = document.getElementById('tab-' + num);
            if(tab) tab.classList.add('actif');
            rafraichirAffichageCompetence();
        }

        function rafraichirAffichageCompetence() {
            // Masquer tous les panels
            document.querySelectorAll('[id^="panel-S"]').forEach(p => {
                p.style.display = 'none';
            });

            // Afficher le panel correspondant à la combinaison Semestre + Compétence
            const idCible = `panel-S${semestreActif}-${skillActif}`;
            const target = document.getElementById(idCible);
            if (target) {
                target.style.display = 'block';
            } else {
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