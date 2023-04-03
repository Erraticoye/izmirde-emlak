<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
          integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/headerstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>404 - Sayfa Bulunamadı</title>
</head>
<body>
<div class="position-absolute top-50 start-50 translate-middle text-center">
    <h1>404 - Sayfa Bulunamadı</h1>
    <p>Aradığınız <?php echo basename($_SERVER['REQUEST_URI']); ?> adlı sayfa artık buralarda yok. Belkide hiç olmadı</p>
    <button class="btn btn-primary" onclick="window.history.back();">Eski Sayfaya Dön</button>
</div>
<div class="fixed-bottom d-flex justify-content-between border-top border-3 bg-secondary align-items-center" style="border-color: #535353">
    <div class="px-5 text-light"><a class="text-decoration-none text-light" href="../index.php">Anasayfaya Dön</a></div>
    <div class="ml-auto px-5 text-light">
        <p>İzmir'de Emlak</p>
    </div>
</div>
</body>
</html>