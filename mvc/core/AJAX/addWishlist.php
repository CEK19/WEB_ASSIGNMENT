<?php
    require_once("../db.php");
    session_start();

    class WishListAdd extends db{
        public function addWL($clothID, $category, $email){
            $format_CATEGORY = "'".$category."'";
            $format_EMAIL = "'".$email."'";
            $SQL_QUERY_ADD_WL = "INSERT INTO wishlist (email, clothID, category) VALUES ({$format_EMAIL}, {$clothID}, {$format_CATEGORY})";

            $responseData = array(
                "state_response" => "error"
            );
            if(mysqli_query($this->connect, $SQL_QUERY_ADD_WL)){
                $responseData['state_response'] = "successful";
            }
            return json_encode($responseData);
        }
    }

    $addObj = new WishListAdd();
    echo $addObj->addWL($_POST['ajax_clothid'], $_POST['ajax_category'], $_SESSION['email']);
?>