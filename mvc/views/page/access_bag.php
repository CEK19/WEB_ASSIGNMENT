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
        <path d="M94.6665 48.289C94.6665 74.4718 73.6199 95.6899 47.6665 95.6899C21.7131 95.6899 0.666504 74.4718 0.666504 48.289C0.666504 22.1063 21.7131 0.888184 47.6665 0.888184C73.6199 0.888184 94.6665 22.1063 94.6665 48.289Z" stroke="black"/>
        <path d="M30.9293 34.6203C30.9293 27.1248 38.7272 21.0488 48.346 21.0488C57.9647 21.0488 65.7626 27.1248 65.7626 34.6203" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M75.2626 37.3346C75.2626 36.6148 74.929 35.9244 74.3351 35.4154C73.7413 34.9063 72.9358 34.6204 72.096 34.6204H24.596C23.7561 34.6204 22.9507 34.9063 22.3568 35.4154C21.7629 35.9244 21.4293 36.6148 21.4293 37.3346V53.6204C21.4293 54.3402 21.7629 55.0306 22.3568 55.5396C22.9507 56.0487 23.7561 56.3346 24.596 56.3346H38.846C39.6858 56.3346 40.4913 56.0487 41.0851 55.5396C41.679 55.0306 42.0126 54.3402 42.0126 53.6204C42.0126 52.9005 42.3463 52.2101 42.9401 51.7011C43.534 51.192 44.3395 50.9061 45.1793 50.9061H51.5126C52.3525 50.9061 53.1579 51.192 53.7518 51.7011C54.3457 52.2101 54.6793 52.9005 54.6793 53.6204C54.6793 54.3402 55.0129 55.0306 55.6068 55.5396C56.2007 56.0487 57.0061 56.3346 57.846 56.3346H72.096C72.9358 56.3346 73.7413 56.0487 74.3351 55.5396C74.929 55.0306 75.2626 54.3402 75.2626 53.6204V37.3346Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M70.5126 56.3345V75.3345H26.1793V56.3345" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M54.6788 50.906H42.0122V59.0489H54.6788V50.906Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>

        <h1>
            Bags
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