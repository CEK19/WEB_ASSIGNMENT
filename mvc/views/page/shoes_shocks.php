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
                    <a 
                        <?php
                            $HREF_LINK = './?url=Home/productDetail/'.$data['folder-img'].'/'.$item['id'];
                            echo 'href="'.$HREF_LINK.'"';
                        ?>
                    >
                        <?php
                            $PATH_IMAGE = './mvc/database/'.$data['folder-img'].'/'.$item['id'].'.jpeg';                        
                            echo '<img src="'.$PATH_IMAGE.'"'.'style="width:100%;">';
                        ?>  
                    </a>                          
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