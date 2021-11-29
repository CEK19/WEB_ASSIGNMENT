<?php
    require_once("../db.php");
    session_start();

    class adminDeleteComment extends db{

        public function getComment_data(){
            $SQL_QUERY = "SELECT id, email, clothID, category, star, comment FROM comments";
            $RESULT = mysqli_query($this->connect, $SQL_QUERY);                         
            $RETURN_DATA = array();                                               
            if(mysqli_num_rows($RESULT) > 0){                           
                while($row = mysqli_fetch_assoc($RESULT)){              
                    array_push($RETURN_DATA, $row);                  
                }
            }                        
            return $RETURN_DATA;
        }        

        public function adminDelCmt($email){                              
            $format_email = "'".$email."'";
            $SQL_QUERY_DEL = "DELETE FROM comments WHERE email = {$format_email}";                         
            $data = array();
            if(mysqli_query($this->connect, $SQL_QUERY_DEL)){                                                
                $data['item_data'] = $this->getComment_data();                                  
            }                                    
            return $data;
        }
    }    

    
?>