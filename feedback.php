<?php class feedback
{
    private $name;
    private $email;
    private $feedback;

    public function __construct()
    {
        $this->name = 'Користувач';
        $this->email = 'email@mail';
        $this->feedback = 'Відгук';
    }

    public function __clone()
    {
        $this->name = 'Користувач';
        $this->email = 'email';
        $this->feedback = 'Відгук';
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }
    

    public function getInfo()
    {
        echo "<div class=\"feedback\">
            <h5>$this->name</h5>
            <p>
                $this->feedback
            </p>
            </div>";
    }
}

        require_once 'feedback.php';
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
        
        class feedbackAdmin extends feedback
{
    public $admin;

    public function __construct($nick, $mail,$mess)
    {
        $this->admin = "Адміністратор";
        $this->name = $nick;
        $this->email = $mail;
        $this->feedback = $mess;
    }

    public function getInfo()
    {
        echo "<div class=\"feedback\">
            <h5>$this->name ($this->admin)</h5>
            <p>
                $this->feedback
            </p>
            </div>";
    }
}

$admin = new feedbackAdmin('Admin','themail.ua@gmail.com','Text of the feedback!');
        $admin->getInfo();

        
?>