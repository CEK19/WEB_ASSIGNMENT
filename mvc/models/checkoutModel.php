<?php
    class checkoutModel extends db {
        private function _query($sql)
        {
            return mysqli_query($this->connect, $sql);
        }
    
        public function update_shopping_bag($color,$size,$quantity,$id){
            $sql = "UPDATE shopping_bag SET color = '$color', size = '$size', quantity = '$quantity' WHERE id = '$id'";
            $query = $this->_query($sql);
            return $query;
        }
        public function delete_bag(){
            $email = $_SESSION['email'];
            $sql = "DELETE FROM shopping_bag WHERE email = '$email'";
            $query = $this->_query($sql);
            return 0;
        }
    }
?>