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
    <title>Відгуки</title>

</head>

<body>


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
                    <div class="col center"><a href="index.php">Головна</a></div>
                    <div class="col center"><a href="#">Захворювання та лікування</a></div>
                    <div class="col center"><a href="#">Оплата і доставка</a></div>
                    <div class="col center"><a href="feedback.php" class="active">Відгуки</a></div>
                    <div class="col center"><a href="#">Контакти</a></div>
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
                    <a href="#" class="navbar-brand"><i class="fas fa-shopping-basket"></i></a>
                </div>
            </div>
        </div>
        </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="messageForm">

                    <form class="col-md-5" action="feedback.php" method="POST">
                        <label>Ваше имя:</label>
                        <input type="text" name="name" id="name" class="input">
                        <br />
                        <label>Ваш e-mail:</label>
                        <input type="email" name="email" id="email" class="input">
                        <br />
                        <label>Содержание: </label>
                        <br />
                        <textarea rows="5" cols="20" name="feedback" id="feedback" class="input"></textarea>
                        <br />
                        <input type="submit" name="test" id="test" class="input" />
                    </form>
                </div>

            </div>
            <div class="col-8">


                <?php
        require_once 'classes/feedbacks.php';
        if(array_key_exists('test',$_POST)){
            $new_feedback = new feedback();
            $new_feedback->name = $_POST['name'];
            $new_feedback->email = $_POST['email'];
            $new_feedback->feedback =  $_POST['feedback'];
            $new_feedback->getInfo();
        }
    ?>

<?php
        require_once 'classes/feedbacks.php';
        $user1 = new feedback();
        $user1->name = 'Наріман Намазов';
        $user1->email = 'abu@mail.com';
        $user1->feedback = 'Замовляю ліки тут не перший раз, дуже швидка відправка.';
        $user1->getInfo();

        $user2 = new feedback();
        $user2->name = 'Антуан Скайуокер';
        $user2->email = 'dartDad@gmail.com';
        $user2->feedback = 'Дуже довго очікував підтвердження замовлення :(';
        $user2->getInfo();

        $user3 = new feedback();
        $user3->name = 'Джакомо Фрімен';
        $user3->email = 'speedDzhakomo@ukr.net';
        $user3->feedback = 'Низькі ціни та все дуже швидко';
        $user3->getInfo();

        $user4 = clone $user1;
        $user4->getInfo();
        
       
        $admin = new feedbackAdmin('Admin','matrix@gmail.com','Дякуємо за позитивні відгуки та критику!');
        $admin->getInfo();

        
?>

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