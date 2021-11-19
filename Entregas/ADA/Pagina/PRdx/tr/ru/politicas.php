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
    <title>Условия и положения</title>
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
    <li class='RegisterButton nav-item mx-0 mx-lg-1'><a class='nav-link py-3 px-0 px-lg-3 rounded' href='create.php'>Флашкардс</a></li>
    <li class='RegisterButton nav-item mx-0 mx-lg-1'><a class='nav-link py-3 px-0 px-lg-3 rounded' href='close.php'>Закрыть сессия</a></li>
    <li class='nav-item mx-0 mx-lg-1'><a class='nav-link py-3 px-0 px-lg-3 rounded' href='index.php'>Главная</a></li>
    </ul>
    <div id='userlogin'><li class='nav-item dropdown'><div>
    <a class='nav-link txtlogin' href='user.php' aria-haspopup='true' aria-expanded='false'>".             
    '<img id="imgfreelogin" src="'.$dir.'">' . $_SESSION['email']."</a>
    <div class='dropdown-menu' aria-labelledby='dropdown01'>
    <a class='dropdown-item' href='user.php?user_ref=$_SESSION[id]'>Мой флашкардс</a>
    <a class='dropdown-item' href='opciones.php?my_settings=$_SESSION[id]        
    '>opciones</a>
    <a class='dropdown-item' href='close.php'>Закрыть сессия</a>
    </div> </li> </div>";
}else if (!isset($_SESSION['email'])) {
    /* NAV HTML if user is not logged */
    echo '
    <ul class="navbar-nav ms-auto">
    <li class="Loginbutton nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="login.php">Войти</a></li>
    <li class="RegisterButton nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="register.php">Создать аккаут</a></li>
    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.php">Главная</a></li>
    </ul>
    ';
        }
    ?>
<?php if (isset($_SESSION['admin'])) {
    /* NAV HTML if user is admin */
    echo '
    <ul class="navbar-nav ms-auto">
    <li class="Loginbutton nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="soporte.php">Сообщения</a></li>
    <li class="Loginbutton nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="admin/addmem.php">Новий членство</a></li>
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
                <h1>УСЛОВИЯ И ПОЛОЖЕНИЯ</h1><br><br>

<!-- Privacy politics-->
<p> Настоящая Политика конфиденциальности устанавливает условия, в которых Bit By Bit использует и защищает информацию, предоставляемую ее пользователями при использовании ее веб-сайта. Эта компания заботится о безопасности данных своих пользователей. Когда мы просим вас заполнить поля личной информации, с помощью которой вы можете быть идентифицированы, мы делаем это, гарантируя, что она будет использоваться только в соответствии с условиями этого документа. Однако эта Политика конфиденциальности может со временем меняться или обновляться, поэтому мы рекомендуем и подчеркиваем, что вы постоянно просматриваете эту страницу, чтобы убедиться, что вы согласны с указанными изменениями. </p> <br>

<h2> Собираемая информация </h2> <br> <br>

<p> Наш веб-сайт может собирать личную информацию, такую ​​как: имя, контактная информация, такая как ваш адрес электронной почты и демографические данные. Аналогичным образом, при необходимости может потребоваться конкретная информация для обработки заказа, доставки или выставления счетов. <p> <br>

<h2> Использование собранной информации </h2> <br> <br>

<p> Наш веб-сайт использует информацию для обеспечения наилучшего обслуживания, в частности, для ведения реестра пользователей, заказов, если это применимо, и улучшения наших продуктов и услуг. Возможно, что через наш сайт будут периодически отправляться электронные письма со специальными предложениями, новыми продуктами и другой рекламной информацией, которую мы считаем актуальной для вас или которая может принести вам пользу, эти электронные письма будут отправлены на указанный вами адрес и могут быть отменен. в любое время. </p> <br>

<p> Bit By Bit прилагает все усилия для обеспечения безопасности вашей информации. Мы используем самые современные системы и постоянно обновляем их, чтобы исключить несанкционированный доступ. </p> <br>

<h2> Изображение загружено с авторским правом </h2> <br> <br>

<p> Bit by Bit отделяется от любого сохраненного изображения через фотографию профиля. Это будет исключительная ответственность пользователя, который загружает его. Если вы являетесь компанией, физическим или юридическим лицом, пострадавшим от этого, свяжитесь с нами по адресу aprendeinglesproyect@gmail.com для немедленного устранения </p> <br>

<h2> Удаление учетной записи </h2> <br> <br>

<p> Все аккаунты, связанные с учреждением или пользователем, могут быть удалены без предварительного уведомления через 1 месяц и 5 дней задержки оплаты членства. Однако они не будут полностью удалены, но к ним можно будет получить доступ, если в течение следующих 5 рабочих дней учреждение или лицо оплатит членство. </p> <br>

<h2> Ссылки на третьи стороны </h2> <br> <br>

<p> Этот веб-сайт может содержать ссылки на другие сайты, которые могут вас заинтересовать. После того, как вы нажмете на эти ссылки и покинете нашу страницу, мы больше не сможем контролировать сайт, на который вы перенаправлены, и поэтому мы не несем ответственности за условия, конфиденциальность или защиту ваших данных на этих сторонних сайтах. На эти сайты распространяются собственные политики конфиденциальности, поэтому рекомендуется проконсультироваться с ними, чтобы подтвердить свое согласие с ними. </p> <br>

<h2> Контроль вашей личной информации </h2> <br> <br>

<p> В любое время вы можете ограничить сбор или использование личной информации, предоставляемой на нашем веб-сайте. Каждый раз, когда вас просят заполнить форму, например, для регистрации пользователя, вы можете установить или снять флажок для получения информации по электронной почте. Если вы отметили возможность получать нашу рассылку новостей или рекламу, вы можете отменить ее в любое время. </p> <br>

<p> Эта компания не будет продавать, переуступать или распространять собранную личную информацию без вашего согласия, за исключением случаев, когда этого требует судья по постановлению суда. </p> <br>

<p> Bit By Bit It оставляет за собой право изменять условия настоящей Политики конфиденциальности в любое время. </p> 
    </body>
</html>
