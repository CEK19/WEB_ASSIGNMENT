<?php

use function PHPSTORM_META\type;

class login extends controller
{

    public function viewHome()
    {
        require_once "./mvc/core/basehref.php";
       
        if (isset($_SESSION['login']) && $_SESSION['login']){
            header("Location: " . geturl(). "/Home");
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
            $_SESSION['login'] = false;
            header("Location: " . geturl(). "/login");

        }else {
            // $_SESSION['error'] = False;
            // $_SESSION['count'] = $count;
            $_SESSION['type'] = $data['level'];
            $_SESSION['login'] = true;
            $_SESSION['firstname'] = $data['firstName'] ;
            $_SESSION['lastname'] = $data['lastName'];
            // $_SESSION['username'] = $data['ID'];
            $_SESSION['level'] = $data['level'];
            $_SESSION['user_ID'] = $data['user_id'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['birthday'] = $data['birthday'];
            if($_SESSION['type'] == 1) {
                header("Location: " . geturl(). "/Home");
            }
            else {
                header("Location: " . geturl(). "/?url=Admin/account");
            }
           
        }
    }
}
?>