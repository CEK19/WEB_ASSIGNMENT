<?php
    require_once("../db.php");
    session_start();

    class checkBagExist extends db{

        public function isLogin(){            
            if($_SESSION['login'] == false || !isset($_SESSION['login'])){
                return false;
            }
            return true;
        }

        public function is_exist_item_bag_base_email($clothID, $category, $email){                                                
            $format_EMAIL = "'".$email."'";
            $format_CATEGORY = "'".$category."'";
            $SQL_MAIL = "SELECT email, clothID, category FROM shopping_bag WHERE email={$format_EMAIL} AND clothID={$clothID} AND category={$format_CATEGORY}"; 
            $result = mysqli_query($this->connect, $SQL_MAIL);                        
            if (mysqli_num_rows($result) > 0) {
                return true;
            }            
            return false;            
        }
    }

    $checkObj = new checkBagExist();
    if($checkObj->isLogin() == true){                
        if($checkObj->is_exist_item_bag_base_email($_POST['ajax_clothid'], $_POST['ajax_category'], $_SESSION['email'])){
            echo json_encode(array(
                "result_exist" => "exist"
            ));
        }
        else{            
            echo json_encode(array(
                "result_exist" => "non-exist"
            ));
        }
    }
    else{
        echo json_encode(array(
            "result_exist" => "no-sign-in"
        ));
    }
?>