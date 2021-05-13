<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../access/css/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <title>Reto Ingresar Notas</title>
</head>
<body class="styleBody"><!----Inicio Body--->
    
    <header class="styleHeader"><!----Inicio Encabezado/Menu--->

        <nav class="contenedorNav">
            <ul class="styleUl">
                <li class="styleLi"><a class="styleLink" href="../controller/controllerHome.php">Home</a></li>
                <li class="styleLi"><a class="styleLink" href="../controller/controllerIngresarnotas.php">Ingresar Notas</a></li>
            </ul>
        </nav>

        <img class="logoSena" src="../access/images/logoSena.png" alt="">

    </header><!----Final Encabezado/Menu--->

    <main class="styleMain"><!----Inicio Main--->
        <!----Aqui va el codigo php para navegar--->

        <?php

        if(!isset($vista))
        {
            $vista="home.php";

        }

        require $vista;

        ?>
        



    </main><!----Final Main--->

    <footer class ="styleFooter">
        <h3>Developer: Jair Alejandro Rivera Santos</h3>
        
        <div class="contenedorGit"> 
            
                <img class="imgGithub" src="../access/images/LogoGit.png" alt="">
            
            
        </div>

        <a class="linkGit" href="https://github.com/AlejoR96">
            <small class="usuarioGit">AlejoR96</small>
        </a>
            
        
        
    </footer>
</body><!----Final Body--->
</html>