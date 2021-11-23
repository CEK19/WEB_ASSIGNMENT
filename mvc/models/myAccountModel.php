<?php
    class myAccountModel extends db {
        private function _query($sql)
        {
            return mysqli_query($this->connect, $sql);
        }
    
        public function updateAccount($email, $password, $fname, $lname, $id){
            $sql = "UPDATE account SET email = '$email', password = '$password',firstName = '$fname', lastName = '$lname' WHERE user_id = '$id'";
            $query = $this->_query($sql);
            return $query;
        }
    }
?>