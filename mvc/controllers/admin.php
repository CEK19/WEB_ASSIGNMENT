<?php
    class Admin extends Controller{

        // HAVE SHOW COMMENT
        public function account(){
            require_once "./mvc/core/basehref.php";
            $MODEL = $this->model("adminModel");
            $ITEM_DATA = $MODEL->getAccount_data();

            require_once "./mvc/core/basehref.php";
            $this->view("adminpage", [
                "content" => "admin_account",
                "item_data" => $ITEM_DATA
            ]);
        }

        public function cloth($param = "access_bag"){            
            require_once "./mvc/core/basehref.php";
            $MODEL = $this->model("adminModel");
            $ITEM_DATA = $MODEL->getCloth_data($param);

            $this->view("adminpage", [
                "content" => "admin_cloth",
                "item_data" => $ITEM_DATA
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
        }

        public function order_query($email){
            // require_once "./mvc/core/basehref.php";
            $MODEL = $this->model("adminModel");
            $ITEM_DATA = $MODEL->queryFunc($email);            
            $this->view("adminpage", [
                "content" => "admin_order",
                "item_data" => $ITEM_DATA
            ]);
        }

        public function comment(){
            require_once "./mvc/core/basehref.php";
            $MODEL = $this->model("adminModel");
            $ITEM_DATA = $MODEL->getComment_data();

            $this->view("adminpage", [
                "content" => "admin_comment",
                "item_data" => $ITEM_DATA
            ]);
        }
    }
?>