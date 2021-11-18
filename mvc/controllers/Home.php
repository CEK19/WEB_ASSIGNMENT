<?php
    class Home extends Controller{
        public function showHomePage(){
            // $teo = $this->model("SinhVienModel");
            // print_r($teo->GetSV());        
            $this->view("show", [
                "content" => "home"
            ]);
        }
        public function showSalePage(){
            $this->view("show", [
                "content" => "sale"
            ]);
        }
    }
?>