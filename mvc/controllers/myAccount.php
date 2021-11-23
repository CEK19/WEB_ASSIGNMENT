<?php

use function PHPSTORM_META\type;

class myAccount extends controller
{

    public function viewHome()
    {
        // $productsByType = $this->model('ProductsModel')->getProductByType();
        if (isset($_SESSION['login'])){
            if($_SESSION['login']){
                $this->view("myAccount");
            }
            else {
                $this->view("login");
            }
        } else {
            $this->view("login");
        }
        
    }
    public function update() {
        require_once "./mvc/core/basehref.php";
        $id = $_SESSION['user_ID'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        if(       
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