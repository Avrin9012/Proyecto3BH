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
    <title>Terms and conditions</title>
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
    <li class='RegisterButton nav-item mx-0 mx-lg-1'><a class='nav-link py-3 px-0 px-lg-3 rounded' href='close.php'>Session close</a></li>
    <li class='nav-item mx-0 mx-lg-1'><a class='nav-link py-3 px-0 px-lg-3 rounded' href='index.php'>Home</a></li>
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
    <li class="RegisterButton nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="register.php">Register</a></li>
    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.php">Home</a></li>
    </ul>
    ';
        }
    ?>
<?php if (isset($_SESSION['admin'])) {
    /* NAV HTML if user is admin */
    echo '
    <ul class="navbar-nav ms-auto">
    <li class="Loginbutton nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="soporte.php">Index messages</a></li>
    <li class="Loginbutton nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="admin/addmem.php">Add mem</a></li>
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
4017 / 5000
Результаты перевода
<p> This Privacy Policy establishes the terms in which Bit By Bit uses and protects the information that is provided by its users when using its website. This company is committed to the security of its users' data. When we ask you to fill in the fields of personal information with which you can be identified, we do so ensuring that it will only be used in accordance with the terms of this document. However, this Privacy Policy may change over time or be updated, so we recommend and emphasize that you continually review this page to ensure that you agree with said changes. </p> <br>

<h2> Information that is collected </h2> <br> <br>

<p> Our website may collect personal information such as: Name, contact information such as your email address and demographic information. Likewise, when necessary, specific information may be required to process an order or make a delivery or billing. <p> <br>

<h2> Use of collected information </h2> <br> <br>

<p> Our website uses the information in order to provide the best possible service, particularly to keep a record of users, orders if applicable, and improve our products and services. It is possible that emails will be sent periodically through our site with special offers, new products and other advertising information that we consider relevant to you or that may provide you with some benefit, these emails will be sent to the address you provide and may be canceled. at any time. </p> <br>

<p> Bit By Bit is highly committed to fulfilling the commitment to keep your information safe. We use the most advanced systems and constantly update them to ensure that there is no unauthorized access. </p> <br>

<h2> Image upload with copyright </h2> <br> <br>

<p> Bit by Bit detaches itself from any stored image through the profile photo. This will be the sole responsibility of the user who uploads it. If you are a company, person or entity affected by this, contact us at aprendeinglesproyect@gmail.com for immediate elimination </p> <br>

<h2> Account deletion </h2> <br> <br>

<p> All accounts associated with an institution or user can be eliminated without prior notice after 1 month and 5 days of delay in the payment of memberships. However, these will not be completely removed but it will be possible to access them if in the next 5 business days the institution or person pays the membership. </p> <br>

<h2> Links to Third Parties </h2> <br> <br>

<p> This website may contain links to other sites that may be of interest to you. Once you click on these links and leave our page, we no longer have control over the site to which you are redirected and therefore we are not responsible for the terms or privacy or the protection of your data on those other third party sites. These sites are subject to their own privacy policies, so it is recommended that you consult them to confirm that you agree with them. </p> <br>

<h2> Control of your personal information </h2> <br> <br>

<p> At any time you can restrict the collection or use of personal information that is provided to our website. Every time you are asked to fill in a form, such as user registration, you can check or uncheck the option to receive information by email. In case you have marked the option to receive our newsletter or advertising, you can cancel it at any time. </p> <br>

<p> This company will not sell, assign or distribute the personal information that is collected without your consent, unless required by a judge with a court order. </p> <br>

<p> Bit By Bit It reserves the right to change the terms of this Privacy Policy at any time. </p> 
    </body>
</html>
