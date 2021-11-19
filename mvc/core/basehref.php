<?php
    function getUrl(){
        $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
        return $home_url;
    }
?>