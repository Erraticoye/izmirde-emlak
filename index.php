<!doctype html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
          integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/headerstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/indexstyle.css">
    <title>İzmir'de Emlak - Anasayfa</title>
</head>
<body>
<?php include "header.php" ?>
<header>
    <div class="text-center pt-4 mt-4 px-4 border-bottom">
        <h1 class="display-4 fw-bold"> İzmir'de Emlak</h1>
        <div class="col-lg-6 mx-auto">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet dignissimos doloribus facere libero
                molestiae neque, nesciunt omnis quas quo quod ratione sapiente tempore tenetur. Assumenda
                debitis ipsam pariatur quis quo?</p>
        </div>
    </div>
</header>
<h2 class="text-center display-6 p-2 fw-semibold">Yeni Evlerden İlk Sizin Haberiniz Olsun</h2>
<div class="col-lg-6 p-4 mx-auto pt-3 border border-1 rounded-5">
<form action="abonelik.php" method="post">
    <div class="mb-3">
        <label for="isim" class="form-label">İsminiz</label>
        <input type="Name" id="isim" class="form-control" aria-describedby="Name" required name="isim">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">E-posta Adresiniz</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="eposta" required>
        <div id="emailHelp" class="form-text">E-posta adresinizi asla başkalarıyla paylaşmayız.</div>
    </div>
    <label for="ilce" class="form-label">İlçe</label>
    <div class="mb-3 row">
        <div class="col">
            <select name="ilce" id="ilce" required class="form-select">
                <option value="" selected disabled>İlçe Seçiniz</option>
                <option value="1">Aliağa</option>
                <option value="2">Balçova</option>
                <option value="3">Bayındır</option>
                <option value="4">Bayraklı</option>
                <option value="5">Bergama</option>
                <option value="6">Beydağ</option>
                <option value="7">Bornova</option>
                <option value="8">Buca</option>
                <option value="9">Çeşme</option>
                <option value="10">Çiğli</option>
                <option value="11">Dikili</option>
                <option value="12">Foça</option>
                <option value="13">Gaziemir</option>
                <option value="14">Güzelbahçe</option>
                <option value="15">Karabağlar</option>
                <option value="16">Karaburun</option>
                <option value="17">Karşıyaka</option>
                <option value="18">Kemalpaşa</option>
                <option value="19">Kınık</option>
                <option value="20">Kiraz</option>
                <option value="21">Konak</option>
                <option value="22">Menderes</option>
                <option value="23">Menemen</option>
                <option value="24">Narlıdere</option>
                <option value="25">Ödemiş</option>
                <option value="26">Seferihisar</option>
                <option value="27">Selçuk</option>
                <option value="28">Tire</option>
                <option value="29">Torbalı</option>
                <option value="30">Urla</option>
            </select>
        </div>
        <div class="col">
            <label class="form-label"></label>
            <button type="submit" class="btn btn-primary">Abone Ol</button>
        </div>
    </div>
</form>
</div>
</body>
</html>