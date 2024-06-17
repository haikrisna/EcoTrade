<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Deskripsi singkat tentang halaman web.">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="C:/GEMASTIK/Frontend/Permintaan Pesanan User/style/main.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="C:/GEMASTIK/Frontend/Permintaan Pesanan User/assets/icon/NavBar/logo.svg" alt="Logo" style="width: 200px; height: 63.31px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-custom">
                    <div class="search-container">
                        <form class="d-flex align-items-center">
                            <input class="form-control me-2" type="search" placeholder="Search something here" aria-label="Search">
                            <button class="btn filter-btn" aria-label="Filter">
                                <img src="C:/GEMASTIK/Frontend/Permintaan Pesanan User/assets/icon/NavBar/filter.svg" alt="Filter">
                            </button>
                        </form>
                    </div>
                    <div class="notification-container">
                        <a href="#" style="display: inline-block;">
                            <img src="C:/GEMASTIK/Frontend/Permintaan Pesanan User/assets/icon/NavBar/notification.svg" alt="Notifikasi" style="width: 45px; height: 45px;">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- End of Navbar -->

    <!-- Sidebar -->
    <div class="sidebar-container">
        <div class="m-a-i">MAIN MENU</div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#">
                    <img src="C:\GEMASTIK\Frontend\Permintaan Pesanan User\assets\icon\SideBar\home.svg" alt="Dashboard" style="width: 20px; height: 20px; margin-right: 10px;">
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pesanan-link" href="#">
                    <img src="C:\GEMASTIK\Frontend\Permintaan Pesanan User\assets\icon\SideBar\car.svg" alt="Pesanan" style="width: 20px; height: 20px; margin-right: 10px;">
                    Pesanan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <img src="C:\GEMASTIK\Frontend\Permintaan Pesanan User\assets\icon\SideBar\chart.svg" alt="Statistik" style="width: 20px; height: 20px; margin-right: 10px;">
                    Statistik
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <img src="C:\GEMASTIK\Frontend\Permintaan Pesanan User\assets\icon\SideBar\wallet.svg" alt="Dompet" style="width: 20px; height: 20px; margin-right: 10px;">
                    Dompet
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <img src="C:\GEMASTIK\Frontend\Permintaan Pesanan User\assets\icon\SideBar\calendar.svg" alt="Riwayat Transaksi" style="width: 20px; height: 20px; margin-right: 10px;">
                    Riwayat Transaksi
                </a>
            </li>
            <div class="p-r-e">P R E F E R E N C E S</div>
            <li class="nav-item pengaturan">
                <a class="nav-link" href="#">
                    <img src="C:\GEMASTIK\Frontend\Permintaan Pesanan User\assets\icon\SideBar\setting.svg" alt="Pengaturan" style="width: 20px; height: 20px; margin-right: 10px;">
                    Pengaturan
                </a>
            </li>
        </ul>
    </div>
    <!-- End of Sidebar -->
</body>
</html>
