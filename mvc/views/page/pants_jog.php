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
        <svg width="95" height="95" viewBox="0 0 95 95" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="47.5" cy="47.5" r="47" stroke="black"/>
        <path d="M47.4999 40.4881L60.3928 67.7063H73.2857L67.5555 19H27.4444L21.7142 67.7063H34.6071L47.4999 40.4881Z" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M61.8252 67.7064L63.2577 76.3017H71.853V67.7064H61.8252Z" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M31.7418 76.3017H23.1466V67.7064H33.1744L31.7418 76.3017Z" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M47.5 19L53.2302 29.744" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M47.5001 19L41.7699 29.744" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>

        <h1>
            Joggers
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