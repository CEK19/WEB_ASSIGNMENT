<?php
    class productDetailModel extends db{

        // ĐỂ ĐÂY CÓ GÌ XÀI SAU ĐỪNG AI XOÁ CỦA BÉ :((
        // public function isLogin(){            
        //     if($_SESSION['login'] == false|| !isset($_SESSION['login'])){
        //         return false;
        //     }
        //     return true;
        // }

        // public function is_exist_item_wishlist_base_email($clothID, $category, $email){                                                
        //     $format_EMAIL = "'".$email."'";
        //     $format_CATEGORY = "'".$category."'";
        //     $SQL_MAIL = "SELECT email, clothID, category FROM wishlist WHERE email={$format_EMAIL} AND clothID={$clothID} AND category={$format_CATEGORY}"; 
        //     $result = mysqli_query($this->connect, $SQL_MAIL);                        
        //     if (mysqli_num_rows($result) > 0) {
        //         return true;
        //     }            
        //     return false;            
        // }

        // public function is_exist_item_shoppingbag_base_email($clothID, $category, $email){                                                
        //     $format_EMAIL = "'".$email."'";
        //     $format_CATEGORY = "'".$category."'";
        //     $SQL_EXIST = "SELECT email, clothID, category FROM shopping_bag WHERE email={$format_EMAIL} AND clothID={$clothID} AND category={$format_CATEGORY}"; 
        //     $result = mysqli_query($this->connect, $SQL_EXIST);                        
        //     if (mysqli_num_rows($result) > 0) {
        //         return true;
        //     }            
        //     return false;            
        // }

        public function get_info_base_category_clothid($category, $clothID){                        
            $SQL_QUERY = "SELECT name, brand, detail, cost_origin, cost, rating, 1star, 2star, 3star, 4star, 5star, num_review FROM {$category} WHERE id={$clothID}";            
            $RESULT = mysqli_query($this->connect, $SQL_QUERY);                         
            $RETURN_DATA = array();                                                        
            if(mysqli_num_rows($RESULT) > 0){                           
                while($row = mysqli_fetch_assoc($RESULT)){              
                    array_push($RETURN_DATA, $row);                    
                }
            }                        
            return $RETURN_DATA;
        }
    }
?>