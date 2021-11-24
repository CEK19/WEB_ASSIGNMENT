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
        <path d="M47.8538 36.748C45.1516 36.748 42.6457 38.6057 42.6457 39.7341C42.6457 40.8625 40.5346 77.1145 40.5346 77.1145H26.7469V16.9954H68.9692V77.1145H55.1815C55.1815 77.1145 53.0704 40.8625 53.0704 39.7341C53.0704 38.6057 50.5645 36.748 47.8623 36.748" stroke="black" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M48.3859 24.5025C49.5518 24.5025 50.497 23.5573 50.497 22.3914C50.497 21.2255 49.5518 20.2803 48.3859 20.2803C47.22 20.2803 46.2748 21.2255 46.2748 22.3914C46.2748 23.5573 47.22 24.5025 48.3859 24.5025Z" fill="black"/>
        <path d="M59.7225 20.5525C59.7225 20.5525 57.186 29.987 66.1487 32.6565" stroke="black" stroke-width="1.11111" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M35.9937 20.5525C35.9937 20.5525 38.5302 29.987 29.5675 32.6565" stroke="black" stroke-width="1.11111" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>

        <h1>
            Jeans
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