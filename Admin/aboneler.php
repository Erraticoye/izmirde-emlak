<?php include "assets/PHP/headcodes.php"?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Aboneler</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="position: static;z-index: 4;">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>İzmir'de Emlak</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="../../../OneDrive/Masaüstü/admin/index.html"><i class="fas fa-tachometer-alt"></i><span>Ana Sayfa</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="../../../OneDrive/Masaüstü/admin/profil.html"><i class="fas fa-user"></i><span>Profil</span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="aboneler.html"><i class="fas fa-table"></i><span>Aboneler</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="../../../OneDrive/Masaüstü/admin/giris.html"><i class="far fa-user-circle"></i><span>Giriş</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 12, 2019</span>
                                                <p>A new monthly report is ready to download!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 7, 2019</span>
                                                <p>$290.29 has been deposited into your account!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 2, 2019</span>
                                                <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">7</span><i class="fas fa-envelope fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="../../../OneDrive/Masaüstü/admin/assets/img/avatars/avatar4.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                                <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="../../../OneDrive/Masaüstü/admin/assets/img/avatars/avatar2.jpeg">
                                                <div class="status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                                <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="../../../OneDrive/Masaüstü/admin/assets/img/avatars/avatar3.jpeg">
                                                <div class="bg-warning status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                                <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="../../../OneDrive/Masaüstü/admin/assets/img/avatars/avatar5.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                                                <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Admin İsmi</span><img class="border rounded-circle img-profile" src="../../../OneDrive/Masaüstü/admin/assets/img/avatars/avatar1.jpeg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Aboneler</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Aboneler Listesi</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable">
                                        <label class="form-label">Şu kadar Göster&nbsp;
                                            <?php
                                                if (isset($_GET['sirala'])) {
                                                    $sirala = $_GET['sirala'];
                                                    ?>
                                                    <select class="d-inline-block form-select form-select-sm" id="sirala">
                                                        <option value="10" <?php if ($sirala == 10){echo 'selected=""';} ?>>10</option>
                                                        <option value="25" <?php if ($sirala == 25){echo 'selected=""';} ?>>25</option>
                                                        <option value="50" <?php if ($sirala == 50){echo 'selected=""';} ?>>50</option>
                                                        <option value="100" <?php if ($sirala == 100){echo 'selected=""';} ?>>100</option>
                                                    </select>
                                                <?php
                                                } else {
                                                    ?>
                                                    <select class="d-inline-block form-select form-select-sm" id="sirala">
                                                        <option value="10" selected="">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select>
                                                <?php
                                                }
                                            ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Kişi Ara"></label></div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>İsim</th>
                                            <th>İlçe</th>
                                            <th>E-posta</th>
                                            <th>Abonelik Tarihi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <!-- Tablo İçi -->
                                    <!-- Örnek Kullanım:
                                     <tr>
                                        <td>İsim</td>
                                        <td>İlçe</td>
                                        <td>Abonelik Tarihi</td>
                                    </tr>
                                     -->
                                    <?php
                                        if (isset($_GET['sirala'])) {
                                            $aboneler = abone_getir($con);
                                            foreach ($aboneler as $abone) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $abone['İsim_Soyisim']; ?></td>
                                                    <td><?php echo $abone['ilce']; ?></td>
                                                    <td><?php echo $abone['E-posta']; ?></td>
                                                    <td><?php echo $abone['abone_tarih']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        } else {
                                            $aboneler = $db->prepare("SELECT * FROM aboneler ORDER BY abone_id DESC LIMIT 10");
                                            $aboneler->execute();
                                            $abonecek = $aboneler->fetchAll(PDO::FETCH_ASSOC);
                                            foreach ($abonecek as $row) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['abone_isim']; ?></td>
                                                    <td><?php echo $row['abone_ilce']; ?></td>
                                                    <td><?php echo $row['abone_tarih']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                    ?>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Tokyo</td>
                                            <td>2008/11/28</td>
                                        </tr>
                                        <tr>
                                            <td>Angelica Ramos</td>
                                            <td>London</td>
                                            <td>2009/10/09<br></td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>San Francisco</td>
                                            <td>2009/01/12<br></td>
                                        </tr>
                                        <tr>
                                            <td>Bradley Greer</td>
                                            <td>London</td>
                                            <td>2012/10/13<br></td>
                                        </tr>
                                        <tr>
                                            <td>Brenden Wagner</td>
                                            <td>San Francisco</td>
                                            <td>2011/06/07<br></td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>New York</td>
                                            <td>2012/12/02<br></td>
                                        </tr>
                                        <tr>
                                            <td>Bruno Nash<br></td>
                                            <td>London</td>
                                            <td>2011/05/03<br></td>
                                        </tr>
                                        <tr>
                                            <td>Caesar Vance</td>
                                            <td>New York</td>
                                            <td>2011/12/12<br></td>
                                        </tr>
                                        <tr>
                                            <td>Cara Stevens</td>
                                            <td>New York</td>
                                            <td>2011/12/06<br></td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Edinburgh</td>
                                            <td>2012/03/29<br></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td><strong>İsim</strong></td>
                                            <td><strong>İlçe</strong></td>
                                            <td><strong>Abonelik Tarihi</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">27 Kişi İçinden 1'den 10'a Kadar</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="assets/js/aboneler.js"></script>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Telif Hakkı © İzmir'de Emlak</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="../../../OneDrive/Masaüstü/admin/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../../OneDrive/Masaüstü/admin/assets/js/theme.js"></script>
</body>

</html>