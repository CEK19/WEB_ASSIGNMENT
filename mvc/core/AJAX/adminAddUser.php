<?php
    require_once("../db.php");
    session_start();

    class adminAddUser extends db{

        public function getAccount_data(){
            $SQL_QUERY = "SELECT `user_id`, firstName, lastName, email, `level` FROM account";
            $RESULT = mysqli_query($this->connect, $SQL_QUERY);                         
            $RETURN_DATA = array();                                               
            if(mysqli_num_rows($RESULT) > 0){                           
                while($row = mysqli_fetch_assoc($RESULT)){              
                    array_push($RETURN_DATA, $row);                  
                }
            }                  
            return $RETURN_DATA;
        }

        public function adminAdd($fname, $lname, $email){
            $format_fname = "'".$fname."'";
            $format_lname = "'".$lname."'";
            $format_email = "'".$email."'";
                        
            $SQL_QUERY_ADD = "INSERT INTO account (firstName, lastName, birthday, email, password, level) VALUES ({$format_fname}, {$format_lname} , '2001-02-13' , {$format_email}, '8c649e23ba34274f603b93d38e8840eb', 2)";            
            
            $data = array();
            if(mysqli_query($this->connect, $SQL_QUERY_ADD)){                                                
                $data['item_data'] = $this->getAccount_data();                
?>              
                <tbody>
                <tr>
                    <th>UserID</th>
                    <th>Avatar</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Type</th>
                    <th>Function</th>
                </tr>
                <?php
                    if (isset($data['item_data'])) {
                        foreach ($data['item_data'] as $item) {
                    ?>

                            <tr id="comment-row-<?php echo $item['user_id']; ?>">
                                <td><?php echo $item['user_id']; ?></td>
                                <td class="py-1">
                                    <div style="width: 50px;"><img src="./assets/img/av0.png" width="100%"></div>
                                </td>
                                <td><?php echo $item['firstName']; ?></td>
                                <td><?php echo $item['lastName']; ?></td>
                                <td><?php echo $item['email']; ?></td>
                                <td><?php 
                                    if($item['level'] == 1) echo "user";
                                    else if($item['level'] == 2) echo "admin";
                                    else echo "undefined";
                                ?></td>
                                <td>
                                    <button class="btn btn-danger">Kick</button>                                    
                                </td>
                            </tr>

                    <?php
                        }
                    }
                    ?>     
            </tbody>                               
<?php                
            }                                    
        }
    }

    $newObj = new adminAddUser();
    $newObj->adminAdd($_POST['ajax_fname'], $_POST['ajax_lname'], $_POST['ajax_email']);
?>