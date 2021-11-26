<?php
    require_once("../db.php");
    session_start();

    class WishListDel extends db{
        public function delWL($clothID, $category, $email){
            $format_CATEGORY = "'".$category."'";
            $format_EMAIL = "'".$email."'";
            $SQL_QUERY_DEL_WL = "DELETE FROM wishlist WHERE clothID = {$clothID} AND email = {$format_EMAIL} AND category={$format_CATEGORY}";

            $responseData = array(     
                "state_response" => "error"           
            );
            if(mysqli_query($this->connect, $SQL_QUERY_DEL_WL)){
                $responseData['state_response'] = "successful";
            }
            return json_encode($responseData);
        }
    }

    $delObj = new WishListDel();
    echo $delObj->delWL($_POST['ajax_clothid'], $_POST['ajax_category'], $_SESSION['email']);
?>