<?php include('header.php'); ?>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                      <a class="page-scroll" href="#services">Áreas de diseño</a>
                    </li>
                    <li>
                      <a class="page-scroll" href="#portfolio">Proyectos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">¿Quién soy?</a>
                    </li>

                    <li>
                        <a class="page-scroll" href="#contact">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>

        <div class="container">
            <div class="intro-text">
              <div class="intro-lead-in">Fernanda Larraín Yunge</div>
                <div class="intro-heading">Diseño&ilustración</div>

            </div>
        </div>
    </header>



    <!-- Services Section -->
    <?php include('services.php'); ?>

    <!-- Preview de todos los proyectos -->
    <?php include('portfolio.php'); ?>

    <!-- About Section -->
    <?php include('about.php'); ?>

    <!-- Contact Section -->
    <?php include('contact.php'); ?>

    <!-- Footer Section -->
    <?php include('footer.php'); ?>


    <!-- Portfolio Modals -->
<?php include('modals.php') ?>





    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>
