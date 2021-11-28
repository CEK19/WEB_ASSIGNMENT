<?php
    class Admin extends Controller{

        // HAVE SHOW COMMENT
        public function account(){
            require_once "./mvc/core/basehref.php";
            $this->view("adminpage", [
                "content" => "admin_account"
            ]);
        }

        public function cloth(){
            $this->view("adminpage", [
                "content" => "admin_cloth"
            ]);
        }

        public function order(){
            require_once "./mvc/core/basehref.php";
            $MODEL = $this->model("adminModel");
            $ITEM_DATA = $MODEL->getOrder_data();

            $this->view("adminpage", [
                "content" => "admin_order",
                "item_data" => $ITEM_DATA
            ]);

            // $this->view("show", [
            //     "content" => "shirt_polo",
            //     "img_info" => $ITEM_DATA,
            //     "folder-img" => "shirt_polo",
            //     "countdata" => $this->count()
            // ]);
        }

        public function comment(){
            $this->view("adminpage", [
                "content" => "admin_comment"
            ]);
        }
    }
?>