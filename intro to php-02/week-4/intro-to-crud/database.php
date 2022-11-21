<?php
    class Database{
        private $connection;
        function __construct(){
            $this->connect_db();
        }
        public function connect_db(){
            $this->connection = mysqli_connect('172.31.22.43','Kihyeon200476247','Y_UZm8Ri87','Kihyeon200476247');
            if(mysqli_connect_error()){
                die("Database connection failed ". mysqli_connect_error() . mysqli_connect_error());
            }
        }
        public function create($fname,$lname,$age,$email){
            $sql = "INSERT INTO fallPerson(fname,lname,age,email) VALUES ('$fname', '$lname', '$age', '$email')";
            $res = mysqli_query($this->connection, $sql);
            if($res){
                return true;
            }else{
                return false;
            }
        }
        public function read($id=null){
            $sql = "SELECT * FROM fallPerson";
            if($id){
                $sql .= " WHERE id = $id";
            }
            $res = mysqli_query($this->connection, $sql);
            return $res;
        }

        public function sanitize($var){
            $return = mysqli_real_escape_string($this->connection, $var);
            return $return;
        }
    }
    $database = new Database();
?>