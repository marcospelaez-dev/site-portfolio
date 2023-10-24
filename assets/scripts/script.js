
function menuAppear(){
    let navMenu = document.getElementById("menuMobile");

    if(navMenu.classList.contains('menu-closed')){
        navMenu.classList.remove('menu-closed');
        navMenu.classList.add('menu-opened');
    }else{
        navMenu.classList.remove('menu-opened');
        navMenu.classList.add('menu-closed');
    }
}
