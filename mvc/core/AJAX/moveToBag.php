<?php
    require_once("../db.php");
    session_start();

    class BagAdd extends db{
        public function addShoppingBag($clothID, $category, $email){
            $format_CATEGORY = "'".$category."'";
            $format_EMAIL = "'".$email."'";            
            $responseData  = array(                
                "is_exist" => "exist"
            );
            // CASE 1: IF EXIST IN BAG => RETURN WARNING CODE
            $SQL_QUERY_SEARCH = "SELECT email, clothID, category FROM shopping_bag";
            $result_search = mysqli_query($this->connect, $SQL_QUERY_SEARCH);
            if(mysqli_num_rows($result_search) > 0){
                return json_encode($responseData);
            }

            // CASE 2: IF NOT EXIST IN BAG => ADD TO BAG DATABASE
            $SQL_QUERY_ADD_BAG = "INSERT INTO shopping_bag (email, clothID, category) VALUES ({$format_EMAIL}, {$clothID}, {$format_CATEGORY})";
            if(mysqli_query($this->connect, $SQL_QUERY_ADD_BAG)){
                $responseData['is_exist'] = "non-exist";
            }
            return $responseData;
        }
    }

    // $addObj = new WishListAdd();
    // echo $addObj->addWL($_POST['ajax_clothid'], $_POST['ajax_category'], $_SESSION['email']);
    $addBagObj = new BagAdd();
    echo $addBagObj->addShoppingBag($_POST['ajax_clothid'], $_POST['ajax_category'], $_SESSION['email']);
?>