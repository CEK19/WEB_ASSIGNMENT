<?php
    require_once("../db.php");
    session_start();

    class adminEditUser extends db{

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

        public function adminEdit($id, $fname, $lname, $email){
            $format_fname = "'".$fname."'";
            $format_lname = "'".$lname."'";
            $format_email = "'".$email."'";                        
            $SQL_QUERY_EDIT = "UPDATE account SET firstName = {$format_fname}, lastName = {$format_lname}, email={$format_email} WHERE user_id={$id}";             
            $data = array();
            if(mysqli_query($this->connect, $SQL_QUERY_EDIT)){                                                
                $data['item_data'] = $this->getAccount_data();                                
            }                                    
            return $data;
        }        
    }
    $newObj = new adminEditUser();
    $data = $newObj->adminEdit($_POST['ajax_id'] ,$_POST['ajax_fname'], $_POST['ajax_lname'], $_POST['ajax_email']);
    echo json_encode($data);
?>