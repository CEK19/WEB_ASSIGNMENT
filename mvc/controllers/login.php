<?php

use function PHPSTORM_META\type;

class login extends controller
{

    public function viewHome()
    {
        // $productsByType = $this->model('ProductsModel')->getProductByType();
        if (!isset($_SESSION['error'])){
            $_SESSION['error'] = False;
        }
        $this->view("login");
    }
    public function verify(){
        require_once "./mvc/core/basehref.php";
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        echo "<script>alert('".$email."') </script>";
        $data = $this->model('loginModel')->checkAccount([
            "email" => $email,
            "pass" => $pass
        ]);
        if ($data == ""){
            $_SESSION['error'] = True;
            header("Location: " . geturl(). "/login");

        }else {
            // $_SESSION['error'] = False;
            unset($_SESSION['error']);
            $_SESSION['firstname'] = $data['firstName'] ;
            $_SESSION['lastname'] = $data['lastName'];
            // $_SESSION['username'] = $data['ID'];
            $_SESSION['user_ID'] = $data['id'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['birthday'] = $data['birthday'];
            header("Location: " . geturl(). "/Home");
        }
    }
}
?>