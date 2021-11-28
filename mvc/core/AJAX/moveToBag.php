<?php
    require_once("../db.php");
    session_start();

    class BagAdd extends db{
        private function _query($sql)
        {
            return mysqli_query($this->connect, $sql);
        }
        public function count($email){
            $sql = "SELECT * FROM shopping_bag WHERE Email = '$email'";
            $query = $this->_query($sql);
            return mysqli_num_rows($query);
        }
        public function isLogin(){            
            if($_SESSION['login'] == false || !isset($_SESSION['login'])){
                return false;
            }
            return true;
        }

        public function is_exist_item_shoppingbag_base_email($clothID, $category, $email){                                                
            $format_EMAIL = "'".$email."'";
            $format_CATEGORY = "'".$category."'";
            $SQL_EXIST = "SELECT email, clothID, category FROM shopping_bag WHERE email={$format_EMAIL} AND clothID={$clothID} AND category={$format_CATEGORY}"; 
            $result = mysqli_query($this->connect, $SQL_EXIST);                        
            if (mysqli_num_rows($result) > 0) {
                return true;
            }            
            return false;            
        }

        public function addShoppingBag($clothID, $category, $email){
            $format_CATEGORY = "'".$category."'";
            $format_EMAIL = "'".$email."'";            
            $responseData  = array(                
                "is_exist" => "exist",
                "datacount"=>$this->count($_SESSION['email'])
            );                                    
            $SQL_QUERY_ADD_BAG = "INSERT INTO shopping_bag (email, clothID, category, color, size, quantity) VALUES ({$format_EMAIL}, {$clothID}, {$format_CATEGORY}, 'black', 'M', 1)";
            if(mysqli_query($this->connect, $SQL_QUERY_ADD_BAG)){
                $responseData['is_exist'] = "non-exist";
            }
            $responseData['datacount'] = $this->count($_SESSION['email']);
            return json_encode($responseData);
        }
    }

    // $addObj = new WishListAdd();
    // echo $addObj->addWL($_POST['ajax_clothid'], $_POST['ajax_category'], $_SESSION['email']);
    $addBagObj = new BagAdd();
    if($addBagObj->isLogin()){
        if($addBagObj->is_exist_item_shoppingbag_base_email($_POST['ajax_clothid'], $_POST['ajax_category'], $_SESSION['email'])){
            echo json_encode(array(
                "is_exist" => "exist"
            ));
        }   
        else{
            echo $addBagObj->addShoppingBag($_POST['ajax_clothid'], $_POST['ajax_category'], $_SESSION['email']);
        }
    }
    else{
        echo json_encode(array(
            "is_exist" => "no-login"
        ));
    }
?>