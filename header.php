<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/global.css">
    <link rel="stylesheet" href="assets/styles/style.css">
    <link rel="stylesheet" href="assets/styles/styles-tablet.css">
    <link rel="stylesheet" href="assets/styles/styles-desk.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Pelaez Web Design</title>
</head>
<body>
    <div class="general-container">
        <header class="container-header">
            <div><!--Logo-->
                <a href="./index.php">
                    <img src="assets/img/logo-fundo-alpha.png" alt="logotipo Pelaez Web Design" class="logo" />
                </a>
                
            </div>

            <div class="name-title"><!--Name Title-->
                <h1>Pelaez</h1>
                <h3>Web Design</h3>
            </div>

            <div class="menu-container">

                <div class="btn-menu"><!--botão menu-->
                    <img src="assets/img/btn-menu-mobile.png" alt="botão de menu" id="btn-appear" onclick="menuAppear()"/>

                    <img src="assets/img/btn-menu-tablet.png" alt="botão de menu" id="btn-appear-2" onclick="menuAppear()"/>
                </div>

                <nav class="menu-closed nav-menu" id="menuMobile">
                    <ul>
                        <img src="assets/img/Bt-fechar.png" alt="botão fechar menu" onclick="menuAppear()" />
                        <hr/>
                        <li><a href="./index.php" class="link-menu">Home</a></li>
                        <li><a href="./aboutme.php" class="link-menu sobre-eu">Sobre Eu</a></li>
                        <li><a href="./portfolio.php" class="link-menu">Portfólio</a></li>
                        <li><a href="#contact" class="link-menu" id="scroll-soft" onclick="menuAppear()">Contato</a></li>
                    </ul>
                </nav>
                <div id="malha" class="menu-closed malha"></div>
            </div><!--end menu-->
        </header>