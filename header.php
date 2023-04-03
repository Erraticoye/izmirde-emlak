<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container">
        <a href="index.php" class="navbar-brand">
            <img src="img/logo.svg" width="50px" weight="100px" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a href="index.php" class="nav-link">Ana Sayfa</a>
            </li>
            <li class="nav-item">
                <a href="emlak.php" class="nav-link">Emlak</a>
            </li>
            <li class="nav-item">
                <a href="hakkimizda.php" class="nav-link">Hakkımızda</a>
            </li>
            <li class="nav-item">
                <a href="iletisim.php" class="nav-link">İletişim</a>
            </li>
        </ul>
        <form class="d-flex">
            <label class="visually-hidden" for="inlineFormInputGroupUsername">Arama</label>
            <input type="text" class="form-control" id="AramaKutusu" placeholder="Arama">
            <button type="submit" class="btn btn-success" id="AramaButonu">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </form>
    </div>
</nav>