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
    <title>Cursos de ingles</title>
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
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img id="header1" src="assets/img/logoingles.png" ></a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
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
                <?php if (isset($_SESSION['admin'])) { ?>
                 <article>
                    <h2>Isologotipo:</h2>
                    <i class="fas fa-angle-double-down"></i> <br>
                    <img id="isologo" src="assets/img/logo.png">
                    <br><br><br>
                    <h2>Marco Teórico:</h2>
                    <i class="fas fa-angle-double-down"></i>
                    <p>El Inglés es uno de los lenguajes más importantes del mundo dado que es uno de los más hablados, por varios motivos como la gran expansión del imperio Británico, esparciendo su idioma. El Inglés es un idioma del este germánico originariamente hablado por los habitantes de la Inglaterra en principios del medievo. El lenguaje es influenciado por otros lenguajes germánicos, particularmente el “Viejo Nordico” (un lenguaje del norte germánico), aunque también recibe influencias del latín y el francés. Este idioma específicamente en el rubro de la informática es especial, dado que todas las iniciativas, sean lenguajes de programación, como el propio internet, sistemas operativos, etc, fueron inventado en países angloparlantes, lo cual, obviamente, lo harán en su lenguaje nativo, esto deja al Inglés como “lingua franca”, como por ejemplo podría ser el Griego en la Geometría. Por esto consideramos importante crear esta página como herramienta en la manutención del vocabulario apoyado por las instituciones y profesores correspondientes.</p>
                    <br><br><br>
                    <h2>Misión:</h2>
                    <i class="fas fa-angle-double-down"></i>
                    <p>En Bit By Bit ofrecemos software asequible a empresas e individuos para </p>
                    <br><br><br>
                    <h2>Visión:</h2>
                    <i class="fas fa-angle-double-down"></i>
                    <p>Queremos ser la empresa número uno en latino américa especializada en la producción de software, paginas web e informatica en general.</p>
                    <br><br><br>
                    <h2>Objetivo General:</h2>
                    <i class="fas fa-angle-double-down"></i>
                    <p>Crear una opción fácil y accesible al mercado informático regional, para así, aumentar el nivel general de competitividad latino americano Internacionalmente.</p>
                    <br><br><br>
                    <h2>Objetivo Especifico:</h2>
                     <i class="fas fa-angle-double-down"></i>
                    <p>Analizar el nivel base del mercado informático regional. <br>
                    Investigar la manera en la que se podría aumentar este nivel
                    Con las investigaciones previas mejorar nuestra propia competitividad. <br>
                    Aumentar la competitividad nacional, para luego la regional.
                    </p>
                    <br><br><br>
                    <h2>Matriz F.O.D.A: </h2>
                    <i class="fas fa-angle-double-down"></i>
                    <center>
                    <table class="default">
                        <tr>
                            <td></td>
                            <td>Positivo</td>
                            <td>Negativo</td>
                          </tr>
                          <tr>
                            <td>Internos</td>
                            <td>Equipo de trabajo comprometido</td>
                            <td>No tener local propio</td>
                          </tr>
                          <tr>
                            <td>Externos</td>
                            <td>Propuesta de trabajo de instituciones educativas</td>
                            <td>Presupuesto reducido, Condiciones regionales desfavorables</td>
                          </tr>
                    </table>
                    </center>
                    <br><br><br>
                 </article>
                 <?php }else { ?>
                    <!-- If not-->
                    <header class="masthead bg-primary text-white text-center">
                        <div class="container d-flex align-items-center flex-column">
                            <h1>Prohibido<h2>
                                <p>Deberias ser admin para ver esta pagina</p>
                                <a href='https://www.freepik.com'><img id="imgfree" src="assets/img/forbidden.png" width="15%"></a>
                            </div>
                            <?php } ?>
                        </body>
                        </html>