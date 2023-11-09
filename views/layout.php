<?php
    if(!isset($_SESSION)){
        session_start();
    }

    $auth = $_SESSION['login'] ?? false;

    if(!isset($inicio)){
        $inicio = false;
    }

    if(!isset($empleadoEmpresa)){
        $empleadoEmpresa = false;
    }
    if(!isset($admin)){
        $admin = false;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RCA</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../build/css/app.css">
</head>
<body>

<?php if($empleadoEmpresa) {?>  
    <header class="header <?php echo $empleadoEmpresa ? 'usuario' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/inicio" class="logo">
                    <h1>RCA</h1>
                </a>

                <div class="mobile-menu">
                        <img src="/build/img/barras.svg" alt="icono menu responsive">   
                </div>

                <nav class="navegacion">
                    <a href="/encomienda">Encomienda</a>
                    <a href="/visita">Visitas</a>
                    <a href="/reserva">Reservas</a>
                    <?php if($auth): ?>
                        <a href="/logout">Cerrar Sesión</a>
                    <?php endif; ?>
                </nav>
            </div> <!--.barra-->
            
        </div>
    </header>
<?php } ?>

    <div class="<?php echo $inicio ? 'contenedor-app' : '' ?>  <?php echo $admin ? 'contenedor-admin-app' : '' ?><?php echo $empleadoEmpresa ? 'contenedor-empleado-app' : '' ?>">
    <?php if($inicio) {?>  <div class="<?php echo $inicio ? 'imagen' : '' ?>"></div><?php } ?>
        <div class="<?php echo $inicio ? 'app' : ''?>  <?php echo $admin ? 'admin-app' : ''?> <?php echo $empleadoEmpresa ? 'empleado-app' : '' ?>">
            <?php echo $contenido; ?>
        </div>
    </div>

    <?php
        echo $script ?? '';
    ?>
</body>
</html>