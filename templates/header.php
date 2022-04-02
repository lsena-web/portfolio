<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Meu portfólio - Lucas sena</title>
    <meta content="programação, desenvolvimento, dev, engenheiro de software, programador " name="keywords">
    <meta name="description" content="Meu portfólio, onde você verá um pouco do meu trabalho e habilidades.">

    <link rel="canonical" href="https://lucas.artesaoweb.com/">

    <meta name="author" content="Lucas Sena">
    <meta name="robots" content="index, nofollow">

    <!-- GOOGLE+ -->
    <meta itemprop="name" content="Meu portfólio - Lucas Sena">
    <meta itemprop="description" content="Meu portfólio, onde você verá um pouco do meu trabalho e habilidades.">
    <meta itemprop="image" content="assets/img/l1.webp">
    <link href="https://lucas.artesaoweb.com/" rel="publisher">

    <!-- FACEBOOK -->
    <meta property="og:title" content="Meu portfólio - Lucas Sena">
    <meta property="og:description" content="Meu portfólio, onde você verá um pouco do meu trabalho e habilidades.">
    <meta property="og:url" content="https://lucas.artesaoweb.com/">
    <meta property="og:site_name" content="Meu portfólio - Lucas Sena">
    <meta property="og:type" content="website">
    <meta property="og:image" content="assets/img/l1.webp">

    <!-- TWITTER -->
    <meta name="twitter:title" content="Meu portfólio - Lucas Sena">
    <meta name="twitter:description" content="Meu portfólio, onde você verá um pouco do meu trabalho e habilidades.">
    <meta name="twitter:url" content="assets/img/l1.webp">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:image" content="assets/img/l1.webp">
    <meta name="twitter:creator" content="@Lucas Sena">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Favicons -->
    <link href="assets/img/favicon-lucas.webp" rel="icon">
    <link href="assets/img/icon-lucas.webp" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <script src="assets/js/recaptch.js"></script>

</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <img src="assets/img/l1.webp" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="#">Lucas sena</a></h1>
                <div class="social-links mt-3 text-center">
                    <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a> -->
                    <a href="https://api.whatsapp.com/send?phone=5588981754649" class="google-plus" target="blank"><i class="bi bi-whatsapp"></i></a>
                    <a href="https://www.linkedin.com/in/dami%C3%A3o-lucas-alencar-de-sena-974a6416b/" class="linkedin" target="blank"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>
            <nav id="navbar" class="nav-menu navbar">
                <ul>
                    <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') : ?>
                        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i>
                                <span>Home</span></a></li>
                        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Sobre</span></a>
                        </li>
                        <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i>
                                <span>Resumo</span></a></li>
                        <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                                <span>Portfólio</span></a></li>
                        <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i>
                                <span>Serviços</span></a></li>
                        <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i>
                                <span>Contato</span></a></li>
                    <?php else :  ?>
                        <a href="index.php" class="nav-link scrollto active"><i class="bx bx-home"></i>
                            <span>Home</span></a></li>
                    <?php endif; ?>


                    <?php if (isset($_GET['send']) && $_GET['send'] == 'success') : ?>

                        <div class="alert alert-success p-1" role="alert">
                            Mensagem enviada com sucesso!
                        </div>

                    <?php endif; ?>

                    <?php if (isset($_GET['send']) && $_GET['send'] == 'error') : ?>

                        <div class="alert alert-danger p-1" role="alert">
                            Erro no envio, tente novamente! ou entre em contato pelo o Whatsapp.
                        </div>

                    <?php endif; ?>
                </ul>
            </nav><!-- .nav-menu -->
        </div>
    </header><!-- End Header -->