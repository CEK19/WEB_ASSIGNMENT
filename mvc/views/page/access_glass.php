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
        <path d="M42.9435 56.212H54.9155" stroke="black" stroke-linecap="round"/>
        <path d="M19 46.591L29.4143 22.4682L36.2043 19M78.1824 46.9198L67.6321 22.4668L60.8434 19" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M20.9049 45.7926H41.7429C41.9858 45.7926 42.226 45.8426 42.4485 45.9394C42.6711 46.0362 42.871 46.1778 43.0359 46.3552C43.2007 46.5327 43.3268 46.7421 43.4063 46.9704C43.4859 47.1986 43.517 47.4408 43.4979 47.6816L42.2367 63.5299C42.2018 63.969 42.0018 64.3789 41.6765 64.6779C41.3512 64.9768 40.9246 65.1428 40.4818 65.1428H22.1674C21.7245 65.1428 21.2979 64.9768 20.9726 64.6779C20.6473 64.3789 20.4473 63.969 20.4124 63.5299L19.1512 47.6816C19.1321 47.4409 19.1632 47.1989 19.2426 46.9707C19.3221 46.7425 19.4481 46.5331 19.6128 46.3557C19.7775 46.1783 19.9773 46.0367 20.1996 45.9398C20.422 45.8429 20.6621 45.7928 20.9049 45.7926V45.7926ZM56.1174 45.7926H76.9541C77.197 45.7926 77.4372 45.8426 77.6598 45.9394C77.8823 46.0362 78.0822 46.1778 78.2471 46.3552C78.4119 46.5327 78.538 46.7421 78.6176 46.9704C78.6971 47.1986 78.7282 47.4408 78.7091 47.6816L77.448 63.5299C77.413 63.969 77.213 64.3789 76.8877 64.6779C76.5625 64.9768 76.1358 65.1428 75.693 65.1428H57.3786C56.9357 65.1428 56.5091 64.9768 56.1838 64.6779C55.8585 64.3789 55.6585 63.969 55.6236 63.5299L54.3624 47.6816C54.3433 47.4408 54.3745 47.1986 54.454 46.9704C54.5335 46.7421 54.6596 46.5327 54.8245 46.3552C54.9893 46.1778 55.1893 46.0362 55.4118 45.9394C55.6343 45.8426 55.8745 45.7926 56.1174 45.7926V45.7926Z" fill="black" stroke="black"/>
        </svg>

        <h1>
            Sunglasses
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