<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <?php include_once('database.php'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Головна сторінка</title>
</head>

<body>

    <?php 
include("navbar.php");
createNavbar(">Головна");
?>

    <div class="container">
        <div class="main">
            <div class="row justify-content-center">
                <div class="col-3 category allpad">
                    <ul class="list-unstyled">
                        <li><a>Категорія 1</a></li>
                        <li><a>Категорія 2</a></li>
                        <li><a>Категорія 3</a></li>
                        <li><a>Категорія 4</a></li=>
                        <li><a>Категорія 5</a></li>
                        <li><a>Категорія 6</a></li>
                        <li><a>Категорія 7</a></li>
                    </ul>
                </div>
                <div class="col-7 category allpad">
                    <div class="row nested">
                        <div class="col-4">
                            <a>Підкатегорія 1</a>
                        </div>
                        <div class="col-4">
                            <a>Підкатегорія 2</a>
                        </div>
                        <div class="col-4">
                            <a>Підкатегорія 3</a>
                        </div>
                        <div class="col-4">
                            <a>Підкатегорія 4</a>
                        </div>
                        <div class="col-4">
                            <a>Підкатегорія 5</a>
                        </div>
                        <div class="col-4">
                            <a>Підкатегорія 6</a>
                        </div>
                        <div class="col-4">
                            <a>Підкатегорія 7</a>
                        </div>
                        <div class="col-4">
                            <a>Підкатегорія 8</a>
                        </div>
                        <div class="col-4">
                            <a>Підкатегорія 9</a>
                        </div>


                    </div>
                </div>
            </div>
            <div class="row">
                <div class="container allpad center" style="font-size: 20px;">Популярні товари</div>
            </div>
            <div class="row">

                <div class="col">
                    <div class="card">
                        <img src="" class="card-img-top" style="height: 220px" />
                        <div class="card-body">
                            <h5 class="card-title">Назва</h5>
                            <h6 class="card-subtitle">123.50 грн</h6>
                            <p class="card-text">
                                Опис пігулок
                            </p>
                            <a href="" class="btn
                        btn-outline-primary">Придбати</a>
                        </div>
                        <div class="card-footer">
                            Виробник
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <img src="" class="card-img-top" style="height: 220px" />
                        <div class="card-body">
                            <h5 class="card-title">Назва</h5>
                            <h6 class="card-subtitle">123.50 грн</h6>
                            <p class="card-text">
                                Опис пігулок
                            </p>
                            <a href="" class="btn
                        btn-outline-primary">Придбати</a>
                        </div>
                        <div class="card-footer">
                            Виробник
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <img src="" class="card-img-top" style="height: 220px" />
                        <div class="card-body">
                            <h5 class="card-title">Назва</h5>
                            <h6 class="card-subtitle">123.50 грн</h6>
                            <p class="card-text">
                                Опис пігулок
                            </p>
                            <a href="" class="btn
                        btn-outline-primary">Придбати</a>
                        </div>
                        <div class="card-footer">
                            Виробник
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-3 align-self-center">2021, APT. Всі права захищені</div>
                <div class="col-5"></div>

                <div class="col-1 align-self-end">
                    <div class="row justify-content-end">
                        <a href="#">
                            <h3><i class="fab fa-instagram"></i></h3>
                        </a>
                    </div>
                </div>


                <div class="col-1 align-self-center">Instagram</div>

                <div class="col-1 align-self-end">
                    <div class="row justify-content-end">
                        <a href="#">
                            <h3><i class="fab fa-telegram"></i></h3>
                        </a>
                    </div>
                </div>


                <div class="col-1 align-self-center">Telegram</div>

            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>