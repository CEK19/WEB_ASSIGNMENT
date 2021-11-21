<?php
    class Home extends Controller{
        //------------------------------ VIEWHOME ------------------------------//
        public function viewHome(){
            $this->view("show", [
                "content" => "home"
            ]);
        }

        //------------------------------ WISHLIST ------------------------------//
        public function wishList(){
            $this->view("show", [
                "content" => "wishList"
            ]);
        }

        //------------------------------ SALE ------------------------------//
        public function sale(){
            $this->view("show", [
                "content" => "sale"
            ]);
        }

        //------------------------------ SHOPPING BAG ------------------------------//
        public function shopping_bag(){            
            $this->view("show", [
                "content" => "shopping_bag"
            ]);
        }

        //------------------------------ SHIRT ------------------------------//
        public function shirt_polo(){
            $MODEL = $this->model("sellingPageModel");                        
            $ITEM_DATA = $MODEL->getImage_SHIRT_POLO();
            $this->view("show", [
                "content" => "shirt_polo",
                "img_info" => $ITEM_DATA,
                "folder-img" => "shirt_polo"
            ]);
        }

        public function shirt_tshirt_vest(){
            $MODEL = $this->model("sellingPageModel");                        
            $ITEM_DATA = $MODEL->getImage_SHIRT_TSHIRT_VEST();
            $this->view("show", [
                "content" => "shirt_tshirt_vest",
                "img_info" => $ITEM_DATA,
                "folder-img" => "shirt_tshirt_vest"
            ]);
        }

        public function shirt_shirt(){
            $MODEL = $this->model("sellingPageModel");                        
            $ITEM_DATA = $MODEL->getImage_SHIRT_SHIRT();
            $this->view("show", [
                "content" => "shirt_shirt",
                "img_info" => $ITEM_DATA,
                "folder-img" => "shirt_shirt"
            ]);
        }

        //------------------------------ SHOES ------------------------------//
        public function shoes_trainers(){
            $MODEL = $this->model("sellingPageModel");                        
            $ITEM_DATA = $MODEL->getImage_SHOES_TRAINER();
            $this->view("show", [
                "content" => "shoes_trainers",
                "img_info" => $ITEM_DATA,
                "folder-img" => "shoes_trainer"
            ]);
        }

        public function shoes_sandals_slippers(){
            $MODEL = $this->model("sellingPageModel");                        
            $ITEM_DATA = $MODEL->getImage_SHOES_SANDAL_SLIPPERS();
            $this->view("show", [
                "content" => "shoes_sandals_slippers",                
                "img_info" => $ITEM_DATA,
                "folder-img" => "shoes_sandal_slippers"
            ]);
        }

        public function shoes_shocks(){
            $MODEL = $this->model("sellingPageModel");                        
            $ITEM_DATA = $MODEL->getImage_SHOES_SHOCKS();
            $this->view("show", [
                "content" => "shoes_shocks",
                "img_info" => $ITEM_DATA,
                "folder-img" => "shoes_shocks"
            ]);
        }

        //------------------------------ ACCESSORIES ------------------------------//
        public function access_bag(){
            $MODEL = $this->model("sellingPageModel");                        
            $ITEM_DATA = $MODEL->getImage_ACCESS_BAGS();
            $this->view("show", [
                "content" => "access_bag",
                "img_info" => $ITEM_DATA,
                "folder-img" => "access_bags"
            ]);
        }

        public function access_caps(){
            $MODEL = $this->model("sellingPageModel");                        
            $ITEM_DATA = $MODEL->getImage_ACCESS_CAPS();
            $this->view("show", [
                "content" => "access_caps",
                "img_info" => $ITEM_DATA,
                "folder-img" => "access_caps"
            ]);
        }

        public function access_glass(){
            $MODEL = $this->model("sellingPageModel");                        
            $ITEM_DATA = $MODEL->getImage_ACCESS_SUNGLASSES();
            $this->view("show", [
                "content" => "access_glass",
                "img_info" => $ITEM_DATA,
                "folder-img" => "access_sunglasses"
            ]);
        }

        //------------------------------ PANTS ------------------------------//
        public function pants_jeans(){
            $MODEL = $this->model("sellingPageModel");                        
            $ITEM_DATA = $MODEL->getImage_PANTS_JEANS();
            $this->view("show", [
                "content" => "pants_jeans",
                "img_info" => $ITEM_DATA,
                "folder-img" => "pants_jeans"
            ]);
        }

        public function pants_jog(){
            $MODEL = $this->model("sellingPageModel");                        
            $ITEM_DATA = $MODEL->getImage_PANTS_JOGGER();
            $this->view("show", [
                "content" => "pants_jog",
                "img_info" => $ITEM_DATA,
                "folder-img" => "pants_jogger"
            ]);
        }

        public function pants_lounges(){
            $MODEL = $this->model("sellingPageModel");                        
            $ITEM_DATA = $MODEL->getImage_PANTS_LOUNGE();
            $this->view("show", [
                "content" => "pants_lounges",
                "img_info" => $ITEM_DATA,
                "folder-img" => "pants_lounge"
            ]);
        }
    }
?>