<?php
class dbConnection {
       private $connection;
       private $db_type;
        private $db_host;
        private $db_port;
        private $db_user;
        private $db_pass;
      private $db_name;
   
       public function __construct($db_type, $db_host, $db_port, $db_user, $db_pass, $db_name) {
          $this->db_type = $db_type;
         $this->db_host = $db_host;
           $this->db_port = $db_port; // Fix typo
           $this->db_user = $db_user;
         $this->db_pass = $db_pass;
           $this->db_name = $db_name;
       }
    
       public function connect() { 
            switch ($this->db_type) {
                 case 'MySQLi':
                    if ($this->db_port <> Null) {
                        $this->db_host .= ":" . $this->db_port;
                     }
                    $this->connection = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
                      if ($this->connection->connect_errno) { // Changed to connect_errno
                         return "Connection Failed: " . $this->connection->connect_error; // Changed to connect_error
                      } else {
                         print "Connected Successfully";
                      }
                      break;
                    case 'PDO':
                   if ($this->db_port <> Null) {
                    $this->db_host .= ":" . $this->db_port;
                   }
                 try {
                       $this->connection = new PDO("mysql:host=$this->db_host;dbname=$this->db_name", $this->db_user, $this->db_pass);
                       // set the PDO error mode to exception
                        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                      // echo "Connected successfully :-)";
                 } catch (PDOException $e) {
                     echo "Connection failed: " . $e->getMessage();
                    }
                    break;
          }
      }
    }
    $db = new dbConnection('MySQLi', 'localhost', 3306, 'root', 'Nanuta@123!!!!!##', 'ics_e');
        $db->connect();
        
    
