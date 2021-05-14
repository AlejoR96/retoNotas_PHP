<h1 class="styleTitulo-h1">Bienvenido</h1>

        <section class="styleSection"><!----Inicio Contenido/section--->
            <div class="subMenu">
            <ul class="styleUlstyleUlcolumna">
                <li class="styleLi styleLiseparador"><a class="styleLink" href="../controller/controllerregistarNotas.php">Registrar Notas</a></li>
                <li class="styleLi styleLiseparador"><a class="styleLink" href="../controller/controllerlistaNotas.php">Lista Notas</a></li>
            
            </div><!----Final Contenido/section--->

            <div class="contenedorSubmenu">
            
            <?php

            if(!isset($subVista))
            {
                $subVista = "registarNotas.php";
            }

             require $subVista;

            ?>
            
            </div>
        </section>