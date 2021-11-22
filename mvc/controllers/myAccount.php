<?php

use function PHPSTORM_META\type;

class myAccount extends controller
{

    public function viewHome()
    {
        // $productsByType = $this->model('ProductsModel')->getProductByType();
        if (!isset($_SESSION['error'])){
            $_SESSION['error'] = False;
        }
        $this->view("myAccount");
    }
    public function update() {
        require_once "./mvc/core/basehref.php";
        $id = $_SESSION['user_ID'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $birthday = $_POST['birthday'];
        $year = (int)substr($birthday,0,4);
        $date = getdate();
        $current_year = (int)$date['year'];
        if(         ($current_year - $year) >= 16 &&
                    (strlen($lname) >= 2 && strlen($lname) <= 30) &&
                    (strlen($fname) >= 2 && strlen($fname) <= 30) &&
                    (strlen($pass) >= 10) &&
                    preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)
        )
        {
        $update = $this->model('myAccountModel')->updateAccount($email,md5($pass),$birthday,$fname,$lname,$id);
        header("Location: " . geturl(). "/Home");
        }
        else{
            header("Location: " . geturl(). "/myAccount");
        }
      
    }
}
?>