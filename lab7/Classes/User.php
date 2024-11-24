<?php declare(strict_types=1);
    namespace Classes;
    class User
    {
        public $name;
        public $login;
        private $password;

        function __construct(string $name, string $login, string $password)
        {
            $this->name = $name;
            $this->login = $login;
            $this->password = $password;
        }

        function __destruct()
        {
            echo 'Был вызван деструктор. Пользователь ' . $this->login . ' удалён<br>';
        }

        public function setPassword (string $input_password)
        {
            $this->password = $input_password;
        }

        public function getPassword ()
        {
            return $this->password;
        }

        public function showInfo()
        {
            echo 'Имя: ' . $this->name . '<br>';
            echo 'Логин: ' . $this->login . '<br>';
            echo 'Пароль: ' . $this->password . '<br>';
        }
    }
?>