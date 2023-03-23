<?php require_once ("comunes/ModalUsuario.php")?>
<?php require_once("comunes/head.php")?>
<?php require_once("comunes/barranotificacion.php")?>

<!DOCTYPE html>
<head>


<link rel="stylesheet" href="./css/formvalid.css">
    <title>Gestion Usuario</title>
</head>

<body id="body">

<?php require_once("comunes/menu.php")?>
<main>


<div class="container"> 
        <div class="botoneraencargado">
                  
                        <button class="btn btn-success btn-block" data-toggle="modal" data-target="#ModalUsuario" id="incluirUsuario" name="incluirUsuario"><i class="fas fa-plus-circle"></i> Nuevo Usuario </button>
                   

                    </diWv>

            </div>

            <!-- linea abajo-->
            <div class="row">
            <div class="col">
            <hr/>
            </div>
            </div>

        </div>

        
    </form>

    <hr>

    
    <h2 class="textoecentrado">Lista de Usuario</h2>
    

    <div class="modal-footer bg-light">
        <div class="col"></div>
    </div>

    <div id="tablaDatosUsuario"></div>

</div> <!-- fin de container -->



</main>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/registro_Usuario.js"></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="js/sweetalert.min.js" ></script>


</body>

</html>