<?php

class DBController{

    //initialization
    protected $name = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = 'shoppee';

    //connection
    public $conn = null;

    // call constructor
    public function __construct()
    {
        $this->con = mysqli_connect($this->name,$this->user,$this->password,$this->database);
        if($this->con->connect_error){
            echo "Fail".$this->con->connect_error;
        }
       
    }

    //destructor
    public function __destruct()
    {
        $this->closeConn();
    }

    //closing connection
    protected function closeConn(){
        if($this->conn != null){
            $this->conn->close();
            $this->conn = null;
        }
    }

}



?>