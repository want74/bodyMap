<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>BodyMap</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/base.css">
</head>

<body style="background: black">


    <!--HEADER-->
    <nav class="navbar">
        <a class="navbar-brand" href="#"><img src="img/logo.svg"></a>
    </nav>


    <!--Content-->
    <div class="col">
        <div class="row d-flex" style="height: 30vh;margin-top: 20vh">
            <div class="col-3 mx-auto zelLine">
                <div class="row" style="height:400px;background:#353535;">
                    <div class="col">
                        <div class="row mt-4">
                            <div class="col d-flex">
                                <img src="img/logoVert.svg" class="mx-auto" style="width:45%">
                            </div>
                        </div>
                        <form action="reg_insert.php" method="post">
                            <div class="row my-4">
                                <div class="col d-flex">
                                    <input class="mx-auto form-control input" type="email" placeholder="Введите ваш E-mail" name="mail">
                                </div>
                            </div>
                            <div class="row my-4">
                                <div class="col d-flex">
                                    <input class="mx-auto form-control input" type="password" placeholder="Введите пароль" name="pass">
                                    <?php
                                        echo '<input class="mx-auto form-control input d-none" type="text" name="muscle" value="'. $_GET['query'].'"> '
                                    ?>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col d-flex">
                                    <button class="btn btn-success mx-auto">Зарегистрироваться</button>
                                </div>
                            </div>                                                        
                            <div class="row d-flex">
                                <?php
                                    echo '<a href="auth.php?query='.$_GET['query'].'" class="mx-auto">Есть аккаунт?</a>';
                                ?>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script>

    </script>
</body>

</html>
