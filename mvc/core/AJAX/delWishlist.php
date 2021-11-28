<?php
    require_once("../db.php");
    session_start();

    class WishListDel extends db{
        private function _query($sql)
        {
            return mysqli_query($this->connect, $sql);
        }
        public function count($email){
            $sql = "SELECT * FROM shopping_bag WHERE Email = '$email'";
            $query = $this->_query($sql);
            return mysqli_num_rows($query);
        }
        public function delWL($clothID, $category, $email){
            $format_CATEGORY = "'".$category."'";
            $format_EMAIL = "'".$email."'";
            $SQL_QUERY_DEL_WL = "DELETE FROM wishlist WHERE clothID = {$clothID} AND email = {$format_EMAIL} AND category={$format_CATEGORY}";

            $responseData = array(     
                "state_response" => "error",
                "datacount" =>  $this->count($_SESSION['email'])        
            );
            if(mysqli_query($this->connect, $SQL_QUERY_DEL_WL)){
                $responseData['state_response'] = "successful";
            }
            $responseData['datacount'] = $this->count($_SESSION['email']);
            return json_encode($responseData);
        }
    }

    $delObj = new WishListDel();
    echo $delObj->delWL($_POST['ajax_clothid'], $_POST['ajax_category'], $_SESSION['email']);
?>