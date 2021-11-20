<?php

use function PHPSTORM_META\type;

class register extends controller
{

    public function viewHome()
    {
        $this->view("register");
    }
    public function comfirm_account(){
        require_once "./mvc/core/basehref.php";
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $repass = $_POST['repass'];
        $age = ctype_digit( $_POST['age']) ? (int)$_POST['age'] : $_POST['age'];
        // echo "<script>alert('".$email."') </script>";
        // $data = $this->model('registerModel')->checkAccount([
        //     "email" => $email,
        //     "pass" => $pass
        // ]);
       $flag = $this->model('registerModel')->checkAccount($email);
       if($flag){
        if(
                    is_int($age) && $age > 16 &&
                    (strlen($lname) >= 2 && strlen($lname) <= 30) &&
                    (strlen($fname) >= 2 && strlen($fname) <= 30) &&
                    (strlen($pass) >= 6 && strlen($pass) <= 60) &&
                    ($repass == $pass)&&
                    preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)
        )
        {
        $add = $this->model('registerModel')->newAccount($email,md5($pass),$age,$fname,$lname);
        header("Location: " . geturl(). "/login");
        }
        else{
            header("Location: " . geturl(). "/register");
        }
       }
       else {
        header("Location: " . geturl(). "/register");
       }
        // if ($data == 1) {
        //     if(
        //         // is_int($age) && $age > 16 &&
        //         (strlen($lname) >= 2 && strlen($lname) <= 30) &&
        //         (strlen($flname) >= 2 && strlen($fname) <= 30) &&
        //         (strlen($pass) >= 6 && strlen($pass) <= 60) &&
        //         ($repass == $pass)
        //     )
        //     {
                // $add = $this->model('registerModel')->newAccount($email,md5($pass),$age,$fname,$lname);
                // header("Location: " . geturl(). "/login");
                
        //     }
        //     else{
        //         header("Location: " . geturl(). "/register");
        //     }
        // }
        // else{
        //     header("Location: " . geturl(). "/register");
        // }
    }
}
?>
