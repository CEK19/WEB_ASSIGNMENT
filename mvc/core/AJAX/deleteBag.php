<?php
    require_once("../db.php");
    session_start();

    class BagDel extends db{
        public function delBAG($clothID, $category, $email){
            $format_CATEGORY = "'".$category."'";
            $format_EMAIL = "'".$email."'";
            $SQL_QUERY_DEL_BAG = "DELETE FROM shopping_bag WHERE clothID = {$clothID} AND email = {$format_EMAIL} AND category={$format_CATEGORY}";

            $responseData = array(     
                "state_response" => "error"           
            );
            if(mysqli_query($this->connect, $SQL_QUERY_DEL_BAG)){
                $responseData['state_response'] = "successful";
            }
            return json_encode($responseData);
        }
    }

    $bagObj = new bagDel();
    echo $bagObj->delBAG($_POST['ajax_clothid'], $_POST['ajax_category'], $_SESSION['email']);
?>