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
        <svg width="95" height="95" viewBox="0 0 95 95" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="47.5" cy="47.5" r="47" stroke="black"/>
        <path d="M16.2858 68.7619L19.754 27.1428H75.2461L78.7143 68.7619H52.4284L47.5001 49.6865L42.5717 68.7619H16.2858Z" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M47.5 27.1428L52.7024 39.2817" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M47.5 27.1428L40.5635 40.1488" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M37.0951 27.1428H57.9046" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>

        <h1>
            Lounges Wear
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