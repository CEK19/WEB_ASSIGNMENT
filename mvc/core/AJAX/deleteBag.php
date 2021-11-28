<?php
    require_once("../db.php");
    session_start();

    class BagDel extends db{
        private function _query($sql)
        {
            return mysqli_query($this->connect, $sql);
        }
        public function count($email){
            $sql = "SELECT * FROM shopping_bag WHERE Email = '$email'";
            $query = $this->_query($sql);
            return mysqli_num_rows($query);
        }
        public function delBAG($clothID, $category, $email){
            $format_CATEGORY = "'".$category."'";
            $format_EMAIL = "'".$email."'";
            $SQL_QUERY_DEL_BAG = "DELETE FROM shopping_bag WHERE clothID = {$clothID} AND email = {$format_EMAIL} AND category={$format_CATEGORY}";

            $responseData = array(     
                "state_response" => "error",
                "datacount"=>$this->count($_SESSION['email'])                     
            );
            if(mysqli_query($this->connect, $SQL_QUERY_DEL_BAG)){
                $responseData['state_response'] = "successful";
            }
            $responseData['datacount'] = $this->count($_SESSION['email']);
            return json_encode($responseData);
        }
    }

    $bagObj = new bagDel();
    echo $bagObj->delBAG($_POST['ajax_clothid'], $_POST['ajax_category'], $_SESSION['email']);
?>