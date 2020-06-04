<?php
    class Validator{
        public $email;
        public $password;
        public $error;

        function verifyEmail(){
            echo $this->email.",<br />";
            if(empty($this->email) || !strpos($this->email, "@") || !strpos($this->email, ".")){
                $this->setError('Not an email address');
                return $this->error;
            }
            $tmpEmail = explode('@',$this->email);
            $domain = explode('.',$tmpEmail[1]);
            if(strlen($domain[0]) <= 2){
                $this->setError('Not an email address');
                return $this->error;
            }
            if(strlen($domain[1]) < 2 || strlen($domain[1]) > 3){
                $this->setError('Wrong domain');
                return $this->error;
            }
            return 'Email is verified';
        }
        function setError($error){
            $this->error = '<h3 style="color:red;">'.$error."</h3>";
        }

        function verifyPassword(){
            if(empty($this->password)){
                $this->setError('Fill password input');
                return $this->error;
            }
            if(strlen($this->password) < 6){
                $this->setError('Password must be longer than 6 letters');
                return $this->error;
            }
            if(strpbrk($this->password, '1234567890') == FALSE){
                $this->setError('Password have to contain atleast one number');
                return $this->error;
            }
            if(preg_match("/[A-Z]/", $this->password)===0) {
                $this->setError('Password have to contains atleast one capital letter');
                return $this->error;
            }
            return 'Verified password';
        }

        // SETTER
        function setEmail($email){
            $this->email = $email;
        }
        function setPassword($password){
            $this->password = $password;
        }
        function setUsername($username){
            $this->username = $username;
        }
    }
?>