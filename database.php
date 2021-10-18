<?php

    class database{
        private $db_host = "localhost";
        private $db_user = "root";
        private $db_pass = "";
        private $db_name = "oop_crud";


        private $mysqli = "";
        private $result = array();
        private $conn = false;

        // database connection
        public function __construct()
        {
            if (!$this->conn) {
                $this->mysqli = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
                $this->conn = true;

                if ($this->mysqli->connect_error) {
                    array_push($this->result, $this->mysqli->connect_error);
                    return false;
                }
            } else {
                return true;
            }
        }

        // Insert into the database
        public function insert()
        {
            
        }

        // Update into the database
        public function update()
        {

        }

        // Delete into the database
        public function delete()
        {

        }

        // Select into the database
        public function select()
        {

        }

        // close connection
        public function __destruct()
        {
            if ($this->conn) {
                if ($this->mysqli->close()) {
                    $this->conn = false;
                    return true;
                }
            } else {
                return false;
            }
            
        }
    }

?>