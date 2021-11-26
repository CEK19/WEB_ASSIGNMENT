<?php
    require_once("../db.php");
    session_start();

    class WishListAdd extends db{

        public function isLogin(){            
            if($_SESSION['login'] == false || !isset($_SESSION['login'])){
                return false;
            }
            return true;
        }

        public function is_exist_item_wishlist_base_email($clothID, $category, $email){                                                
            $format_EMAIL = "'".$email."'";
            $format_CATEGORY = "'".$category."'";
            $SQL_MAIL = "SELECT email, clothID, category FROM wishlist WHERE email={$format_EMAIL} AND clothID={$clothID} AND category={$format_CATEGORY}"; 
            $result = mysqli_query($this->connect, $SQL_MAIL);                        
            if (mysqli_num_rows($result) > 0) {
                return true;
            }            
            return false;            
        }
        
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
    if($addObj->isLogin() == true){
        if($addObj->is_exist_item_wishlist_base_email($_POST['ajax_clothid'], $_POST['ajax_category'], $_SESSION['email'])){
            echo json_encode(array(
                "state_response" => "exist-item"
            ));
        }
        else{            
            echo $addObj->addWL($_POST['ajax_clothid'], $_POST['ajax_category'], $_SESSION['email']);
        }
    }
    else{
        echo json_encode(array(
            "state_response" => "no-sign-in"
        ));
    }
?>