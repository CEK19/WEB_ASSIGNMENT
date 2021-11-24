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
        <svg width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M94.6665 47.9008C94.6665 74.0836 73.6199 95.3017 47.6665 95.3017C21.7131 95.3017 0.666504 74.0836 0.666504 47.9008C0.666504 21.7181 21.7131 0.5 47.6665 0.5C73.6199 0.5 94.6665 21.7181 94.6665 47.9008Z" stroke="black"/>
        <path d="M73.4524 40.9104C68.806 40.9104 61.0621 40.9104 57.9645 48.7361C54.8669 56.5619 58.7389 63.605 62.6108 67.5179" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M39.3788 28.3914H73.4522" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M42.4762 19.0005H70.3545C71.176 19.0005 71.9639 19.3303 72.5448 19.9173C73.1257 20.5044 73.4521 21.3006 73.4521 22.1308V50.7542C73.4521 56.1257 70.974 61.189 66.7365 64.4335C61.0958 68.7533 53.4541 74.5757 50.2202 76.9109C44.7994 80.8237 34.7323 84.7366 26.9883 76.9109C19.2443 69.0851 21.1803 58.8225 26.9883 53.4337C32.7963 48.0449 39.3786 42.7156 39.3786 42.7156V22.1308C39.3786 21.3006 39.705 20.5044 40.2859 19.9173C40.8668 19.3303 41.6547 19.0005 42.4762 19.0005V19.0005Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>

        <h1>
            Shocks
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