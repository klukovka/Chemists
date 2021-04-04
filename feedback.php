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
        require_once 'classes/feedbacks.php';
        $user1 = new feedback();
        $user1->name = 'Череватенко Алексей';
        $user1->email = 'mail@mail.com';
        $user1->feedback = 'Дуже приємна аптека! Низькі ціни, швидкий зворотній зв\'язок. Дуже приємний та зрозумілий інтерфейс сайту. Замовляю тут вже не перший раз. Рекомендую!';
        $user1->getInfo();

        $user2 = new feedback();
        $user2->name = 'Лашина Марина';
        $user2->email = 'marinett@gmail.com';
        $user2->feedback = 'Дуже приємна аптека! Низькі ціни, швидкий зворотній зв\'язок. Дуже приємний та зрозумілий інтерфейс сайту. Замовляю тут вже не перший раз. Рекомендую!';
        $user2->getInfo();

        $user3 = new feedback();
        $user3->name = 'Попов Александр';
        $user3->email = 'popov_alex@yandex.ru';
        $user3->feedback = 'Дуже приємна аптека! Низькі ціни, швидкий зворотній зв\'язок. Дуже приємний та зрозумілий інтерфейс сайту. Замовляю тут вже не перший раз. Рекомендую!';
        $user3->getInfo();

        $user4 = clone $user1;
        $user4->getInfo();
        
       
$admin = new feedbackAdmin('Admin','themail.ua@gmail.com','Text of the feedback!');
        $admin->getInfo();

        
?>




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