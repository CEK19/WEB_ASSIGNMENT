<?php

use function PHPSTORM_META\type;

class checkOut extends controller
{
    public function count(){
        if(isset($_SESSION['email'])){
            return $count = $this->model('loginModel')->count_product_shopping_bag($_SESSION['email']);
        }
        else{
            return 0;
        }
     }
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
                "info_login"=> $INFO_LOGIN,
                "countdata" => $this->count()
            ]);
       
    }
    public function update_shoppingbag()
    {
        require_once "./mvc/core/basehref.php";
        $colors = $_POST['colors']; // Mảng color
        $sizes = $_POST['sizes'];
        $quantities = $_POST['quantities'];
        $ids = $_POST['ids'];
        for ($i = 0; $i < count($colors); $i++){
            $temp = $this->model('checkoutModel')->update_shopping_bag($colors[$i], $sizes[$i], $quantities[$i], $ids[$i]);
        }
        header("Location: " . getUrl(). "/checkOut");
    }
    public function delete_shoppingbag(){
        // require_once "./mvc/core/basehref.php";
        $result = $this->model('checkoutModel')->delete_bag();
        echo "<script>alert('Success payment')</script>";
        echo "<script>window.location = '../?url=Home/shopping_bag';</script>";
        

    }
}
?>
