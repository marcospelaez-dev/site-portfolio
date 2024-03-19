
//Behavior menu open and close
function menuAppear(){
    
    let navMenu = document.getElementById("menuMobile");
    let malha = document.getElementById("malha");

    if(navMenu.classList.contains('menu-closed') && malha.classList.contains('menu-closed')){
        navMenu.classList.remove('menu-closed');
        navMenu.classList.add('menu-opened');
        malha.classList.remove('menu-closed');
        malha.classList.add('menu-opened');
        
    }else{
        navMenu.classList.remove('menu-opened');
        navMenu.classList.add('menu-closed');
        malha.classList.remove('menu-opened');
        malha.classList.add('menu-closed');
    }
    
}


