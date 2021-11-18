<?php
class Home extends Controller{
    public function showPage () {
        // $teo = $this->model("SinhVienModel");
        // print_r($teo->GetSV());        
        $this->view("show", [
            "content" => "sale"
        ]);
    }
}

?>