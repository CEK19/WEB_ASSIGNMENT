<?php
    class Home extends Controller{
        public function home(){
            // $teo = $this->model("SinhVienModel");
            // print_r($teo->GetSV());        
            $this->view("show", [
                "content" => "home"
            ]);
        }

        //------------------------------ SALE ------------------------------//
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

        //------------------------------ SHIRT ------------------------------//
        public function shirt_polo(){
            $this->view("show", [
                "content" => "shirt_polo"
            ]);
        }

        public function shirt_tshirt_vest(){
            $this->view("show", [
                "content" => "shirt_tshirt_vest"
            ]);
        }

        public function shirt_shirt(){
            $this->view("show", [
                "content" => "shirt_shirt"
            ]);
        }

        //------------------------------ SHOES ------------------------------//
        public function shoes_trainers(){
            $this->view("show", [
                "content" => "shoes_trainers"
            ]);
        }

        public function shoes_sandals_slippers(){
            $this->view("show", [
                "content" => "shoes_sandals_slippers"
            ]);
        }

        public function shoes_shocks(){
            $this->view("show", [
                "content" => "shoes_shocks"
            ]);
        }

        //------------------------------ ACCESSORIES ------------------------------//
        public function access_bag(){
            $this->view("show", [
                "content" => "access_bag"
            ]);
        }

        public function access_caps(){
            $this->view("show", [
                "content" => "access_caps"
            ]);
        }

        public function access_glass(){
            $this->view("show", [
                "content" => "access_glass"
            ]);
        }

        //------------------------------ PANTS ------------------------------//
        public function pants_jeans(){
            $this->view("show", [
                "content" => "pants_jeans"
            ]);
        }

        public function pants_jog(){
            $this->view("show", [
                "content" => "pants_jog"
            ]);
        }

        public function pants_lounges(){
            $this->view("show", [
                "content" => "pants_lounges"
            ]);
        }
    }
?>