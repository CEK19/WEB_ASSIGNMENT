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