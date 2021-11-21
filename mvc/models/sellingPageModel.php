<?php
    class sellingPageModel extends db{
    
        // FUNCTION TO GET IMAGE
        public function getImage_ACCESS_BAGS(){                    
            $SQL_QUERY = "SELECT id, name, brand, detail, cost_origin, cost, quantity, rating, 1star, 2star, 3star, 4star, 5star, num_review FROM access_bag";
            $RESULT = mysqli_query($this->connect, $SQL_QUERY);                         
            $RETURN_DATA = array();                                                        
            if(mysqli_num_rows($RESULT) > 0){                           
                while($row = mysqli_fetch_assoc($RESULT)){              
                    array_push($RETURN_DATA, $row);                    
                }
            }                        
            return $RETURN_DATA;
        }

        public function getImage_ACCESS_CAPS(){
            $SQL_QUERY = "SELECT id, name, brand, detail, cost_origin, cost, quantity, rating, 1star, 2star, 3star, 4star, 5star, num_review FROM access_caps";
            $RESULT = mysqli_query($this->connect, $SQL_QUERY);                         
            $RETURN_DATA = array();                                                        
            if(mysqli_num_rows($RESULT) > 0){                           
                while($row = mysqli_fetch_assoc($RESULT)){              
                    array_push($RETURN_DATA, $row);                    
                }
            }                        
            return $RETURN_DATA;
        }

        public function getImage_ACCESS_SUNGLASSES(){
            $SQL_QUERY = "SELECT id, name, brand, detail, cost_origin, cost, quantity, rating, 1star, 2star, 3star, 4star, 5star, num_review FROM access_glass";
            $RESULT = mysqli_query($this->connect, $SQL_QUERY);                         
            $RETURN_DATA = array();                                                        
            if(mysqli_num_rows($RESULT) > 0){                           
                while($row = mysqli_fetch_assoc($RESULT)){              
                    array_push($RETURN_DATA, $row);                    
                }
            }                        
            return $RETURN_DATA;
        }

        public function getImage_PANTS_JEANS(){
            $SQL_QUERY = "SELECT id, name, brand, detail, cost_origin, cost, quantity, rating, 1star, 2star, 3star, 4star, 5star, num_review FROM pants_jeans";
            $RESULT = mysqli_query($this->connect, $SQL_QUERY);                         
            $RETURN_DATA = array();                                                        
            if(mysqli_num_rows($RESULT) > 0){                           
                while($row = mysqli_fetch_assoc($RESULT)){              
                    array_push($RETURN_DATA, $row);                    
                }
            }                        
            return $RETURN_DATA;            
        }

        public function getImage_PANTS_JOGGER(){
            $SQL_QUERY = "SELECT id, name, brand, detail, cost_origin, cost, quantity, rating, 1star, 2star, 3star, 4star, 5star, num_review FROM pants_jog";
            $RESULT = mysqli_query($this->connect, $SQL_QUERY);                         
            $RETURN_DATA = array();                                                        
            if(mysqli_num_rows($RESULT) > 0){                           
                while($row = mysqli_fetch_assoc($RESULT)){              
                    array_push($RETURN_DATA, $row);                    
                }
            }                        
            return $RETURN_DATA;
        }

        public function getImage_PANTS_LOUNGE(){
            $SQL_QUERY = "SELECT id, name, brand, detail, cost_origin, cost, quantity, rating, 1star, 2star, 3star, 4star, 5star, num_review FROM pants_lounges";
            $RESULT = mysqli_query($this->connect, $SQL_QUERY);                         
            $RETURN_DATA = array();                                                        
            if(mysqli_num_rows($RESULT) > 0){                           
                while($row = mysqli_fetch_assoc($RESULT)){              
                    array_push($RETURN_DATA, $row);                    
                }
            }                        
            return $RETURN_DATA;
        }

        public function getImage_SHIRT_POLO(){
            $SQL_QUERY = "SELECT id, name, brand, detail, cost_origin, cost, quantity, rating, 1star, 2star, 3star, 4star, 5star, num_review FROM shirt_polo";
            $RESULT = mysqli_query($this->connect, $SQL_QUERY);                         
            $RETURN_DATA = array();                                                        
            if(mysqli_num_rows($RESULT) > 0){                           
                while($row = mysqli_fetch_assoc($RESULT)){              
                    array_push($RETURN_DATA, $row);                    
                }
            }                        
            return $RETURN_DATA;
        }

        public function getImage_SHIRT_SHIRT(){
            $SQL_QUERY = "SELECT id, name, brand, detail, cost_origin, cost, quantity, rating, 1star, 2star, 3star, 4star, 5star, num_review FROM shirt_shirt";
            $RESULT = mysqli_query($this->connect, $SQL_QUERY);                         
            $RETURN_DATA = array();                                                        
            if(mysqli_num_rows($RESULT) > 0){                           
                while($row = mysqli_fetch_assoc($RESULT)){              
                    array_push($RETURN_DATA, $row);                    
                }
            }                        
            return $RETURN_DATA;
        }

        public function getImage_SHIRT_TSHIRT_VEST(){
            $SQL_QUERY = "SELECT id, name, brand, detail, cost_origin, cost, quantity, rating, 1star, 2star, 3star, 4star, 5star, num_review FROM shirt_tshirt_vest";
            $RESULT = mysqli_query($this->connect, $SQL_QUERY);                         
            $RETURN_DATA = array();                                                        
            if(mysqli_num_rows($RESULT) > 0){                           
                while($row = mysqli_fetch_assoc($RESULT)){              
                    array_push($RETURN_DATA, $row);                    
                }
            }                        
            return $RETURN_DATA;
        }

        public function getImage_SHOES_SANDAL_SLIPPERS(){
            $SQL_QUERY = "SELECT id, name, brand, detail, cost_origin, cost, quantity, rating, 1star, 2star, 3star, 4star, 5star, num_review FROM shoes_sandals_slippers";
            $RESULT = mysqli_query($this->connect, $SQL_QUERY);                         
            $RETURN_DATA = array();                                                        
            if(mysqli_num_rows($RESULT) > 0){                           
                while($row = mysqli_fetch_assoc($RESULT)){              
                    array_push($RETURN_DATA, $row);                    
                }
            }                        
            return $RETURN_DATA;
        }

        public function getImage_SHOES_SHOCKS(){
            $SQL_QUERY = "SELECT id, name, brand, detail, cost_origin, cost, quantity, rating, 1star, 2star, 3star, 4star, 5star, num_review FROM shoes_shocks";
            $RESULT = mysqli_query($this->connect, $SQL_QUERY);                         
            $RETURN_DATA = array();                                                        
            if(mysqli_num_rows($RESULT) > 0){                           
                while($row = mysqli_fetch_assoc($RESULT)){              
                    array_push($RETURN_DATA, $row);                    
                }
            }                        
            return $RETURN_DATA;
        }
        
        public function getImage_SHOES_TRAINER(){
            $SQL_QUERY = "SELECT id, name, brand, detail, cost_origin, cost, quantity, rating, 1star, 2star, 3star, 4star, 5star, num_review FROM shoes_trainers";
            $RESULT = mysqli_query($this->connect, $SQL_QUERY);                         
            $RETURN_DATA = array();                                                        
            if(mysqli_num_rows($RESULT) > 0){                           
                while($row = mysqli_fetch_assoc($RESULT)){              
                    array_push($RETURN_DATA, $row);                    
                }
            }                        
            return $RETURN_DATA;
        }
    }
?>