// --- Gestion des overlays ---
function openOverlay(id) {
    const overlay = document.getElementById(id);
    overlay.style.display = "flex";

    // Ferme tous les onglets
    overlay.querySelectorAll('.tabcontent').forEach(tab => tab.style.display = 'none');

    // Ouvre l’onglet par défaut (ex: ac0)
    const defaultTab = overlay.querySelector('#resume');
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
