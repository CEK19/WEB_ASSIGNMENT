<?php
    require_once("../db.php");
    session_start();

    class adminAddUser extends db{

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

        public function adminAdd($fname, $lname, $email){
            $format_fname = "'".$fname."'";
            $format_lname = "'".$lname."'";
            $format_email = "'".$email."'";
                        
            $SQL_QUERY_ADD = "INSERT INTO account (firstName, lastName, birthday, email, password, level) VALUES ({$format_fname}, {$format_lname} , '2001-02-13' , {$format_email}, '8c649e23ba34274f603b93d38e8840eb', 2)";            
            
            $data = array();
            if(mysqli_query($this->connect, $SQL_QUERY_ADD)){                                                
                $data['item_data'] = $this->getAccount_data();                                
            }                                    
            return $data;
        }
    }

    $newObj = new adminAddUser();
    $data = $newObj->adminAdd($_POST['ajax_fname'], $_POST['ajax_lname'], $_POST['ajax_email']);
    echo json_encode($data);
?>

