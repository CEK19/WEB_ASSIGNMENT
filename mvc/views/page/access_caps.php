<div class="sellingPageLayout">
    <div class="information">
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

    <div class="item-symbol">
        <svg width="95" height="96" viewBox="0 0 95 96" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M94.5 47.9008C94.5 74.0836 73.4534 95.3017 47.5 95.3017C21.5466 95.3017 0.5 74.0836 0.5 47.9008C0.5 21.7181 21.5466 0.5 47.5 0.5C73.4534 0.5 94.5 21.7181 94.5 47.9008Z" stroke="black"/>
        <path d="M28.2285 49.245C28.2285 35.5387 38.9219 24.4287 52.1143 24.4287C65.3066 24.4287 76 35.5387 76 49.245V58.5512H28.2285V49.245Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M56.5928 58.5515H20.7643C18.2908 58.5515 16.2857 60.6348 16.2857 63.2046C16.2857 65.7744 18.2908 67.8576 20.7643 67.8576H56.5928C59.0663 67.8576 61.0714 65.7744 61.0714 63.2046C61.0714 60.6348 59.0663 58.5515 56.5928 58.5515Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>

        <h1>
            Caps
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
                    <div class="d-flex flex-row mt-2">
                        <p class="text-decoration-line-through fst-italic fs-5 mb-0 me-5 align-middle"><?php echo $item['cost_origin'].'$' ?><p>
                        <p class="fw-bolder fs-4 mb-0 align-middle"> <?php echo $item['cost'].'$' ?> </p>
                    </div>
                    <hr class="mt-2 mb-2">                    
                </div>
                <button type="button" class="btn-sm btn-light btn-outline-dark border-4 mt-2">
                    <h3 class="mb-0">MOVE TO BAG</h3>
                </button>
            </div>  
                    
        <?php
                }
            }
        ?>

    </div>          
</div>