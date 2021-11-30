<?php
    require_once("../db.php");
    session_start();

    class adminDeleteOrder extends db{
        public function adminDelOrder($id){                                          
            $SQL_QUERY_DEL = "DELETE FROM orders WHERE id = {$id}";            
            $data_res = array(
                'status_code' => "error"
            );
            if(mysqli_query($this->connect, $SQL_QUERY_DEL)){                                                
                $data_res['status_code'] = "successful";
            }                                    
            return json_encode($data_res);
        }
    }    

    $obj = new adminDeleteOrder();
    echo $obj->adminDelOrder($_POST['ajax_id']);
?>