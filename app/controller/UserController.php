<?php

    require_once '../model/User.php';

    include_once '../../lib/path/path.php';

    class UserController
    {
        
        public function __construct() {
            
            if(isset($_POST['submit'])) {
                $email    = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
                $password = $_POST['password'];
                
                $this->authenticate($email, $password);
            }
        }

        public function authenticate($email, $password) {

            try {
                $user = new User();
                $user->email = $email;
                $user->password = $password;
                $user->validateLogin(); 
                header('Location: ../../index.php');

            } catch (Exception $e) {
                header('Location: ../view/login.php?erro=0');
                //echo 'E-mail: '.$email.' | Senha: '.$password.'<hr>'.$e->getMessage();
            }
        }
    }
    new UserController();

?>
