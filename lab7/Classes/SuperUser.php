<?php declare(strict_types=1);
    namespace Classes;
    require_once 'User.php';
    class SuperUser extends User
    {
        public $role;

        function __construct(string $name, string $login, string $password, string $role)
        {
            parent::__construct($name, $login, $password);
            $this->role = $role;
        }

        public function showInfo()
        {
            parent::showInfo();
            echo 'Роль: ' . $this->role . '<br>';
        }
    }
?>