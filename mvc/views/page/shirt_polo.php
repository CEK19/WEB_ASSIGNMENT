<div class="sellingPageLayout">
    <div class="information del-mobile-sm">
        <div class="in4 r-border">
            <div class="block-text">
                <p>EXTRA 20% OFF</p>
                <p>CLICK HERE FOR MORE INFORMATION</p>
            </div>
        </div>
        <div class="in4 l-border">
            <div class="block-text">
                <p>UP TO 50% OF SWEET STYLES</p>
            </div>
        </div>
    </div>

    <!-- INFORMATION IN MOBILE STYLE -->
    <div class="information-mobile" style="display: none;">
        <div class="block-text-mobile" style="width:100%;">
            <p>UP TO 50% OF SWEET STYLES</p>
        </div>
    </div>

    <div class="item-symbol">
        <svg width="94" height="94" viewBox="0 0 94 94" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="46.9527" cy="46.9527" r="46.4527" stroke="black"/>
        <path d="M62.3346 23.9635L66.2013 25.014V78.8602H25.3197V25.014L28.9427 23.8557" stroke="black" stroke-width="1.11111" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M79.4308 45.6328L66.2009 41.5923V25.0142L83.4713 33.0951L79.4308 45.6328Z" stroke="black" stroke-width="1.11111" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M12.0896 45.6328L25.3195 41.5923V25.0142L8.04913 33.0951L12.0896 45.6328Z" stroke="black" stroke-width="1.11111" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M54.2748 20.133L48.206 26.6598L52.528 33.6161C62.1686 21.6913 58.8675 18.4199 58.8675 18.4199C44.8026 7.15902 32.3485 18.4199 32.3485 18.4199C32.3485 18.4199 29.046 21.6926 38.6866 33.6161L43.01 26.6598L36.9317 20.1236" stroke="black" stroke-width="1.11111" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M45.608 33.7793C46.2424 33.7793 46.7568 33.2649 46.7568 32.6304C46.7568 31.9959 46.2424 31.4816 45.608 31.4816C44.9735 31.4816 44.4591 31.9959 44.4591 32.6304C44.4591 33.2649 44.9735 33.7793 45.608 33.7793Z" fill="black"/>
        <path d="M45.608 38.179C46.2424 38.179 46.7568 37.6647 46.7568 37.0302C46.7568 36.3957 46.2424 35.8813 45.608 35.8813C44.9735 35.8813 44.4591 36.3957 44.4591 37.0302C44.4591 37.6647 44.9735 38.179 45.608 38.179Z" fill="black"/>
        <path d="M45.608 42.578C46.2424 42.578 46.7568 42.0636 46.7568 41.4291C46.7568 40.7946 46.2424 40.2803 45.608 40.2803C44.9735 40.2803 44.4591 40.7946 44.4591 41.4291C44.4591 42.0636 44.9735 42.578 45.608 42.578Z" fill="black"/>
        </svg>
        <h1>
            Polo Shirts
        </h1>
    </div>    

    <!-- -----------------INTRODUCE--------------------- -->
    <div class="selling-container d-flex justify-content-center">
        <div class="selling-introduce-hot">

        <?php
            if(isset($data['img_info'])){
                foreach($data['img_info'] as $item){ 
        ?>
            <div class="selling-frame mb-3">
                <div class="selling-img-here mb-3">
                    <!--IMAGE HERE-->
                    <?php
                        $PATH_IMAGE = './mvc/database/'.$data['folder-img'].'/'.$item['id'].'.jpeg';                        
                        echo '<img src="'.$PATH_IMAGE.'"'.'style="width:100%;">';
                    ?>                            
                    <!--IMAGE HERE-->
                </div>
                <div style="width:100%; padding: 0 25px 0 25px;">
                    <h4><?php echo $item['name'] ?></h4>
                    <hr class="mt-2 mb-2">     
                    <div class="d-flex flex-row mt-2">
                        <p class="text-decoration-line-through fst-italic fs-5 mb-0 me-5 align-middle"><?php echo $item['cost_origin'].'$' ?><p>
                        <p class="fw-bolder fs-4 mb-0 align-middle"> <?php echo $item['cost'].'$' ?> </p>
                    </div>         
                    <hr class="mt-2 mb-2">                               
                </div>
            </div>  
                    
        <?php
                }
            }
        ?>

    </div>          
</div>