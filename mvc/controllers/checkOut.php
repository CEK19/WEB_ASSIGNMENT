<?php

use function PHPSTORM_META\type;

class checkOut extends controller
{

    public function viewHome()
    {
        $MODEL = $this->model("shopping_bagModel");
            $INFO_LOGIN = "YOU MUST LOGIN TO SEE YOUR SHOPPING BAG"; // NO LOGIN;
            $ITEM_DATA = null; // NO LOGIN
            if($MODEL->isLogin() == true) {
                if($MODEL->is_exist_email_shoppingbag_list($_SESSION['email']) == true){
                    $ITEM_DATA = $MODEL->get_item_based_email($_SESSION['email']);
                    $INFO_LOGIN = "MY BAG";
                } else {
                    $INFO_LOGIN = "NONE ITEM IN YOUR BAG";
                }
            }   
            $this->view("checkOut", [
                "img_info"=> $ITEM_DATA,
                "info_login"=> $INFO_LOGIN
            ]);
       
    }
    public function update_shoppingbag()
    {
        require_once "./mvc/core/basehref.php";
        $colors = $_POST['colors'];
        $sizes = $_POST['sizes'];
        $quantities = $_POST['quantities'];
        $ids = $_POST['ids'];
        for ($i = 0; $i < count($colors); $i++){
            $temp = $this->model('checkoutModel')->update_shopping_bag($colors[$i], $sizes[$i], $quantities[$i], $ids[$i]);
        }
        header("Location: " . getUrl(). "/checkOut");
    }
}
?>
