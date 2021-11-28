<?php
    class Home extends Controller{
        public function count(){
           if(isset($_SESSION['email'])){
               return $count = $this->model('loginModel')->count_product_shopping_bag($_SESSION['email']);
           }
           else{
               return 0;
           }
        }
        //------------------------------ VIEWHOME ------------------------------//
        public function viewHome(){
          
            $this->view("show", [
                "content" => "home",
                "countdata" => $this->count()
            ]);
        }

        //------------------------------ WISHLIST ------------------------------//
        public function wishList(){
            $MODEL = $this->model("wishlistModel");                                    
            $INFO_LOGIN = "YOU MUST LOGIN TO SEE YOUR WISHLIST"; // NO LOGIN
            $ITEM_DATA = null; // NO LOGIN
            
            if($MODEL->isLogin() == true){                                            
                if($MODEL->is_exist_email_wish_list($_SESSION['email']) == true){                                        
                    $ITEM_DATA = $MODEL->get_item_based_email($_SESSION['email']);             
                    $INFO_LOGIN = "SAVED ITEM";
                }
                else{
                    $INFO_LOGIN = "Hi, you wanna add something to your wishlist ?";
                }
            }
            
            $this->view("show", [
                "content" => "wishList",
                "img_info" => $ITEM_DATA,
                "info_login" => $INFO_LOGIN,
                "countdata" => $this->count()

            ]);
        }
        //------------------------------ SHOPPING BAG ------------------------------//
        public function shopping_bag(){  
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
            $this->view("show", [
                "content" => "shopping_bag",
                "img_info"=> $ITEM_DATA,
                "info_login"=> $INFO_LOGIN,
                "countdata" => $this->count()
            ]);
        }

        //------------------------------ productDetail ------------------------------//
        public function productDetail($category_product, $id_product){
            $MODEL = $this->model("productDetailModel");    
            $ITEM_DATA = $MODEL->get_info_base_category_clothid($category_product, $id_product);
            $this->view("show", [
                "content" => "product-detail",
                "img_info" => $ITEM_DATA,
                "category" => $category_product,
                "id_product" => $id_product,
                "countdata" => $this->count()
            ]);
        }

        //------------------------------ SALE ------------------------------//
        public function sale(){
            $this->view("show", [
                "content" => "sale",
                "countdata" => $this->count()
            ]);
        }

        
        //------------------------------ SHIRT ------------------------------//
        public function shirt_polo(){
            $MODEL = $this->model("sellingPageModel");                        
            $ITEM_DATA = $MODEL->getImage_SHIRT_POLO();
            $this->view("show", [
                "content" => "shirt_polo",
                "img_info" => $ITEM_DATA,
                "folder-img" => "shirt_polo",
                "countdata" => $this->count()
            ]);
        }

        public function shirt_tshirt_vest(){
            $MODEL = $this->model("sellingPageModel");                        
            $ITEM_DATA = $MODEL->getImage_SHIRT_TSHIRT_VEST();
            $this->view("show", [
                "content" => "shirt_tshirt_vest",
                "img_info" => $ITEM_DATA,
                "folder-img" => "shirt_tshirt_vest",
                "countdata" => $this->count()
            ]);
        }

        public function shirt_shirt(){
            $MODEL = $this->model("sellingPageModel");                        
            $ITEM_DATA = $MODEL->getImage_SHIRT_SHIRT();
            $this->view("show", [
                "content" => "shirt_shirt",
                "img_info" => $ITEM_DATA,
                "folder-img" => "shirt_shirt",
                "countdata" => $this->count()
            ]);
        }

        //------------------------------ SHOES ------------------------------//
        public function shoes_trainers(){
            $MODEL = $this->model("sellingPageModel");                        
            $ITEM_DATA = $MODEL->getImage_SHOES_TRAINER();
            $this->view("show", [
                "content" => "shoes_trainers",
                "img_info" => $ITEM_DATA,
                "folder-img" => "shoes_trainers",
                "countdata" => $this->count()
            ]);
        }

        public function shoes_sandals_slippers(){
            $MODEL = $this->model("sellingPageModel");                        
            $ITEM_DATA = $MODEL->getImage_SHOES_SANDAL_SLIPPERS();
            $this->view("show", [
                "content" => "shoes_sandals_slippers",                
                "img_info" => $ITEM_DATA,
                "folder-img" => "shoes_sandals_slippers",
                "countdata" => $this->count()
            ]);
        }

        public function shoes_shocks(){
            $MODEL = $this->model("sellingPageModel");                        
            $ITEM_DATA = $MODEL->getImage_SHOES_SHOCKS();
            $this->view("show", [
                "content" => "shoes_shocks",
                "img_info" => $ITEM_DATA,
                "folder-img" => "shoes_shocks",
                "countdata" => $this->count()
            ]);
        }

        //------------------------------ ACCESSORIES ------------------------------//
        public function access_bag(){
            $MODEL = $this->model("sellingPageModel");                        
            $ITEM_DATA = $MODEL->getImage_ACCESS_BAGS();
            $this->view("show", [
                "content" => "access_bag",
                "img_info" => $ITEM_DATA,
                "folder-img" => "access_bag",
                "countdata" => $this->count()
            ]);
        }

        public function access_caps(){
            $MODEL = $this->model("sellingPageModel");                        
            $ITEM_DATA = $MODEL->getImage_ACCESS_CAPS();
            $this->view("show", [
                "content" => "access_caps",
                "img_info" => $ITEM_DATA,
                "folder-img" => "access_caps",
                "countdata" => $this->count()
            ]);
        }

        public function access_glass(){
            $MODEL = $this->model("sellingPageModel");                        
            $ITEM_DATA = $MODEL->getImage_ACCESS_SUNGLASSES();
            $this->view("show", [
                "content" => "access_glass",
                "img_info" => $ITEM_DATA,
                "folder-img" => "access_glass",
                "countdata" => $this->count()
            ]);
        }

        //------------------------------ PANTS ------------------------------//
        public function pants_jeans(){
            $MODEL = $this->model("sellingPageModel");                        
            $ITEM_DATA = $MODEL->getImage_PANTS_JEANS();
            $this->view("show", [
                "content" => "pants_jeans",
                "img_info" => $ITEM_DATA,
                "folder-img" => "pants_jeans",
                "countdata" => $this->count()
            ]);
        }

        public function pants_jog(){
            $MODEL = $this->model("sellingPageModel");                        
            $ITEM_DATA = $MODEL->getImage_PANTS_JOGGER();
            $this->view("show", [
                "content" => "pants_jog",
                "img_info" => $ITEM_DATA,
                "folder-img" => "pants_jog",
                "countdata" => $this->count()
            ]);
        }

        public function pants_lounges(){
            $MODEL = $this->model("sellingPageModel");                        
            $ITEM_DATA = $MODEL->getImage_PANTS_LOUNGE();
            $this->view("show", [
                "content" => "pants_lounges",
                "img_info" => $ITEM_DATA,
                "folder-img" => "pants_lounges",
                "countdata" => $this->count()
            ]);
        }
    }
?>