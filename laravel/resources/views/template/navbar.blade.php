<body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="">E-Dompet</a>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                </div>
            </form>
            <!-- Navbar-->
           <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item">
                    <form action="/logout" method="post">
                        @csrf
                        <button class="dropdown-item text-white nav-item" type="submit"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</button>
                    </form>
                </li>
            </ul>
        </nav>
            <div id="layoutSidenav">
                <div id="layoutSidenav_nav">
                    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <p class="navbar-brand ps-3">Hai, {{ auth()->user()->name }}</p>
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{ route('dashboard') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Fitur</div>
                            <a class="nav-link" href="{{ route('dataPemasukan') }}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-face-grin-beam"></i></div>
                                Data Pemasukan
                            </a>
                            <a class="nav-link" href="{{ route('dataPengeluaran') }}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-face-sad-cry"></i></div>
                                Data Pengeluaran
                            </a>
                            <div class="sb-sidenav-menu-heading">
                                Report
                            </div>
                            <a class="nav-link" href="{{ route('formLaporan') }}">
                                <div class="sb-nav-link-icon"><i class="fa-regular fa-clipboard"></i></div>
                                Laporan
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Credit by :</div>
                        Farora
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"></li>
                        </ol>
            