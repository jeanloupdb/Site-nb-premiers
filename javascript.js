// Récupération des blocs

var left = -100;
let left2 = 0;

var vitesse_glisse = 4;

function glisse_vers_la_droite() {
    var menu = document.getElementById('menu');
    left += vitesse_glisse;
    menu.style.left = `${left}%`;
    if (left < 0 - vitesse_glisse) {
        requestAnimationFrame(glisse_vers_la_droite);
    }
}

function glisse_vers_la_gauche() {
    var menu = document.getElementById('menu');
    left2 -= vitesse_glisse;
    menu.style.left = `${left2}%`;
    if (left2 > -100 - vitesse_glisse) {
        requestAnimationFrame(glisse_vers_la_gauche);
    }
}

function deroulement() {
    var boutton = document.getElementById("boutton");
    var checkbox = document.getElementById("check");
    var menu = document.getElementById('menu');
    if (!checkbox.checked) {
        checkbox.checked = true;
        left = -100;
        requestAnimationFrame(glisse_vers_la_droite);
    } else {
        if (checkbox.checked) {
            checkbox.checked = false;
            left2 = 0;
            requestAnimationFrame(glisse_vers_la_gauche);
        }
    }
}