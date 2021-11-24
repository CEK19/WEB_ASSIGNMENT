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
        <circle cx="47" cy="47" r="46.5" stroke="black"/>
        <path d="M64.1214 16.1143H56.9875L47 44.65V73.1857H69.8286V37.516L64.1214 28.9553V16.1143Z" stroke="black" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M29.8785 16.1143H37.0125L47 44.65V73.1857H24.1714V37.516L29.8785 28.9553V16.1143Z" stroke="black" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>

        <h1>
            T-shirts & Vests
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