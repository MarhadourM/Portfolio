

// --- Overlay unique "competences" ---
function openOverlay(id) {
    const overlay = document.getElementById(id);
    overlay.style.display = "flex";

    // Afficher la première compétence et son premier AC
    const allCompetences = overlay.querySelectorAll('.competence-content');
    allCompetences.forEach(c => c.style.display = 'none');

    const firstCompetence = overlay.querySelector('.competence-content');
    if (firstCompetence) {
        firstCompetence.style.display = 'block';

        const acs = firstCompetence.querySelectorAll('.tabcontent');
        acs.forEach(ac => ac.style.display = 'none');
        const firstAC = firstCompetence.querySelector('.tabcontent');
        if (firstAC) firstAC.style.display = 'block';
    }

    // Activer le premier onglet compétence visuellement
    const compTabs = overlay.querySelectorAll('.tablink-competence');
    compTabs.forEach((t, i) => t.classList.toggle('active', i === 0));
}

function closeOverlay(id) {
    document.getElementById(id).style.display = "none";
}

// --- Onglets de compétences (niveau 1) ---
function openCompetence(evt, competenceId) {
    const overlay = evt.target.closest('.overlay-content');

    // Masquer toutes les compétences
    overlay.querySelectorAll('.competence-content').forEach(c => c.style.display = 'none');
    // Retirer active des onglets
    overlay.querySelectorAll('.tablink-competence').forEach(btn => btn.classList.remove('active'));

    // Afficher la compétence sélectionnée
    const comp = overlay.querySelector('#' + competenceId);
    if (comp) {
        comp.style.display = 'block';
        evt.currentTarget.classList.add('active');

        // Afficher son premier AC
        const acs = comp.querySelectorAll('.tabcontent');
        acs.forEach(ac => ac.style.display = 'none');
        const firstAC = comp.querySelector('.tabcontent');
        if (firstAC) firstAC.style.display = 'block';
    }
}

// --- Onglets AC (niveau 2, local à la compétence visible) ---
function openTab(evt, tabId) {
    const competence = evt.target.closest('.competence-content');
    if (!competence) return;

    competence.querySelectorAll('.tabcontent').forEach(c => c.style.display = 'none');
    const target = competence.querySelector('#' + tabId);
    if (target) target.style.display = 'block';
}

// --- Sliders d'évaluation ---
document.addEventListener('DOMContentLoaded', function() {
    const sliders = document.querySelectorAll('.evaluation-slider');

    sliders.forEach(slider => {
        slider.setAttribute('step', '1');
        const resultId = slider.id.replace('slider_', 'result_');
        const resultElement = document.getElementById(resultId);
        if (!resultElement) return;

        updateEvaluationResult(slider.value, resultElement);
        slider.addEventListener('input', function() {
            updateEvaluationResult(this.value, resultElement);
        });
    });
});

function updateEvaluationResult(value, resultElement) {
    const badge = resultElement.querySelector('.result-badge');
    if (!badge) return;
    const intValue = parseInt(value, 10);
    badge.className = 'result-badge';

    switch (intValue) {
        case 1:
            badge.classList.add('non-acquis');
            badge.textContent = 'Non acquis';
            break;
        case 2:
            badge.classList.add('en-cours-debut');
            badge.textContent = 'En début d\'acquisition';
            break;
        case 3:
            badge.classList.add('en-cours');
            badge.textContent = 'En cours d\'acquisition';
            break;
        case 4:
            badge.classList.add('en-cours-avance');
            badge.textContent = 'En cours avancé';
            break;
        case 5:
            badge.classList.add('acquis');
            badge.textContent = 'Acquis';
            break;
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const sliders = document.querySelectorAll('.evaluation-slider');
    
    sliders.forEach(slider => {
        // Ajouter l'attribut step pour "snapper" aux positions
        slider.setAttribute('step', '1');
        
        const resultId = slider.id.replace('slider_', 'result_');
        const resultElement = document.getElementById(resultId);
        
        if (resultElement) {
            // Initialiser l'affichage
            updateEvaluationResult(slider.value, resultElement);
            
            // Écouter les changements
            slider.addEventListener('input', function() {
                updateEvaluationResult(this.value, resultElement);
            });
        }
    });
});
