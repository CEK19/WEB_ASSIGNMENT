<?php
    class adminModel extends db{
        private function _query($sql){
            return mysqli_query($this->connect, $sql);
        }
        
        public function updateAccount($email, $password, $fname, $lname, $id){
            $sql = "UPDATE account SET email = '$email', password = '$password',firstName = '$fname', lastName = '$lname' WHERE user_id = '$id'";
            $query = $this->_query($sql);
            return $query;
        }

        public function getOrder_data(){                    
            $SQL_QUERY = "SELECT id, email, clothID, category, color, size, quantity, phone, address, deliveryMethod, paymentMethod, cardNumber, 'e-wallet' FROM orders";
            $RESULT = mysqli_query($this->connect, $SQL_QUERY);                         
            $RETURN_DATA = array();                                               
            if(mysqli_num_rows($RESULT) > 0){                           
                while($row = mysqli_fetch_assoc($RESULT)){              
                    array_push($RETURN_DATA, $row);                  
                }
            }                        
            return $RETURN_DATA;
        }
    }
?>