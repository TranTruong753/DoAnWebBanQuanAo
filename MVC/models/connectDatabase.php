<?php 
    class connectDatabse {

        public $servername = "localhost";
        public $username = "root";
        public $password = "";
        public $conn = null;


        public function openConnect(){
        
            try {
                $this->conn = new PDO("mysql:host=$this->servername;dbname=bttuan6", $this->username, $this->password);

             
                // set the PDO error mode to exception
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    echo "Connected successfully";
                } catch(PDOException $e) {
                    echo "Connection failed: " . $e->getMessage();
            }
        }

        public function closeConnect() {
            $this->conn = null;
        }
       
      
    }
   
  

?>