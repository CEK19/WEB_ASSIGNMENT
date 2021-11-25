<?php
    class shopping_bagModel extends db{

        public function isLogin(){            
            if($_SESSION['login'] == false || !isset($_SESSION['login'])){
                return false;
            }
            return true;
        }

        public function is_exist_email_shoppingbag_list($email){                                                
            $mail = '"'.$email.'"';
            $SQL_MAIL = "SELECT email FROM shopping_bag WHERE email={$mail}";            
            $result = mysqli_query($this->connect, $SQL_MAIL);                        
            if (mysqli_num_rows($result) > 0) {
                return true;
            }            
            return false;
        }

        public function get_item_based_email($email){
            $mail = '"'.$email.'"'; 
            $SQL_QUERY_INFO = "SELECT id, clothID, category FROM shopping_bag WHERE email = {$mail}";
            $result = mysqli_query($this->connect, $SQL_QUERY_INFO);
            $arrayInfo = array();

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    array_push($arrayInfo, $row);
                }
            }

            // QUERY COST AND NAME BASE ON CATEGORY AND ID
            $index = 0;
            foreach($arrayInfo as $eachItem){
                $SQL_QUERY_COST_NAME = "SELECT name, cost_origin, cost FROM {$eachItem['category']} WHERE id = {$eachItem['clothID']}";
                $result = mysqli_query($this->connect, $SQL_QUERY_COST_NAME);                

                if(mysqli_num_rows($result) > 0){                    
                    while($row = mysqli_fetch_assoc($result)){                        
                        $arrayInfo[$index] = array_merge($eachItem, $row);                        
                        $index = $index + 1;
                    }
                }
            }            
            return $arrayInfo;   
        }             
    }
?>