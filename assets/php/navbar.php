      <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]; ?>
      <?php 
            include($IPATH . "/assets/php/allstyle.html");
      ?>
       
       <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">PNL STUDIO</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="sale.php">Sale</a></li>
                        <li class="nav-item"><a class="nav-link" href="workshop.php">Workshops</a></li>
                    <!--<li class="nav-item"><a class="nav-link" href="#contact">Tariffe</a></li>-->
                        <li class="nav-item"><a class="nav-link" href="prenota.php">Prenota</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-otuline-light" type="submit">
                            <i class="bi-cart-fill me-1 text-white" ></i>
                            <span class = "text-white" >Cart</span>
                            <span class="badge bg-white text-dark ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h6 class="text-white font-weight-bold piccolo">PNL Studio</h6>
                        <h1 class="text-white font-weight-bold grande">Home</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <!--<p class="text-white-75 mb-5">Scopri chi siamo</p>-->
                        <a class="btn btn-primary btn-xl" href="login.php">Sign in/Sign up</a>
                    </div>
                </div>
            </div>
        </header>