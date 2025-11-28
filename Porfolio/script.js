// --- Gestion des overlays ---
function openOverlay(id) {
    const overlay = document.getElementById(id);
    overlay.style.display = "flex";

    // Ferme tous les onglets
    overlay.querySelectorAll('.tabcontent').forEach(tab => tab.style.display = 'none');

    // Ouvre l’onglet par défaut (ex: ac0)
    const defaultTab = overlay.querySelector('#resume_'+id);
    if (defaultTab) defaultTab.style.display = 'block';
}

function closeOverlay(id) {
    document.getElementById(id).style.display = "none";
}

// --- Gestion des onglets ---
function openTab(evt, tabId) {
    const overlay = evt.target.closest('.overlay-content');
    const contents = overlay.querySelectorAll('.tabcontent');
    contents.forEach(c => c.style.display = 'none');
    overlay.querySelector('#' + tabId).style.display = 'block';
}

// ...existing code...

// Gestion des sliders d'évaluation
document.addEventListener('DOMContentLoaded', function() {
    const sliders = document.querySelectorAll('.evaluation-slider');
    
    sliders.forEach(slider => {
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

function updateEvaluationResult(value, resultElement) {
    const badge = resultElement.querySelector('.result-badge');
    const intValue = parseInt(value);
    
    // Retirer toutes les classes
    badge.className = 'result-badge';
    
    // Appliquer la classe et le texte selon la valeur
    switch(intValue) {
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
