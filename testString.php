<?php
    $something = array(
        "myFirst" => $_POST['ajax_category'],
        "mySec" => $_POST['ajax_clothid']
    );
    echo json_encode($something);
?>