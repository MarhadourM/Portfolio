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
            // Masquer TOUS les panels principaux (panel-S3-1, S3-2, etc)
            // pas les AC enfants
            for (let s = 3; s <= 6; s++) {
                for (let c = 1; c <= 6; c++) {
                    const panel = document.getElementById(`panel-S${s}-${c}`);
                    if (panel) {
                        panel.style.display = 'none';
                    }
                }
            }

            // Afficher le panel principal de la compétence active
            const panelPrincipal = document.getElementById(`panel-S${semestreActif}-${skillActif}`);
            if (panelPrincipal) {
                panelPrincipal.style.display = 'block';
                // Afficher aussi tous les AC enfants
                panelPrincipal.querySelectorAll('[id^="panel-S"]').forEach(ac => {
                    ac.style.display = 'block';
                });
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
            setTimeout(() => {
                rafraichirAffichageCompetence();
            }, 100);
        };
        
        // Appel immédiat si DOM est déjà chargé
        document.addEventListener('DOMContentLoaded', () => {
            rafraichirAffichageCompetence();
        });