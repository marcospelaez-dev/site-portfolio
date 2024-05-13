
<?php require_once('./header.php'); ?>

<div class="div-line"></div>
        
        <!--Sobre mim (about) - section ***MOBILE AND TABLET***-->
       <section class="about"><!--Container section-->
           <div class="foto-title">
               <img class="foto-perfil" src="assets/img/foto-site1.png" alt="Foto Marcos Pelaez Web Design" />
               <div class="title-text">
                   <h2 class="title title-name">Marcos Pelaez</h2>
                   <h2 class="title title-job">Web Design</h2>
               </div>
               
           </div>
           
           <p class="about-description">Desde 2002 fazendo arte! Gráfica e Web!</p>
           <a href="./aboutme.php">
                <button class="about-button">SOBRE EU!</button>
           </a>
           
       </section><!--End Sobre mim (about) - section ***MOBILE AND TABLET***-->

       <section class="about2">
           <div class="apresentation-title">
               <h3>Eu Sou</h3>
               <div class="photo-apresentation">
                   <img class="foto-perfil" src="assets/img/foto-site1.png" alt="Foto Marcos Pelaez Web Designer" />
                   <h5>Web Designer</h5>
               </div>
               <h4>Marcos Pelaez</h4>
           </div>
           <!-- Sobre mim (about2) - section ***only desktop*** -->
           <div class="apresentation-description"><!--Container section-->
               <p class="about-description">Desde 2002 fazendo arte! Gráfica e Web!</p>
               <a href="./aboutme.php">
                <button class="about-button">SOBRE EU!</button>
               </a>
           </div>
       </section>
       <!-- End Sobre mim (about2) - section ***only desktop*** -->

       <!-- Skills (habilidades) section -->
       <section class="skills">
           <div class="div-line1"></div>
           <h2>Habilidades</h2>
           <div class="div-line2"></div>

           <div class="items-skills">
               <div class="item-skill">
                   <img src="assets/img/HTML-Icon.png" alt="ícone HTML">
                   <h3>HTML</h3>
               </div>
               <div class="item-skill">
                   <img src="assets/img/CSS-Icon.png" alt="ícone HTML">
                   <h3>CSS</h3>
               </div>
               <div class="item-skill">
                   <img src="assets/img/Js-Icon.png" alt="ícone HTML">
                   <h3>Javascript</h3>
               </div>
               <div class="item-skill">
                   <h3>UX</h3>
                   <h4>Design</h4>
               </div>
               <div class="item-skill design-grafico">
                   <h3>Design Gráfico</h3>
               </div>
               <div class="item-skill">
                   <h3>UI</h3>
                   <h4>Design</h4>
               </div>
           </div>
       </section>
        <!-- End Skills (habilidades) section -->

<?php require_once('./contato.php'); ?>

<?php require_once('./footer.php'); ?>