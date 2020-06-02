<?php
    class Database{
        public $host;
        public $username;
        public $password;
        public $name;
        public $mysqli;
        public $error;
        public $sql;
        function __construct(){

        }
        function login($username, $password){
            $this->setSql('select username from users where username="'.$username.'"');
            echo $this->select();
        }
        function setup($host,$username,$password,$name){
            $this->host = $host;
            $this->username = $username;
            $this->password = $password;
            $this->name = $name;
            
        }
        function connect(){
            $this->mysqli = new mysqli($this->host,$this->username,$this->password,$this->name);
            return $this->checkConnection();
        }
        function checkConnection(){
            if($this->mysqli->connect_error){
                return $this->mysqli->connect_error;
            }else{
                return true;
            }
        }
        function setSql($sql){
            return $this->sql = $sql;
        }
        function select(){
            if(!$this->checkSqlTask('select')){
                return $this->error;
            }
            $result = $this->mysqli->query($this->sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $output[]=$row;
                }
            } else {
                return "No data find or wrong sql command";
            }
            return $output; //ARRAY IN ARRAY
        }
        function insertData(){
            if(!$this->checkSqlTask('insert')){
                return $this->error;
            }
            if ($this->mysqli->query($this->sql) === TRUE) {
                return true;
            } else {
                $this->error = "Error: " . $this->sql . "<br>" . $this->mysqli->error;
                return false;
            }
        }
        function update(){
            if(!$this->checkSqlTask('update')){
                return $this->error;
            }
            if ($this->mysqli->query($this->sql)) {
                return true;
            } else {
                $this->error =  "Error updating record: " . $this->mysqli->error;
                return false;
            }
        }
        function delete(){
            if(!$this->checkSqlTask('delete')){
                return $this->error;
            }
            if ($this->mysqli->query($this->sql)) {
                return true;
            }else{
                $this->error =  "Error deleting record: " . $this->mysqli->error;
                return false;
            }
        }
        function checkSqlTask($f){
            $tmpString = explode(' ',$this->sql);
            switch($f){
                case 'insert':
                    if(strtolower($tmpString[0])!= 'insert'){
                        $this->error = 'Syntax error -> insert';
                        return false;
                    }else{
                        return true;
                    }
                break;
                case 'update':
                    if(strtolower($tmpString[0])!= 'update'){
                        $this->error = 'Syntax error -> update';
                        return false;
                    }else{
                        return true;
                    }
                break;
                case 'delete':
                    if(strtolower($tmpString[0])!= 'delete'){
                        $this->error = 'Syntax error -> delete';
                        return false;
                    }else{
                        return true;
                    }
                break;
                case 'select':
                    if(strtolower($tmpString[0])!= 'select'){
                        $this->error = 'Syntax error -> select';
                        return false;
                    }else{
                        return true;
                    }
                break;
            }
        }
    }

?>