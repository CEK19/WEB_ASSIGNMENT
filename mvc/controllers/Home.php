<?php
class Home extends Controller{
    function SayHi() {
        $teo = $this->model("SinhVienModel");
        echo $teo->GetSV();
    }
    function Show($a,$b) {
        echo "Home - Show <br>";
        $teo = $this->model("SinhVienModel");
        echo $teo->sum($a,$b);
    }
}

?>