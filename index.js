const menu_index = document.getElementById('menu_index');

window.onload = function() {

    if (window.matchMedia("(min-width: 770px)").matches) {

        menu_index.style.display = 'none';

    }

}