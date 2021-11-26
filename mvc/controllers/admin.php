<?php
    class Admin extends Controller{

        // HAVE SHOW COMMENT
        public function account(){
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
            $this->view("adminpage", [
                "content" => "admin_order"
            ]);
        }

        public function comment(){
            $this->view("adminpage", [
                "content" => "admin_comment"
            ]);
        }
    }
?>