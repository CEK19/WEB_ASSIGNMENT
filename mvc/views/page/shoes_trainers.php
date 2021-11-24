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
        <svg width="95" height="96" viewBox="0 0 95 96" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M93.6665 47.7848C93.6665 73.6891 72.8438 94.6814 47.1665 94.6814C21.4892 94.6814 0.666504 73.6891 0.666504 47.7848C0.666504 21.8805 21.4892 0.888184 47.1665 0.888184C72.8438 0.888184 93.6665 21.8805 93.6665 47.7848Z" stroke="black"/>
            <path d="M73.1285 28.8884H52.538V37.3932H73.1285V28.8884Z" stroke="black" stroke-miterlimit="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M73.1284 37.3936V60.7817C73.1284 61.9617 71.9831 62.9078 70.5546 62.9078H26.7998C23.9558 62.9078 21.6522 61.0049 21.6522 58.6555V52.2769C21.6522 47.578 26.2593 43.7721 31.9475 43.7721H52.5379V37.3936H73.1284Z" stroke="black" stroke-miterlimit="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M34.5214 50.1505V43.772" stroke="black" stroke-miterlimit="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M43.5293 50.1505V43.772" stroke="black" stroke-miterlimit="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M35.8083 67.1601V62.9077" stroke="black" stroke-miterlimit="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M26.7995 67.1601V62.9077" stroke="black" stroke-miterlimit="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M44.8161 67.1601V62.9077" stroke="black" stroke-miterlimit="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M60.259 67.1601V62.9077" stroke="black" stroke-miterlimit="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M69.2677 67.1601V62.9077" stroke="black" stroke-miterlimit="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M46.1038 43.772H31.9478" stroke="black" stroke-miterlimit="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>

        <h1>
            Trainers
        </h1>
    </div>    

        <!-- -----------------INTRODUCE--------------------- -->
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