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
        <svg width="94" height="94" viewBox="0 0 94 94" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="47" cy="47" r="46.5" stroke="black"/>
        <path d="M56.7683 18.8C56.7683 18.8 53.4908 19.9363 48.3428 19.9363C43.1949 19.9363 39.9174 18.8 39.9174 18.8C39.3995 18.8001 38.8853 18.8865 38.3966 19.0557L16.1143 26.7539L18.5069 39.2528L25.5397 40.0368C26.4009 40.133 27.194 40.5455 27.7615 41.1922C28.3289 41.839 28.6293 42.6728 28.6028 43.528L27.6245 77.8858H69.0612L68.0828 43.528C68.0564 42.6728 68.3567 41.839 68.9242 41.1922C69.4916 40.5455 70.2847 40.133 71.146 40.0368L78.1787 39.2528L80.5714 26.7539L58.2891 19.0557C57.8004 18.8865 57.2862 18.8001 56.7683 18.8V18.8Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M59.0857 18.8C58.4556 21.1105 57.0607 23.153 55.1179 24.6101C53.1751 26.0672 50.7933 26.8572 48.3428 26.8572C45.8924 26.8572 43.5106 26.0672 41.5678 24.6101C39.625 23.153 38.2301 21.1105 37.6 18.8" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>

        <h1>
            Shirts
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