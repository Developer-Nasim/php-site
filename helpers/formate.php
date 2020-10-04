<?php

    class formate{

        public function validation($input){
            $input = trim($input); 
            $input = htmlspecialchars($input); 
            $input = stripcslashes($input);  
            return $input;
        }


        public function time($time){
            return date("F j, Y, g:i a", strtotime($time));
        }

        public function txtshort($cont, $limit){
            $cont       = substr($cont, 0 ,$limit);
            $cont       = substr($cont, 0 , strripos($cont, " "));
            $cont       = $cont." ";
            return $cont;
        }

        public function title(){
            $title = $_SERVER['SCRIPT_FILENAME'];
            $title = basename($title, '.php');
            if ($title == 'index') {
                $title = "Home";
            }elseif ($title == "about") {
                $title = "about";
            }elseif ($title == "contact") {
                $title = "contact";
            }
            return $title = ucfirst($title);
        }

    }





?>