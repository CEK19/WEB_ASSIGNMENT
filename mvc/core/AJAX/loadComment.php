<?php
    require_once("../db.php");
    session_start();

    class loadComment extends db{

        public function loadCommentFunction($clothID, $category, $limit){                                                
            $format_CATEGORY = "'".$category."'";
            $SQL_LOAD = "SELECT * FROM comments WHERE clothID={$clothID} AND category={$format_CATEGORY} LIMIT $limit"; 
            $result = mysqli_query($this->connect, $SQL_LOAD);      
            
            $RETURN_DATA = array();
            if (mysqli_num_rows($result) > 0) {                                         
                while($row = mysqli_fetch_assoc($result)){              
                    array_push($RETURN_DATA, $row);                                    
                }     
            }            
            
            $run_index = 0;
            foreach($RETURN_DATA as $user){
                $format_email = '"'.$user['email'].'"';
                $SQL_LOAD_NAME = "SELECT firstName, lastName FROM account WHERE email={$format_email}";   
                $result = mysqli_query($this->connect, $SQL_LOAD_NAME);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        $RETURN_DATA[$run_index]['name'] = $row;
                        $run_index = $run_index + 1;
                    }
                }                
            }                                  
            return $RETURN_DATA;            
        }
    }

    $loadObj = new loadComment();
    $getData = $loadObj->loadCommentFunction($_POST['ajax_clothid'], $_POST['ajax_category'], $_POST['ajax_num_of_cmt']);    
?>

<?php foreach($getData as $user){
?>
        <div class="product-detail-comments-frame">
            <div class="product-detail-comments-account">
                <div class="product-detail-comments-avatar">
                    <img src="./assets/img/av5.jpg" style="height: 100%; width: 100%;">
                </div>

                <div style="display: flex; flex-direction: column;">
                    <div class="product-detail-comments-name">
                        <?php echo $user['name']['firstName']." ".$user['name']['lastName'] ?>
                    </div>
                </div>

                <div class="ms-2" style="margin-top: 20px;">
                    <i class="fas fa-star">&nbsp; <?php echo $user['star'] ?> </i>
                </div>
            </div>
            <div class="product-detail-comment" style="padding: 20px 20px 20px 20px;">
                <?php echo $user['comment'] ?>
            </div>
        </div>
<?php
    }
?>