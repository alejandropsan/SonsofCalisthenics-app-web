<?php require_once 'services/helpers.php'; ?>
<?php require_once 'services/login.php'; ?>
<?php require_once 'includes/register.php'; ?>



<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <style></style>
        <title>Sons Of Calisthenics</title>
         <link rel="stylesheet" type="text/css" href="assets/styles/styles.css" />      
    </head>
    <body>
         <!-- CABECERA --> 
        <header id="head">
           <!-- LOGO --> 
           <div id="logo">
               <p>
                   <img src="assets/img/logo2redimen.png" id="logo-sons" alt="logo Sons" />
               </p>              
           </div>   
        </header>
         <div id="main-container">
         
                <div id="login" class="bloque">
                   <h3 class="identify">Identifícate</h3>


                   <!-- Mostrar errores -->
                <?php if(isset($_SESSION['completado'])) : ?>
                   <div class="alert alert-exit">
                     <?= $_SESSION['completado']?>
                </div>

                <?php elseif(isset($_SESSION['errors']['general'])) : ?>
                   <div class="alert alert-error">
                   <?php $_SESSION['errors']['general']?>
                   </div>  
                   <?php endif; ?>
              
              
              
                <form action="home.php" method="POST" class="form-login">

                    <label for="email">Email</label>
                    <input type="email" name="email" autocomplete="email"/> 
                    <?php echo isset($_SESSION['errors']) ? viewErrors($_SESSION['errors'], 'email') : ''; ?>


                    <label for="password">Contraseña</label>
                    <input type="password" name="password" autocomplete="current-password" />
                    <?php echo isset($_SESSION['errors']) ? viewErrors($_SESSION['errors'], 'password') : ''; ?>

                    <input type="submit" value="Iniciar sesión" />
                </form>



                <div class="new-user">
                    <a href="includes/new-user.php">
                        <p>¿Eres nuevo? Regístrate</p>
                    </a>
                </div>    

                   </div>  
             </div>
       
<?php require_once 'includes/footer.php'; ?>
