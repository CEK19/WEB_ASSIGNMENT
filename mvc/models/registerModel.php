<?php
class registerModel extends db {
    private function _query($sql)
    {
        return mysqli_query($this->connect, $sql);
    }

    public function checkAccount($email){
        $sql = "SELECT * FROM account WHERE Email = '".$email."'";
        // echo $sql;
        $query = $this->_query($sql);
        $num = mysqli_num_rows($query);
        if($num == 0)   {
            return true;
        }
        return false;
        
    }
    public function newAccount($email, $password, $age, $fname, $lname){
        $sql = "INSERT INTO account(email, password ,age, fname,lname)  VALUES('$email', '$password','$age','$fname','$lname')";
        $query = $this->_query($sql);
        return $query;
    }
}
?>