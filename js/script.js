let semestreActif = 3;
        let skillActif = 1;

        // Descriptions des compétences
        const descriptionsCompetences = {
            1: {
                titre: "Compétence 1",
                description: "Partir des exigences et aller jusqu’à une application complète"
            },
            2: {
                titre: "Compétence 2",
                description: "Sélectionner les algorithmes adéquats pour répondre à un problème donné"
            },
            3: {
                titre: "Compétence 3",
                description: "Déployer des services dans une architecture réseau"
            },
            4: {
                titre: "Compétence 4",
                description: "Optimiser une base de données, interagir avec une application et mettre en œuvre la sécurité"
            },
            5: {
                titre: "Compétence 5",
                description: "Appliquer une démarche de suivi de projet en fonction des besoins métiers des clients et des utilisateurs"
            },
            6: {
                titre: "Compétence 6",
                description: "Situer son rôle et ses missions au sein d’une équipe informatique"
            }
        };

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
            mettreAJourDescription(1);
        }

        function setSkill(num) {
            skillActif = num;
            document.querySelectorAll('.bouton-skill').forEach(b => b.classList.remove('actif'));
            const tab = document.getElementById('tab-' + num);
            if(tab) tab.classList.add('actif');
            rafraichirAffichageCompetence();
            mettreAJourDescription(num);
            console.log('setSkill appelé pour competence:', num);
        }

        function mettreAJourDescription(skillNum) {
            console.log('mettreAJourDescription appelé avec:', skillNum);
            const description = descriptionsCompetences[skillNum];
            console.log('Description trouvée:', description);
            if (description) {
                const titreElement = document.getElementById('titre-description');
                const texteElement = document.getElementById('texte-description');
                console.log('Éléments trouvés - titre:', titreElement, 'texte:', texteElement);
                if (titreElement) titreElement.textContent = description.titre;
                if (texteElement) texteElement.textContent = description.description;
            }
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
                mettreAJourDescription(1);
            }, 100);
        };
        
        // Appel immédiat si DOM est déjà chargé
        document.addEventListener('DOMContentLoaded', () => {
            rafraichirAffichageCompetence();
            mettreAJourDescription(1);
        });