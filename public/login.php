<?php
require __DIR__ . './../src/Entity/autoloader.php';

$security = new Security();
$loginMessage = $security->doLogin();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link href="css/login.css" rel="stylesheet" media="all">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Permanent+Marker&display=swap" rel="stylesheet">

    <title>Legendary Motorsport</title>
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-180 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title"><span class="titleWhite">L</span>egendary <span class="titleWhite">M</span>otorsport</h2>
                    <div class = "error">
                    <?= $loginMessage ?>
                    </div>      
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="email" name="userName" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Contraseña</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="password" name="userPassword" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="p-l-50"><button class="btn btn--radius-2 btn--red" type="submit">Login</button>
                        </div>
                        <div class="p-t-100">
                            <label class="label label--block">Si no dispone de cuenta regístrese<a class="enlaces" href="register.html"><span class="color_enlace"> aquí</a></span></label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
    <script src="js/global.js"></script>
    <script>

    </script>
</body>

</html>