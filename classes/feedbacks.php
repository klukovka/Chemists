<?php
class feedback
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
            <h5 class=\"client-comment\">$this->name</h5>
            <p>
                $this->feedback
            </p>
            </div>";
    }
}


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
            <h5 class=\"admin-comment\">$this->name ($this->admin)</h5>
            <p>
                $this->feedback
            </p>
            </div>";
    }
}

?>