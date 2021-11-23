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
        <svg width="96" height="97" viewBox="0 0 96 97" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M80.2384 53.6039H16.9051V63.1039H80.2384V53.6039Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M49.3159 28.2705C54.8576 34.6038 54.8576 47.2705 54.8576 53.6038H23.1909V40.1455C23.1909 40.1455 42.2384 31.4372 49.3159 28.2705Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M94.6665 48.1667C94.6665 74.3494 73.6199 95.5676 47.6665 95.5676C21.7131 95.5676 0.666504 74.3494 0.666504 48.1667C0.666504 21.984 21.7131 0.765869 47.6665 0.765869C73.6199 0.765869 94.6665 21.984 94.6665 48.1667Z" stroke="black"/>
        </svg>

        <h1>
            Sandals & Slippers
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