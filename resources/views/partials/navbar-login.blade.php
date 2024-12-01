<nav class="navbar navbar-expand-lg text-uppercase fixed-top" id="mainNav" style="background-color: #1e789c">
    <div class="container">
        <a href="#page-top" class="js-scroll-trigger"><img class="navbar-brand" src="/assets/user/img/klinik_logo.png" height="65px" /></a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1">
                    <span class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger text-white" href="#">Selamat Datang, {{ explode(" ",auth('web')->user()->nama)[0] }}</span>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/logout">Logout</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#bantuan">Bantuan</a>
                </li>
            </ul>
        </div>
    </div>
</nav>