
//Behavior menu open and close
function menuAppear() {
    const navMenu = document.getElementById("menuMobile");
    const malha = document.getElementById("malha");
    const isClosed = navMenu.classList.contains('menu-closed');

    navMenu.classList.toggle('menu-closed', !isClosed);
    navMenu.classList.toggle('menu-opened', isClosed);
    malha.classList.toggle('menu-closed', !isClosed);
    malha.classList.toggle('menu-opened', isClosed);
}


