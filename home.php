<?php require_once 'services/connect.php'; ?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Sons Of Calisthenics</title>
         <link rel="stylesheet" type="text/css" href="assets/styles/styles.css" />      
    </head>
         <!-- CABECERA --> 
        <header id="head">
           <!-- LOGO --> 
           <div class="logo" id="logo-pages">             
               <a href="home.php">
                            Sons of Calisthenics
                    <p> Don't dream your life. Live your dream! </p> 
               </a>    
           </div> 
           <br/>

   <div class="clearfix"></div>          
</header>
                <!-- MENÚ -->
<?php require_once 'includes/sidebar.php'; ?>                   
<body>
    <div class="main-container">
        <div class="containers-presentation">
            <div id="card" class="card-1">
                <div class="text-card">
                    <a href="history/levels.php">
                        <h2>Misiones Sons</h2>
                        <h3></h3>
                    </a>
                </div>   
            </div>
            <div id="card" class="card-2">
                <div class="text-card">
                    <a href="rutines/rutines_levels.php">
                        <h2>Rutinas aleatorias</h2>
                        <h3>¡¡Comienza a entrenar ya!!</h3>
                    </a>    
                </div>
            </div>
            <div id="card" class="card-3">
                <div class="text-card">
                    <a href="">
                        <h2>Entrenamientos específicos</h2>
                        <h3>¡Elige tu mejor opción!</h3>
                    </a>    
                </div>
            </div>
            <div id="card" class="card-4">
                <div class="text-card">
                    <a href="share.php">
                        <h2>Comunidad</h2>
                        <h3>Comparte tu progreso</h3>
                    </a>    
                </div>
            </div>
    </div>         
    
        <?php require_once 'includes/footer.php'; ?>
</body>
</html>
