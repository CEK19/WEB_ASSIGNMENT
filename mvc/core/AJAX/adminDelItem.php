<?php
    require_once("../db.php");
    session_start();

    class adminDeleteItem extends db{
        public function adminDelItem($category ,$id){                                          
            $SQL_QUERY_DEL = "DELETE FROM {$category} WHERE id = {$id}";            
            $data_res = array(
                'status_code' => "error"
            );
            if(mysqli_query($this->connect, $SQL_QUERY_DEL)){                                                
                $data_res['status_code'] = "successful";
            }                                    
            return json_encode($data_res);
        }
    }    

    $obj = new adminDeleteItem();
    echo $obj->adminDelItem($_POST['ajax_category'], $_POST['ajax_clothid']);
?>