<?php
require("./poo/app/Config.inc.php");
$sessao = new Session;
?>
<!DOCTYPE html>
<html lang="pt-br" itemscope itemtype="https://schema.org/WebPage">

<head>
    <!--METAS DA PAGINA-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= $pg_titulo ?></title>
    <meta name="description" content="<?= strip_tags($pg_descricao); ?>" />
    <meta name="robots" content="index, follow" />
    <meta name="author" content="<?= SITENOME; ?>" />
    <link rel="canonical" href="<?= $pg_url; ?>" />
    <link rel="base" href="<?= HOME; ?>" />

    <!--[if lt IE 9]>
          <script src="<?= HOME; ?>js/html5shiv.js"></script>
        <![endif]-->

    <!--AUTORAÇÃO DA PAGINA-->
    <link rel="author" href="<?= $pg_autor; ?>" />
    <link rel="publisher" href="<?= $pg_empresa; ?>" />

    <!--SEO GENERICO PARA TODAS AS MIDIAS CONFIGURADO PARA O MICROFORMATO-->
    <meta itemprop="name" content="<?= $pg_titulo; ?>" />
    <meta itemprop="description" content="<?= strip_tags($pg_descricao); ?>" />
    <meta itemprop="image" content="<?= $pg_imagem; ?>" />
    <meta itemprop="url" content="<?= $pg_url; ?>" />

    <!--SEO OG PARA FACEBOOK-->
    <meta property="og:type" content="Article" />
    <meta property="og:title" content="<?= $pg_titulo; ?>" />
    <meta property="og:description" content="<?= strip_tags($pg_descricao); ?>" />
    <meta property="og:image" content="<?= $pg_imagem; ?>" />

    <meta property="og:image:secure_url" content="<?= $pg_imagem; ?>" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="800" />
    <meta property="og:image:height" content="418" />

    <meta property="og:url" content="<?= $pg_url; ?>" />
    <meta property="og:site_name" content="<?= $pg_titulo; ?>" />
    <meta property="og:locale" content="pt_BR" />

    <!--SEO card PARA twitter-->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@dreamkid_studio" />
    <meta name="twitter:title" content="<?= SITENOME; ?>" />
    <meta name="twitter:description" content="<?= strip_tags($pg_descricao); ?>" />
    <meta name="twitter:image" content="<?= $pg_imagem; ?>" />

    <!--IDENTIFICADORES-->
    <meta property="article:author" content="<?= SITENOME; ?>" />
    <meta property="article:publisher" content="<?= SITENOME; ?>" />

    <meta charset="UTF-8">
    <meta name="description" content="uza - Model Agency HTML5 Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="<?= HOME; ?>imagens_fixas/favicon.png" />
    <link rel="alternate" type="application/rss+xml" title="<?= SITENOME; ?> RSS/Feed" href="<?= HOME; ?>rss.xml" />
    <link rel="stylesheet" href="<?= HOME; ?>poo/css/reset.css" />
    <link rel="stylesheet" href="./poo/css/home.css">

    <?php include('poo/css.php'); ?>
    <?php include('poo/js.php'); ?>
    <script type="text/javascript" src="<?= HOME; ?>poo/js_code.js"></script>
    <script src="<?= HOME; ?>/poo/modernizr-2.8.3.min.js"></script>

    <title><?= SITENOME; ?></title>
</head>

<body>
    <div id="preloader">
        <div class="wrapper">
            <div class="cssload-loader"></div>
        </div>
    </div>

    <!-- ***** Top Search Area Start ***** -->
    <div class="top-search-area">
        <!-- Search Modal -->
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close Button -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
                        <!-- Form -->
                        <form action="index.php" method="post">
                            <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="uzaNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.php">
                        <h2>SIS Curriculo</h2>
                    </a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>
                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <!--<li class="current-item"><a href="./index.php">Home</a></li> -->


                                <li><a href="#">Curriculos</a>
                                    <ul class="dropdown">

                                        <li><a href="view/new-request.php">Cadastrar </a></li>
                                        <li><a href="report-mensal.php">Buscar</a></li>

                                    </ul>
                                </li>
                                <li><a href="#">Ajustes</a>
                                    <ul class="dropdown">

                                        <li><a href="incluir-modelo.php">Alterar Cadastro</a></li>
                                        <li><a href="incluir-postos.php">Instrucoes</a></li>

                                    </ul>
                                </li>
                                <li><a style="color: red" href="model/login/sair.php">Logout</a></li>
                            </ul>




                        </div>


                        <!-- Nav End -->

                    </div>
                </nav>
            </div>
        </div>
    </header>
    <?php include('modais.php'); ?>
    <!--
        ===========================================================================================================================================
            TITULO DA PAGINA: INDEX.PHP(PAGINA INICIAL)
            CRIADA EM: ABRIL 2019
            DESENVOLVIDA POR: JOÃO OLIVEIRA            
        ===========================================================================================================================================
        -->

    <?php
        require("{$atual}.php");
        //para outras páginas apenas recuperar por  $atual[1], $atual[2]
        ?>

</body>
<script src="js/jquery.min.js"></script>
<!-- Popper js -->
<script src="./poo/css/js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="./poo/css/js/bootstrap.min.js"></script>
<!-- All js -->
<script src="./poo/css/js/uza.bundle.js"></script>
<!-- Active js -->
<script src="./poo/css/js/default-assets/active.js"></script>

<script src="./poo/css/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./poo/css/js/vendor/jquery-ui.js"></script>
<script src="./poo/css/js/vendor/bootstrap.min.js"></script>

<script src="./poo/css/js/owl.carousel.min.js"></script>
<script src="./poo/css/js/contact-form.js"></script>
<script src="./poo/css/js/ajaxchimp.js"></script>
<script src="./poo/css/js/scrollUp.min.js"></script>
<script src="./poo/css/js/magnific-popup.min.js"></script>
<script src="./poo/css/js/wow.min.js"></script>

<script src="./poo/css/js/main.js"></script>
<script src="./poo/css/js/check.js"></script>

<script>
    document.getElementById("datou").value = new Date().getFullYear();

</script>

</html>
