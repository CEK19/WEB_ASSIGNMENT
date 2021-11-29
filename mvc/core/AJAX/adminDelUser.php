<?php
    require_once("../db.php");
    session_start();

    class adminKickUser extends db{

        public function getAccount_data(){
            $SQL_QUERY = "SELECT `user_id`, firstName, lastName, email, `level` FROM account";
            $RESULT = mysqli_query($this->connect, $SQL_QUERY);                         
            $RETURN_DATA = array();                                               
            if(mysqli_num_rows($RESULT) > 0){                           
                while($row = mysqli_fetch_assoc($RESULT)){              
                    array_push($RETURN_DATA, $row);                  
                }
            }                  
            return $RETURN_DATA;
        }

        public function adminKickUser($email){                              
            $format_email = "'".$email."'";
            $SQL_QUERY_KICK = "DELETE FROM account WHERE email = {$format_email}";                         
            $data = array();
            if(mysqli_query($this->connect, $SQL_QUERY_KICK)){                                                
                $data['item_data'] = $this->getAccount_data();                                  
            }                                    
            return $data;
        }
    }
    $newObj = new adminKickUser();
    $data = $newObj->adminKickUser($_POST['ajax_email']);
    echo json_encode($data);
?>