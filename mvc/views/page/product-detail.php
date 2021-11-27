<div id="sale-page-background">
    <!-- -----------------INFORMATION--------------------- -->
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

    <!-- ----------------INTRODUCE PRODUCT---------------- -->
    <div class="product-detail-container">
        <!-- 1 sản phẩm -->
        <div class="product-detail-frame mb-3">
            <div class="product-detail-img-here">
                <?php
                $PATH_IMAGE = './mvc/database/' . $data['category'] . '/' . $data['id_product'] . '.jpeg';
                echo '<img src="' . $PATH_IMAGE . '"' . 'style="width:100%;height:100%">';
                ?>
            </div>
            <div style="width:50%; padding: 0 25px 0 75px;">
                <h4>
                    <?php
                    $item_name = $data['img_info'][0]['name'];
                    echo $item_name;
                    ?>
                </h4>
                <div class="d-flex flex-row mt-2">
                    <p class="text-decoration-line-through fst-italic fs-5 mb-0 me-5 align-middle">
                        <?php
                        $item_org_cost = $data['img_info'][0]['cost_origin'];
                        echo $item_org_cost . "$";
                        ?>
                    </p>
                    <p class="fw-bolder fs-4 mb-0 align-middle">
                        <?php
                        $item_cost = $data['img_info'][0]['cost'];
                        echo $item_cost . "$";
                        ?>
                    </p>
                </div>
                <hr class="mt-2 mb-2">
                <div class="block-product-fix">
                    <h3>Brand</h3>            
                    <div class="equal-start"><?php echo $data['img_info'][0]['brand'] ?></div>
                </div>
                <hr class="mt-2 mb-2">                
                <h3>Rating</h3>
                <i class="fas fa-star">&nbsp;</i><span class="equal-start"> <?php echo $data['img_info'][0]['avg_star'];?></span>
                <br>
                <button id="move-to-bag-but" type="button" class="btn-sm btn-light btn-outline-dark border-4 mt-2" style="width: 100%; border-radius: 15px;">
                    <div class="mb-0" style="font-size: 25px; font-weight:bold;">
                    MOVE TO BAG
                    </div>
                </button>
                <br><br>
                <button id="move-to-wish-list-but" type="button" class="btn-sm btn-light btn-outline-dark border-4 mt-2" style="width: 100%; border-radius: 15px; ">
                    <div class="mb-0" style="font-size: 25px; font-weight:bold;">
                        FAVORITE <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="35" height="35" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512">
                            <g transform="translate(512 0) scale(-1 1)">
                                <path fill="currentColor" d="M453.122 79.012a128 128 0 0 0-181.087.068l-15.511 15.7l-15.382-15.666l-.1-.1a128 128 0 0 0-181.02 0l-6.91 6.91a128 128 0 0 0 0 181.019l182.373 182.371l20.595 21.578l.491-.492l.533.533l19.296-20.359L460.032 266.94a128.147 128.147 0 0 0 0-181.019zM437.4 244.313L256.571 425.146L75.738 244.313a96 96 0 0 1 0-135.764l6.911-6.91a96 96 0 0 1 135.713-.051l38.093 38.787l38.274-38.736a96 96 0 0 1 135.765 0l6.91 6.909a96.11 96.11 0 0 1-.004 135.765z" />
                            </g>
                        </svg>
                    </div>
                </button>
            </div>
        </div>
        <hr class="mt-2 mb-2">
        <div class="product-detail-more-info mb-4">
            <div class="row">
                <div class="col">
                    <p style=" color: #999999; font-weight: bold;">PRODUCT DETAILS </p>
                    <div id="justify-text-content">
                        <?php echo $data['img_info'][0]['detail']?>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <p style="color: #999999; font-weight: bold;">BRAND </p>
                        <span><?php echo $data['img_info'][0]['brand'] ?></span>
                    </div>
                </div>
                <div class="col">
                    <p style="color: #999999; font-weight: bold;">RATING </p>
                    <i class="fas fa-star">&nbsp;</i><span><?php echo $data['img_info'][0]['avg_star'];?></span>
                </div>
            </div>
        </div>

        <hr class="mt-2 mb-2">

        <!-- ========= COMMENT HERE ========= -->
        <div class="product-detail-comments">
            <p style="color: #999999; font-weight: bold; ">REVIEWS </p>

            <!-- ---- write own commnet ---- -->
            <div class="product-detail-comments-frame">
                <div class="product-detail-comments-account">
                    <div class="product-detail-comments-avatar">
                        <img src="./assets/img/av0.png" style="height: 100%; width: 100%;">
                    </div>

                    <div style="display: flex; flex-direction: column;">
                        <div class="product-detail-comments-name">
                            Trong Ho
                        </div>
                        <div class="product-detail-date-cmt" style="color: #929090; padding-left: 10px">
                            20/11/2021
                        </div>
                    </div>

                    <div class="ms-2" style="margin-top: 20px;">
                        <input type="hidden" value="0" id="user-rating">
                        <a role="button"><i class="far fa-star" id="star-1"></i></a>
                        <a role="button"><i class="far fa-star" id="star-2"></i></a>
                        <a role="button"><i class="far fa-star" id="star-3"></i></a>
                        <a role="button"><i class="far fa-star" id="star-4"></i></a>
                        <a role="button"><i class="far fa-star" id="star-5"></i></a>
                    </div>
                </div>
                <div class="product-detail-comment" style="padding: 20px 20px 20px 20px;">
                    <form style="position: relative;">
                        <textarea class="form-control" placeholder="Write your own comment here" spellcheck="false" style="height: 70px; min-height:70px;"></textarea>
                        <a role="button">
                            <svg class="pd-send-icon" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.392127 7.04697C-0.129873 6.87297 -0.134873 6.59197 0.402127 6.41297L19.4891 0.0509739C20.0181 -0.125026 20.3211 0.170974 20.1731 0.688974L14.7191 19.775C14.5691 20.304 14.2641 20.322 14.0401 19.82L10.4461 11.732L16.4461 3.73197L8.44613 9.73197L0.392127 7.04697V7.04697Z" fill="black" />
                            </svg>
                        </a>
                    </form>
                </div>
            </div>

            <!-- ---- other comment ---- -->
            <div class="product-detail-comments-frame">
                <div class="product-detail-comments-account">
                    <div class="product-detail-comments-avatar">
                        <img src="./assets/img/av5.jpg" style="height: 100%; width: 100%;">
                    </div>

                    <div style="display: flex; flex-direction: column;">
                        <div class="product-detail-comments-name">
                            Trong Ho
                        </div>
                        <div class="product-detail-date-cmt" style="color: #929090; padding-left: 10px">
                            20/11/2021
                        </div>
                    </div>

                    <div class="ms-2" style="margin-top: 20px;">
                        <i class="fas fa-star">&nbsp; 4 </i>
                    </div>
                </div>
                <div class="product-detail-comment" style="padding: 20px 20px 20px 20px;">
                    Comment gì đó không biết nữa <br>
                    Comment gì đó không biết nữa <br>
                    Comment gì đó không biết nữa<br>
                    Comment gì đó không biết nữa<br>
                    Comment gì đó không biết nữa<br>
                    Comment gì đó không biết nữa<br>
                    Comment gì đó không biết nữa Comment gì đó không biết nữa Comment gì đó không biết nữa Comment gì đó không biết nữa Comment gì đó không biết nữa
                </div>
            </div>

            <div class="product-detail-comments-frame">
                <div class="product-detail-comments-account">
                    <div class="product-detail-comments-avatar">
                        <img src="./assets/img/av0.png" style="height: 100%; width: 100%;">
                    </div>

                    <div style="display: flex; flex-direction: column;">
                        <div class="product-detail-comments-name">
                            Trong Ho
                        </div>
                        <div class="product-detail-date-cmt" style="color: #929090; padding-left: 10px">
                            20/11/2021
                        </div>
                    </div>
                    <div class="ms-2" style="margin-top: 20px;">
                        <i class="fas fa-star">&nbsp; 2 </i>
                    </div>
                </div>
                <div class="product-detail-comment" style="padding: 20px 20px 20px 20px;">
                    Comment gì đó không biết nữa <br>
                    Comment gì đó không biết nữa <br>
                    Comment gì đó không biết nữa<br>
                    Comment gì đó không biết nữa<br>
                    Comment gì đó không biết nữa<br>
                    Comment gì đó không biết nữa<br>
                    Comment gì đó không biết nữa Comment gì đó không biết nữa Comment gì đó không biết nữa Comment gì đó không biết nữa Comment gì đó không biết nữa
                </div>
            </div>

            <div class="product-detail-comments-frame">
                <div class="product-detail-comments-account">
                    <div class="product-detail-comments-avatar">
                        <img src="./assets/img/av3.jpg" style="height: 100%; width: 100%;">
                    </div>

                    <div style="display: flex; flex-direction: column;">
                        <div class="product-detail-comments-name">
                            Trong Ho
                        </div>
                        <div class="product-detail-date-cmt" style="color: #929090; padding-left: 10px">
                            20/11/2021
                        </div>
                    </div>
                    <div class="ms-2" style="margin-top: 20px;">
                        <i class="fas fa-star">&nbsp; 5 </i>
                    </div>
                </div>
                <div class="product-detail-comment" style="padding: 20px 20px 20px 20px;">
                    Comment gì đó không biết nữa <br>
                    Comment gì đó không biết nữa <br>
                    Comment gì đó không biết nữa<br>
                    Comment gì đó không biết nữa<br>
                    Comment gì đó không biết nữa<br>
                    Comment gì đó không biết nữa<br>
                    Comment gì đó không biết nữa Comment gì đó không biết nữa Comment gì đó không biết nữa Comment gì đó không biết nữa Comment gì đó không biết nữa
                </div>
            </div>
            <div class="product-detail-comments-frame">
                <div class="product-detail-comments-account">
                    <div class="product-detail-comments-avatar">
                        <img src="./assets/img/av4.jpg" style="height: 100%; width: 100%;">
                    </div>

                    <div style="display: flex; flex-direction: column;">
                        <div class="product-detail-comments-name">
                            Trong Ho
                        </div>
                        <div class="product-detail-date-cmt" style="color: #929090; padding-left: 10px">
                            20/11/2021
                        </div>
                    </div>
                    <div class="ms-2" style="margin-top: 20px;">
                        <i class="fas fa-star">&nbsp; 4 </i>
                    </div>
                </div>
                <div class="product-detail-comment" style="padding: 20px 20px 20px 20px;">
                    Comment gì đó không biết nữa <br>
                    Comment gì đó không biết nữa <br>
                    Comment gì đó không biết nữa<br>
                    Comment gì đó không biết nữa<br>
                    Comment gì đó không biết nữa<br>
                    Comment gì đó không biết nữa<br>
                    Comment gì đó không biết nữa Comment gì đó không biết nữa Comment gì đó không biết nữa Comment gì đó không biết nữa Comment gì đó không biết nữa
                </div>
            </div>
            <div class="product-detail-cmt-count">

            </div>

            <div style="margin: auto; width: 300px; margin-bottom: 50px;">
                <button type="button" class="btn-sm btn-light btn-outline-dark border-4 mt-2" style="width: 300px;">
                    <div class="mb-0" style="font-size: 20px; font-weight:bold;">
                        LOAD MORE
                    </div>
                </button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="./public/js/product-detail.js"></script>