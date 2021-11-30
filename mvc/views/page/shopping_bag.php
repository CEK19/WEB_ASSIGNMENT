<div id="Sb-page-background" class="Sb-page-background pb-5">
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

    <!-- -----------------SAVE ITEMS-------------------- -->

    <!-- Sb: Shopping_bag -->
    <div class="Sb-container mt-3 d-flex flex-row justify-content-between">
        <div class="Sb-left mb-3">
            <div class="ps-4 pe-5 pt-4 pb-4">
                <h4 class="mb-0">
                    <?php 
                    if (empty($data["img_info"])) {
                        echo $data["info_login"];
                    } else {
                        echo "MY BAG";
                    }
                    ?>
                </h4>
            </div>
            <form action="checkOut/update_shoppingbag" method="post">
                <div class="Sb-list mt-3 ps-4 pe-5 pt-4 pb-4">
                    <?php
                    if(!empty($data["img_info"])){
                    foreach ($data["img_info"] as $item) {
                    ?>
                        <!-- MỘT SẢN PHẨM -->
                        <input name="ids[]" style="display:none;" type="text" value="<?php echo $item['id'] ?>">
                        <div class="Sb-frame d-flex flex-row">
                            <div class="border Sb-img">
                                <!-- IMG HERE -->
                                <?php
                                $IMG_PATH = "./mvc/database/{$item['category']}/{$item['clothID']}" . ".jpeg";
                                echo '<img src=' . $IMG_PATH . ' style="width:100%;">';
                                ?>
                            </div>
                            <div class="Sb-detail ms-3 pt-2">
                                <h4 class="price_sp"><?php echo $item['cost'] ?> $</h4>
                                <p><?php echo $item['name'] ?></p>

                                <div class="d-flex row ms-0 me-0">
                                    <select name="colors[]" class="form-select me-2 mb-1 Sb-detail-color" style="width:21%">
                                        <option value="<?php echo $item['color'] ?>" selected><?php echo $item['color'] ?></option>
                                        <option value="black">Black</option>
                                        <option value="white">White</option>
                                    </select>

                                    <select name="sizes[]" class="form-select me-2 mb-1 Sb-detail-size" style="width:15%">
                                        <option value="<?php echo $item['size'] ?>" selected><?php echo $item['size'] ?></option>
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                    </select>

                                    <select name="quantities[]" class="form-select mb-1 Sb-detail-quantity quantity_sp" onchange="fixtotal()" style="width:22%">
                                        <option value="<?php echo $item['quantity'] ?>" selected><?php echo $item['quantity'] ?></option>
                                        <option value="1">Qty 1</option>
                                        <option value="2">Qty 2</option>
                                        <option value="3">Qty 3</option>
                                        <option value="4">Qty 4</option>
                                        <option value="5">Qty 5</option>
                                        <option value="6">Qty 6</option>
                                        <option value="7">Qty 7</option>
                                        <option value="8">Qty 8</option>
                                        <option value="9">Qty 9</option>
                                        <option value="10">Qty 10</option>
                                        <option value="11">Qty 11</option>
                                        <option value="12">Qty 12</option>
                                        <option value="13">Qty 13</option>
                                        <option value="14">Qty 14</option>
                                        <option value="15">Qty 15</option>
                                    </select>
                                </div>
                            </div>
                            <a class="del-shopping-bag-but-page" role="button" style="height: fit-content;">
                                <!-- <i class="bi bi-x-lg"></i> -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z" />
                                    <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z" />
                                </svg>
                            </a>
                        </div>
                        <hr>
                    <?php
                    }
                }
                    ?>
                </div>

                <div class="ps-4 pe-5 pt-4 pb-4 mt-3 d-flex flex-row justify-content-end del-mobile del-mobile-sm Sb-subTotal">
                    <h5 class="mb-0">SUB-TOTAL &nbsp;&nbsp;</h5>
                    <h5 class="mb-0 fst-italic totalsub"></h5>
                </div>
        </div>


        <div class="Sb-right ps-4 pe-5 pt-4 pb-4">
            <h4>TOTAL</h4>

            <hr>

            <div class="d-flex flex-row justify-content-between">
                <p class="fw-bold">Sub-total</p>
                <p class="fst-italic" id="subtotal"></p>

            </div>

            <div class="d-flex flex-row justify-content-between">
                <p class="fw-bold">Delivery</p>

                <div class="dropdown">
                    <svg width="26" height="26" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.143 22.8571V13.7142H12.5716V15.9999H14.8573V22.8571H11.4287V25.1428H20.5716V22.8571H17.143Z" fill="black" />
                        <path d="M15.9999 6.85718C15.6609 6.85718 15.3294 6.95772 15.0475 7.14609C14.7656 7.33445 14.5459 7.60219 14.4161 7.91543C14.2864 8.22868 14.2524 8.57337 14.3186 8.9059C14.3847 9.23844 14.548 9.5439 14.7877 9.78365C15.0275 10.0234 15.333 10.1867 15.6655 10.2528C15.998 10.319 16.3427 10.285 16.656 10.1553C16.9692 10.0255 17.2369 9.80578 17.4253 9.52387C17.6137 9.24196 17.7142 8.91052 17.7142 8.57146C17.7142 8.11681 17.5336 7.68077 17.2121 7.35928C16.8906 7.03779 16.4546 6.85718 15.9999 6.85718V6.85718Z" fill="black" />
                        <path d="M16 32C12.8355 32 9.74207 31.0616 7.11088 29.3035C4.4797 27.5454 2.42894 25.0466 1.21793 22.1229C0.00693253 19.1993 -0.309921 15.9823 0.307443 12.8786C0.924806 9.77487 2.44866 6.92394 4.6863 4.6863C6.92394 2.44866 9.77487 0.924806 12.8786 0.307443C15.9823 -0.309921 19.1993 0.00693253 22.1229 1.21793C25.0466 2.42894 27.5454 4.4797 29.3035 7.11088C31.0616 9.74207 32 12.8355 32 16C32 20.2435 30.3143 24.3131 27.3137 27.3137C24.3131 30.3143 20.2435 32 16 32ZM16 2.28572C13.2876 2.28572 10.6361 3.09005 8.38076 4.59699C6.12545 6.10394 4.36766 8.24582 3.32966 10.7518C2.29166 13.2577 2.02007 16.0152 2.54924 18.6755C3.07841 21.3358 4.38456 23.7795 6.30254 25.6975C8.22052 27.6154 10.6642 28.9216 13.3245 29.4508C15.9848 29.9799 18.7423 29.7084 21.2482 28.6703C23.7542 27.6323 25.8961 25.8746 27.403 23.6193C28.91 21.3639 29.7143 18.7124 29.7143 16C29.7143 12.3628 28.2694 8.87447 25.6975 6.30254C23.1255 3.73061 19.6373 2.28572 16 2.28572V2.28572Z" fill="black" />
                    </svg>
                    <div class="dropdown-content">
                        <p class="mb-0">Click <span class="bg-success text-white rounded ps-2 pe-2 pt-2 pb-2">CHECK OUT</span> and enter your address and delivery company to calculate delivery cost.</p>
                    </div>
                </div>
            </div>

            <hr>

            <div class="d-grid gap-2">
                <button class="btn btn-success border-0" name="submit" type="submit">CHECK OUT</button>
            </div>
            </form>
            <p class="fw-bold mt-3">We also accept:</p>

            <div class="d-flex flex-row">
                <img src="./assets/img/payment.png" width="100%">
            </div>

        </div>
    </div>

</div>
<script>
    function fixtotal() {
        var price = document.getElementsByClassName('price_sp');
        var quanti = document.getElementsByClassName('quantity_sp');
        var sum = 0;

        for (var i = 0; i < price.length; i++) {
            sum += price[i].innerHTML.slice(0, -1) * quanti[i].value;
        }

        var add = document.querySelector(".totalsub");
        var add2 = document.querySelector("#subtotal");
        console.log(add);
        add.innerHTML = String(sum) + " $";
        add2.innerText = String(sum) + " $";
    }
    fixtotal();
</script>