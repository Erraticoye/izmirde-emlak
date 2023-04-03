<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Giriş Yap</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
</head>

<body class="bg-gradient-primary">

    <?php
    session_start();

    include("assets/php/connection.php");
    include("assets/php/functions.php");


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $eposta = $_POST['e-posta'];
        $parola = $_POST['parola'];

        if(!empty($eposta) && !empty($parola))
        {

            //read from database
            $query = "select * from admin_kullanıcılar where E_posta = '$eposta' limit 1";
            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);
                    if($user_data['Parola'] === md5($parola))
                    {
                        $_SESSION['id'] = $user_data['id'];
                        if (isset($_POST['beni_hatırla'])){
                            setcookie("pass", md5($user_data['id']), time() + 3600, "/", secure: true, httponly: true);
                            setcookie("email", $user_data['E_posta'], time() + 3600, "/", secure: true, httponly: true);
                            setcookie("id", $user_data['Parola'], time() + (60*60*24*30), "/", secure: true, httponly: true);
                        }
                        if (isset($_GET['yonlendir'])){
                            header("Location: " . $_GET['yonlendir']);
                            die;
                        }
                        else{
                            header("Location: index.php");
                            die;
                        }
                    }
                }
            }
            ?>
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Hata!</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Hatalı Kullanıcı Adı veya Parola!
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tamam</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }else
        {
            ?>
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Hata!</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Hatalı Kullanıcı Adı veya Parola!
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tamam</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
    }
    ?>

    <div class="container d-xl-flex justify-content-center align-items-center m-auto justify-content-xl-center align-items-xl-center" style="position: relative;">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5" style="width: 563px;">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-auto col-lg-6 col-xl-12 offset-xl-0">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Merhabalar!</h4>
                                    </div>
                                    <form class="user" action="#" method="post" autocomplete="on">
                                        <div class="mb-3"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="E-posta" name="e-posta" autofocus=""></div>
                                        <div class="mb-3"><input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Parola" name="parola"></div>
                                        <div class="mb-3">
                                            <div class="custom-control custom-checkbox small">
                                                <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1" name="beni_hatırla"><label class="form-check-label custom-control-label" for="formCheck-1">Beni Hatırla</label></div>
                                            </div>
                                        </div><button class="btn btn-primary d-block btn-user w-100" type="submit">Giriş</button>
                                    </form>
                                    <div class="text-center"></div>
                                    <div class="text-center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>