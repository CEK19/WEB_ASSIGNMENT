<?php
    require_once("../db.php");
    session_start();

    class adminDeleteComment extends db{ 

        public function deleteComment($id_cmt,$category, $clothID, $email, $star, $comment){                        
            $format_category = "'".$category."'";
            $format_comment = "'".$comment."'";        
            $format_email = "'".$email."'";            
            $SQL_QUERY = "DELETE FROM comments WHERE id={$id_cmt}";            
            $response_data = array(
                'status_delete' => "error",         
                'status_update' => "error"
            );

            if(mysqli_query($this->connect, $SQL_QUERY)){                
                $response_data['status_delete'] = "successful";                

                $SQL_SELECT = "SELECT * FROM {$category} WHERE id = {$clothID}";                
                $RESULT_SELECT = mysqli_query($this->connect, $SQL_SELECT);

                $data_return = array();
                if(mysqli_num_rows($RESULT_SELECT) > 0){
                    while($row = mysqli_fetch_assoc($RESULT_SELECT)){
                        array_push($data_return, $row);                        
                    }
                }
                                
                $start_header = null;                
                if($star == 1){
                    $start_header = "1star";
                }
                else if($star == 2){
                    $start_header = "2star";
                }
                else if($star == 3){
                    $start_header = "3star";
                }
                else if($star == 4){
                    $start_header = "4star";
                }
                else if($star == 5){
                    $start_header = "5star";
                }
                
                $data_return[0]['num_review'] = $data_return[0]['num_review'] - 1;
                $data_return[0][$start_header] = $data_return[0][$start_header] - 1;                

                $SQL_UPDATE = "UPDATE {$category} SET {$start_header}= {$data_return[0][$start_header]}, num_review = {$data_return[0]['num_review']} WHERE id = {$clothID}";
                $response_data['SQL_UPDATE'] = $SQL_UPDATE;
                if(mysqli_query($this->connect, $SQL_UPDATE)){
                    $response_data['status_update'] = "successful";                    
                }                
            }                        
            return json_encode($response_data);
        }        
    }    
    
    $obj = new adminDeleteComment();
    echo $obj->deleteComment($_POST['id_cmt'], $_POST['category'], $_POST['clothID'], $_POST['email'], $_POST['star'], $_POST['comment']);
?>