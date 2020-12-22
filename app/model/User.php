<?php
    
    require_once '../../lib/database/connection.php';

    class User
    {
        public $name;
        public $email;
        public $password;

        public function validateLogin() {
            $conn = Connection::getConn();
            // Seleciona o usuário com o e-mail informado
            $sql = 'SELECT * FROM tb_users WHERE email = :email';

            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':email', $this->email);
            $stmt->execute();

            if($stmt->rowCount() == 1) {
                $result = $stmt->fetch();

                if($result['password'] == $this->password) {
                    session_start();
                    $_SESSION['login'] = true;
                    $_SESSION['id']    = $result['user_id'];
                    $_SESSION['email'] = $result['email'];

                    return true;
                    
                }
            }

            throw new Exception('E-mail ou senha inválidos');
        }
        // Métodos SET
        public function setNome($name){
            $this->name = $name;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function setPassword($password) {
            $this->password = $password;
        }
        // Métodos GET
        public function getName() {
            return $this->name;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getPassword() {
            return $this->password;
        }
    }

?>
