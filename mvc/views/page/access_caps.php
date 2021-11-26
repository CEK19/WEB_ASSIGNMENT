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
                    <a class="selling-heart-btn" role="button">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="24" cy="24" r="24" fill="white"/>
                        <path d="M41.1176 13.9865C40.5783 12.6584 39.8007 11.455 38.8283 10.4435C37.8551 9.42894 36.7078 8.62271 35.4486 8.06862C34.1429 7.49178 32.7424 7.19652 31.3286 7.19998C29.345 7.19998 27.4097 7.77765 25.7279 8.8688C25.3256 9.12982 24.9434 9.41651 24.5812 9.72888C24.2191 9.41651 23.8369 9.12982 23.4346 8.8688C21.7528 7.77765 19.8175 7.19998 17.8339 7.19998C16.4056 7.19998 15.0215 7.49095 13.7139 8.06862C12.4506 8.62489 11.3119 9.42507 10.3342 10.4435C9.36053 11.4538 8.58272 12.6576 8.04488 13.9865C7.48562 15.3686 7.19995 16.8363 7.19995 18.3468C7.19995 19.7717 7.47355 21.2565 8.01671 22.767C8.47136 24.0293 9.12316 25.3387 9.95601 26.6609C11.2757 28.7534 13.0903 30.9357 15.3434 33.1479C19.0772 36.815 22.7747 39.3482 22.9316 39.4509L23.8852 40.1013C24.3077 40.388 24.8508 40.388 25.2733 40.1013L26.2268 39.4509C26.3838 39.3439 30.0773 36.815 33.8151 33.1479C36.0682 30.9357 37.8828 28.7534 39.2025 26.6609C40.0353 25.3387 40.6911 24.0293 41.1418 22.767C41.6849 21.2565 41.9585 19.7717 41.9585 18.3468C41.9625 16.8363 41.6769 15.3686 41.1176 13.9865V13.9865ZM24.5812 36.7166C24.5812 36.7166 10.2578 26.9562 10.2578 18.3468C10.2578 13.9865 13.6495 10.452 17.8339 10.452C20.7751 10.452 23.3259 12.1979 24.5812 14.7482C25.8366 12.1979 28.3874 10.452 31.3286 10.452C35.513 10.452 38.9047 13.9865 38.9047 18.3468C38.9047 26.9562 24.5812 36.7166 24.5812 36.7166Z" fill="gray"/>
                        </svg>
                    </a>
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