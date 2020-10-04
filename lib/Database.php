<?php
 



    class con{
        public $host = HOST_NAME;
        public $user = HOST_USER;
        public $pass = HOST_PASS;
        public $db = DB_NAME;


        public $link;
        public $error;  

        // connection auto loading by construct
        public function __construct(){
            $this->connection(); 
        } 
        // DB_CONNETION
        private function connection() {
            $this->link = new mysqli($this->host,$this->user,$this->pass,$this->db);
            if (!$this->link) {
                die("Error: some mistake here".$this->link->connect_error.__LINE__);
            }
        }   



        // Insert_Querys
        public function insert($insert){
            $insert = $this->link->query($insert);
            if (!$insert) {
                die($this->link->error.__LINE__);
            }
        }


        // SELECT_QUERY 
        public function select($select) {
            $select = $this->link->query($select);
            if ($select->num_rows > 0) {
                return $select;
            }else{
                return false;
            }
        }












    }
 




?>