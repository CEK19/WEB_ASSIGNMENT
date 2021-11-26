<?php
    class Admin extends Controller{

        // HAVE SHOW COMMENT
        public function account(){
            $this->view("adminpage", [
                "content" => "admin_account"
            ]);
        }        
    }
?>