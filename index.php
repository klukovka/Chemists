<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
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
if(!file_exists("chemists.db")){
$db = new SQLite3("chemists.db");
$db->enableExceptions(true);

$sql = "CREATE TABLE feedback (
    id_feedback INTEGER PRIMARY KEY AUTOINCREMENT,
    uName TEXT NOT NULL, 
    uEmail TEXT NOT NULL, 
    uMessage TEXT NOT NULL)";
$db->query($sql);

$sql = "CREATE TABLE cathegory (
    id_category INTEGER PRIMARY KEY AUTOINCREMENT,
    title TEXT NOT NULL)";
$db->query($sql);


$sql = "CREATE TABLE subcathegory (
    id_subcategory INTEGER PRIMARY KEY AUTOINCREMENT,
    id_category INTEGER NOT NULL,
    title TEXT NOT NULL,
     FOREIGN KEY (id_category)
       REFERENCES cathegory (id_category) )";
$db->query($sql);

$sql = "CREATE TABLE product (
    id_product INTEGER PRIMARY KEY AUTOINCREMENT,
    title TEXT NOT NULL, 
    _description TEXT NOT NULL, 
    price TEXT NOT NULL,
    manufacturer TEXT NOT NULL,
    _image TEXT NOT NULL,
    id_subcategory INTEGER NOT NULL,
     FOREIGN KEY (id_subcategory)
       REFERENCES subcathegory (id_subcategory) 
    )";
$db->query($sql);

$sql = "CREATE TABLE purchase (
    id_purchase INTEGER PRIMARY KEY AUTOINCREMENT,
    _name TEXT NOT NULL, 
    home_address TEXT NOT NULL,
    telephone TEXT NOT NULL, 
    _message TEXT NOT NULL,
    email TEXT NOT NULL
    )";
$db->query($sql);

$sql = "CREATE TABLE product_puschase (
    id_product_purchase INTEGER PRIMARY KEY AUTOINCREMENT,
    id_purchase INTEGER NOT NULL,
    id_product INTEGER NOT NULL ,
    amount INTEGER NOT NULL,
     FOREIGN KEY (id_purchase)
       REFERENCES purchase (id_purchase),
       FOREIGN KEY (id_product)
       REFERENCES product (id_product))";
$db->query($sql);
}
else{
$db = new SQLite3("chemists.db");

}
?>


    <nav class="fixed-top">
        <div class="row">
            <div class="col">
                <div class="center">
                    <a href="#" class="navbar-brand">APT</a>
                </div>
            </div>
            <div class="col-8">
                <div class="row nested">
                    <!-- <div class="col"></div> -->
                    <div class="col center"><a href="index.php" class="active">Головна</a></div>
                    <div class="col center"><a href="illness_and_medicine.php">Захворювання та лікування</a></div>
                    <div class="col center"><a href="payment_and_delivery.php">Оплата і доставка</a></div>
                    <div class="col center"><a href="feedback.php">Відгуки</a></div>
                    <div class="col center"><a href="contacts.php">Контакти</a></div>
                </div>
                <div class="row justify-content-center">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Каталог</span>
                        </div>
                        <input type="text" placeholder="Пошук..." class="form-control" />
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="center">
                    <a href="basket" class="navbar-brand"><i class="fas fa-shopping-basket">
                        </i></a> <span class="badge badge-light badge-pill">
                        1</span>
                </div>
            </div>
        </div>
        </div>
        </div>
    </nav>

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