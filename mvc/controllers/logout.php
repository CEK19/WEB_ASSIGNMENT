<?php
class logout extends controller
{

    public function __construct()
    {
        require_once "./mvc/core/basehref.php";
        session_destroy();
        header("Location: " . getUrl(). "/login");
    }

}
?>