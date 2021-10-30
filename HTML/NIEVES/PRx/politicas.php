<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Politicas de privacidad</title>
    <!-- Favicon-->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <a class="navbar-brand" href="index.php"><img id="header1" src="assets/img/logoingles.png" ></a>
            <div class="container">
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                    </ul>
                </div>
            </div>
<?php
if (isset($_SESSION['email'])) {
    /* Connection */
    $mysqli = new mysqli("localhost", "root", "", "proyecto");
    if ($mysqli->connect_errno) {
    echo 'no';
    }else{
    }
    /* Dir for user img */
    $dir = 'users_img/'.$_SESSION['my_img'];
    echo '<ul class="navbar-nav mr-auto"> <li class="nav-item active">
    </li>
    </ul>';
    /* NAV HTML if user is logged */     
    echo "<ul class='navbar-nav ms-auto'>
    <li class='RegisterButton nav-item mx-0 mx-lg-1'><a class='nav-link py-3 px-0 px-lg-3 rounded' href='create.php'>Flashcards</a></li>
    <li class='RegisterButton nav-item mx-0 mx-lg-1'><a class='nav-link py-3 px-0 px-lg-3 rounded' href='close.php'>Cerrar sesion</a></li>
    <li class='nav-item mx-0 mx-lg-1'><a class='nav-link py-3 px-0 px-lg-3 rounded' href='index.php'>Inicio</a></li>
    </ul>
    <div id='userlogin'><li class='nav-item dropdown'><div>
    <a class='nav-link txtlogin' href='user.php' aria-haspopup='true' aria-expanded='false'>".             
    '<img id="imgfreelogin" src="'.$dir.'">' . $_SESSION['email']."</a>
    <div class='dropdown-menu' aria-labelledby='dropdown01'>
    <a class='dropdown-item' href='user.php?user_ref=$_SESSION[id]'>Mis flashcards</a>
    <a class='dropdown-item' href='opciones.php?my_settings=$_SESSION[id]        
    '>opciones</a>
    <a class='dropdown-item' href='close.php'>Cerrar sesion</a>
    </div> </li> </div>";
}else if (!isset($_SESSION['email'])) {
    /* NAV HTML if user is not logged */
    echo '
    <ul class="navbar-nav ms-auto">
    <li class="Loginbutton nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="login.php">Login</a></li>
    <li class="RegisterButton nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="register.php">Registrarse</a></li>
    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.php">Inicio</a></li>
    </ul>
    ';
        }
    ?>
<?php if (isset($_SESSION['admin'])) {
    /* NAV HTML if user is admin */
    echo '
    <ul class="navbar-nav ms-auto">
    <li class="Loginbutton nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="soporte.php">Mensajes Soporte</a></li>
    <li class="Loginbutton nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="admin/addmem.php">Añadir membresia</a></li>
    </ul>
    ';
}
    ?>
    </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="assets/img/logo.png" alt="..." />
                <h1>POLÍTICA DE PRIVACIDAD</h1><br><br>

<!-- Privacy politics-->
<p>El presente Política de Privacidad establece los términos en que Bit By Bit usa y protege la información que es proporcionada por sus usuarios al momento de utilizar su sitio web. Esta compañía está comprometida con la seguridad de los datos de sus usuarios. Cuando le pedimos llenar los campos de información personal con la cual usted pueda ser identificado, lo hacemos asegurando que sólo se empleará de acuerdo con los términos de este documento. Sin embargo esta Política de Privacidad puede cambiar con el tiempo o ser actualizada por lo que le recomendamos y enfatizamos revisar continuamente esta página para asegurarse que está de acuerdo con dichos cambios.</p><br>

<h2>Información que es recogida</h2><br><br>

<p>Nuestro sitio web podrá recoger información personal por ejemplo: Nombre, información de contacto como su dirección de correo electrónica e información demográfica. Así mismo cuando sea necesario podrá ser requerida información específica para procesar algún pedido o realizar una entrega o facturación.<p><br>

<h2>Uso de la información recogida</h2><br><br>

<p>Nuestro sitio web emplea la información con el fin de proporcionar el mejor servicio posible, particularmente para mantener un registro de usuarios, de pedidos en caso que aplique, y mejorar nuestros productos y servicios.  Es posible que sean enviados correos electrónicos periódicamente a través de nuestro sitio con ofertas especiales, nuevos productos y otra información publicitaria que consideremos relevante para usted o que pueda brindarle algún beneficio, estos correos electrónicos serán enviados a la dirección que usted proporcione y podrán ser cancelados en cualquier momento.</p><br>

<p>Bit By Bit está altamente comprometido para cumplir con el compromiso de mantener su información segura. Usamos los sistemas más avanzados y los actualizamos constantemente para asegurarnos que no exista ningún acceso no autorizado.</p><br>

<h2>Subida de imagenes con derecho de autor</h2><br><br>

<p>Bit by Bit se desligua de cualquier imagen almacenada por medio de la foto de perfil. Esto sera única responsabilidad del usuario que la suba. Si usted es una empresa, persona o entidad afectada por esto, contactanos a aprendeinglesproyect@gmail.com para su inmediata eliminación</p><br>

<h2>Eliminación de cuentas</h2><br><br>

<p>Todas las cuentas asociadas a una institución o usuario pueden ser eliminada sin previo aviso despues de 1 mes y 5 dias de atraso al pago de la membresías. Sin embargo estas no se removeran completamente sino que sera posible acceder a ellas si en los proximos 5 dias habiles la institución o persona pagan la membresia. </p><br>

<h2>Enlaces a Terceros</h2><br><br>

<p>Este sitio web pudiera contener en laces a otros sitios que pudieran ser de su interés. Una vez que usted de clic en estos enlaces y abandone nuestra página, ya no tenemos control sobre al sitio al que es redirigido y por lo tanto no somos responsables de los términos o privacidad ni de la protección de sus datos en esos otros sitios terceros. Dichos sitios están sujetos a sus propias políticas de privacidad por lo cual es recomendable que los consulte para confirmar que usted está de acuerdo con estas.</p><br>

<h2>Control de su información personal</h2><br><br>

<p>En cualquier momento usted puede restringir la recopilación o el uso de la información personal que es proporcionada a nuestro sitio web.  Cada vez que se le solicite rellenar un formulario, como el de alta de usuario, puede marcar o desmarcar la opción de recibir información por correo electrónico.  En caso de que haya marcado la opción de recibir nuestro boletín o publicidad usted puede cancelarla en cualquier momento.</p><br>

<p>Esta compañía no venderá, cederá ni distribuirá la información personal que es recopilada sin su consentimiento, salvo que sea requerido por un juez con un orden judicial.</p><br>

<p>Bit By Bit Se reserva el derecho de cambiar los términos de la presente Política de Privacidad en cualquier momento.</p>
    </body>
</html>
