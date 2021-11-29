<?php
    class adminModel extends db{
        private function _query($sql){
            return mysqli_query($this->connect, $sql);
        }
        
        // public function updateAccount($email, $password, $fname, $lname, $id){
        //     $sql = "UPDATE account SET email = '$email', password = '$password',firstName = '$fname', lastName = '$lname' WHERE user_id = '$id'";
        //     $query = $this->_query($sql);
        //     return $query;
        // }


        // _____________ SOME FUNCTION HERE ____________ //
        // ============================================= //

        public function updateOrder($id, $email ,$clothID, $category){
            $SQL_COMMAND = "UPDATE orders SET clothID = '$clothID', category='$category', color='' WHERE id='$id', email='$email' ";
        }


        // _______________ GET DATA FROM DATABASE ____________ //
        // =================================================== //

        public function getOrder_data(){
            $SQL_QUERY = "SELECT id, email, clothID, category, color, size, quantity, phone, `address`, deliveryMethod, paymentMethod, cardNumber, `e-wallet` FROM orders";
            $RESULT = mysqli_query($this->connect, $SQL_QUERY);                         
            $RETURN_DATA = array();                                               
            if(mysqli_num_rows($RESULT) > 0){                           
                while($row = mysqli_fetch_assoc($RESULT)){              
                    array_push($RETURN_DATA, $row);                  
                }
            }                        
            return $RETURN_DATA;
        }

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

        public function getCloth_data($my_table){
            $SQL_QUERY = "SELECT id, `name`, brand, detail, cost_origin, cost, quantity, rating, 1star, 2star, 3star, 4star, 5star, num_review FROM $my_table";
            $RESULT = mysqli_query($this->connect, $SQL_QUERY);                         
            $RETURN_DATA = array();                                               
            if(mysqli_num_rows($RESULT) > 0){                           
                while($row = mysqli_fetch_assoc($RESULT)){              
                    array_push($RETURN_DATA, $row);                  
                }
            }                        
            return $RETURN_DATA;
        }

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
    }
?>