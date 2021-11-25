<?php
    class wishlistModel extends db{

        public function isLogin(){            
            if($_SESSION['login'] == false){
                return false;
            }
            return true;
        }

        public function is_exist_email_wish_list($email){                                    
            echo $email;
            $mail = '"'.$email.'"';
            $SQL_MAIL = "SELECT email FROM wishlist WHERE email={$mail}";            
            $result = mysqli_query($this->connect, $SQL_MAIL);                        
            if (mysqli_num_rows($result) > 0) {
                return true;
            }            
            return false;
        }

        public function get_item_based_email($email){
            $mail = '"'.$email.'"'; 
            $SQL_QUERY_INFO = "SELECT id, clothID, category FROM wishlist WHERE email = {$mail}";
            $result = mysqli_query($this->connect, $SQL_QUERY_INFO);
            $arrayInfo = array();

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    array_push($arrayInfo, $row);
                }
            }
            return $arrayInfo;   
        }             
    }
?>