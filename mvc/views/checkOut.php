<?php
require_once "./mvc/core/basehref.php";
$home_url = getUrl() . '/';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    echo "<base href='${home_url}'>";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check out</title>

    <!-- -----------------Favicon--------------------- -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <link rel="mask-icon" href="./favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="./favicon/msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">

    <link type="text/css" rel="stylesheet" href="./public/css/checkOut.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>

<body>
    <div class="my_page">
        <!-- ---------- TOP ---------- -->
        <!-- ========================= -->
        <div class="CO_header d-flex flex-row justify-content-between CO-del">
            <div class="CO-left">
                <div class="CO-logo-group d-flex flex-row justify-content-between align-items-center ps-3 pe-5">
                    <a href="?url=Home" class="CO-VinBK mb-0 text-decoration-none link-dark">VinBK</a>
                    <h2 class="fw-bolder mb-0">Check Out</h2>
                </div>
            </div>
            <div class="CO-right">
                <div class="CO-logo-group"></div>
            </div>
        </div>

        <div class="CO_header flex-row justify-content-between CO-mobile" style="display: none;">
            <div class="CO-left" style="width: 100% !important;">
                <div class="CO-logo-group d-flex flex-row justify-content-between align-items-center ps-3 pe-4">
                    <a href="?url=Home" class="CO-VinBK mb-0 text-decoration-none link-dark">VinBK</a>
                    <h2 class="fw-bolder mb-0">Check Out</h2>
                </div>
            </div>
        </div>


        <!-- ---------- MIDDLE ---------- -->
        <!-- ============================ -->
        <div class="CO_container d-flex flex-row justify-content-between">

            <!-- ---------- LEFT ---------- -->
            <!-- ========================== -->
            <div class="CO-left">
                <div class="ps-4 pe-5 pt-4 pb-4">
                    <form action="checkOut/delete_shoppingbag" method="post">
                        <h4>Delivery Address</h4>
                        <div class="ps-4 pe-4">
                            <label class="form-label">User Name</label>
                            <input type="text" class="form-control" style="width: 60%;" readonly value="<?php echo $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] ?>">

                            <label class="form-label mt-3">Address</label>
                            <input type="text" class="form-control" style="width: 60%;">

                            <label class="form-label mt-3">Phone number</label>
                            <input type="text" class="form-control" style="width: 60%;">
                        </div>
                        <hr class="mt-4 mb-4">
                        <h4>Delivery Option</h4>
                        <div class="ps-4 pe-4 delivery-option">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" checked name="delivery-method" value="40.00" onchange="fixtotal()">
                                <label class="form-check-label" for="delivery-method">Fast Delivery - 40.00 $</label>
                                <blockquote class="blockquote"></blockquote>
                                <p class="blockquote-footer">With fast service, and high reponsibility, Our professional team ensure that your order will arrive between 1 and 2 days.</p>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="delivery-method" value="20.00" onchange="fixtotal()">
                                <label class="form-check-label" for="delivery-method">Normal Delivery - 20.00 $</label>
                                <blockquote class="blockquote"></blockquote>
                                <p class="blockquote-footer">The third party will be reponsible for delivery, so it may take 3 to 7 days to deliver your order</p>
                            </div>
                        </div>

                        <hr class="mt-4 mb-4">

                        <h4>Payment Method</h4>
                        <div class="ps-4 pe-4 mt-3">
                            <div class="d-grid payment-method" style="width: 60%;">
                                <button type="button" class="btn border border-secondary d-flex flex-row align-items-center justify-content-evenly pt-2 pb-2">
                                    <svg width="38" height="30" viewBox="0 0 38 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M26.1245 20.3571C25.7465 20.3571 25.3841 20.5264 25.1168 20.8278C24.8496 21.1292 24.6995 21.538 24.6995 21.9642C24.6995 22.3904 24.8496 22.7992 25.1168 23.1006C25.3841 23.402 25.7465 23.5713 26.1245 23.5713H30.8745C31.2524 23.5713 31.6149 23.402 31.8821 23.1006C32.1493 22.7992 32.2995 22.3904 32.2995 21.9642C32.2995 21.538 32.1493 21.1292 31.8821 20.8278C31.6149 20.5264 31.2524 20.3571 30.8745 20.3571H26.1245Z" fill="black" />
                                        <path d="M5.225 0C3.83924 0 2.51024 0.620852 1.53037 1.72598C0.55049 2.8311 0 4.32997 0 5.89286V24.1071C0 25.67 0.55049 27.1689 1.53037 28.274C2.51024 29.3791 3.83924 30 5.225 30H32.775C34.1608 30 35.4898 29.3791 36.4696 28.274C37.4495 27.1689 38 25.67 38 24.1071V5.89286C38 4.32997 37.4495 2.8311 36.4696 1.72598C35.4898 0.620852 34.1608 0 32.775 0H5.225ZM2.85 24.1071V12.8571H35.15V24.1071C35.15 25.5857 34.086 26.7857 32.775 26.7857H5.225C3.914 26.7857 2.85 25.5857 2.85 24.1071ZM2.85 9.64286V5.89286C2.85 4.41429 3.914 3.21429 5.225 3.21429H32.775C34.086 3.21429 35.15 4.41429 35.15 5.89286V9.64286H2.85Z" fill="black" />
                                    </svg>

                                    <p class="mb-0">Add your credit or debit card</p>
                                </button>

                                <p class="mt-2 mb-2 text-center fw-bold" style="color: grey;">OR</p>

                                <button type="button" class="btn border border-secondary  pt-2 pb-2">
                                    <img src="./assets/img/payment.png" title="E-Wallet" width="100%">
                                </button>
                            </div>


                            <!-- Credit or Debit card -->
                            <div class="">
                                <hr class="CO-style mt-5 mb-3 ">

                                <h5>Add credit/debit card</h5>


                                <label class="form-label">Card Number</label>
                                <input type="text" class="form-control" style="width: 60%;">

                                <label class="form-label mt-3">Expired Day</label>
                                <div class="d-flex flex-row">
                                    <select class="form-select me-2" style="width: 20%;">
                                        <option selected>Month</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>

                                    <select class="form-select" style="width: 20%;">
                                        <option selected>Year</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                        <option value="2028">2028</option>
                                        <option value="2029">2029</option>
                                        <option value="2030">2030</option>
                                        <option value="2031">2031</option>
                                        <option value="2032">2032</option>
                                    </select>
                                </div>

                                <label class="form-label mt-3">Name of card</label>
                                <input type="text" class="form-control" style="width: 60%;">


                            </div>


                            <!-- Ví điện tử -->
                            <div class="">
                                <hr class="CO-style mt-5 mb-3 ">

                                <h5>E-Wallet</h5>

                                <label class="form-label">Your phone number for this payment</label>
                                <input type="text" class="form-control" style="width: 60%;">

                                <p class="mt-3">Choose one electronic wallet to pay the bill</p>
                                <div class="ps-4 pe-4">

                                    <div class="form-check mt-2">
                                        <input type="radio" class="form-check-input" name="e-wallet-company">
                                        <label class="form-check-label" for="delivery-method">
                                            <img src="./assets/img/paypal.png" style="width: 56px;" title="PayPal">
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input type="radio" class="form-check-input" name="e-wallet-company">
                                        <label class="form-check-label" for="delivery-method">
                                            <img src="./assets/img/momo.png" style="width: 56px;" title="MoMo">
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input type="radio" class="form-check-input" name="e-wallet-company">
                                        <label class="form-check-label" for="delivery-method">
                                            <img class="border border-secondary rounded" src="./assets/img/zaloPay.png" style="width: 56px;" title="ZaloPay">
                                        </label>
                                    </div>

                                </div>

                            </div>

                            <hr class="mt-4 mb-4">

                            <div class="d-grid">
                                <button type="submit" class="btn btn-success" onsubmit="success_order()">
                                    <h5 class="mb-1 mt-1">ORDER</h5>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <!-- ---------- RIGHT ---------- -->
            <!-- =========================== -->
            <div class="CO-right sticky-top">
                <div class="ps-3 pe-4 pt-3 pb-3">
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <div class="d-flex flex-row ps-1">
                            <h4 class="mb-0"><?php echo $data['countdata']; ?>  &nbsp;</h4>
                            <h4 class="mb-0">Items</h4>
                        </div>
                        <a class="mb-0 CO-edit pe-2" href="?url=Home/shopping_bag">Edit</a>
                    </div>

                    <hr class="ms-1 me-1">

                    <!-- FRAME ARRAY HERE -->
                    <div class="ps-2">
                        <?php
                        if(!empty($data["img_info"])){
                        foreach ($data["img_info"] as $item) {
                        ?>
                            <!-- Một sản phẩm -->
                            <div class="CO-frame d-flex flex-row mb-3">
                                <div class="border CO-img">
                                    <!-- img -->
                                    <?php
                                    $IMG_PATH = "./mvc/database/{$item['category']}/{$item['clothID']}" . ".jpeg";
                                    echo '<img src=' . $IMG_PATH . ' style="width:100%;">';
                                    ?>
                                </div>
                                <div class="CO-detail ms-3 pt-2">
                                    <h5 class="mb-1 price_sp" name="price_sp"><?php echo $item['cost'] ?> $</h5>
                                    <p class="mb-1"><?php echo $item['name'] ?></p>
                                    <div class="CO-detail-ls d-flex flex-row">
                                        <p class="mb-0"><?php echo $item['color'] ?></p>
                                        &nbsp; &ensp;
                                        <p class="mb-0"><?php echo $item['size'] ?></p>
                                        &nbsp; &ensp;
                                        <p class="mb-0">Qty: <span class="quantity_sp"><?php echo $item['quantity'] ?></span></p>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                    }
                        ?>
                    </div>

                    <hr class="ms-1 me-1">

                    <div class="ps-2">
                        <div class="d-flex flex-row justify-content-between align-items-center ms-1 me-1">
                            <p class="mb-0">Sub-Total</p>
                            <p class="mb-0" id="totalsub"></p>
                        </div>

                        <div class="d-flex flex-row justify-content-between align-items-center ms-1 me-1">
                            <p class="mb-0">Delivery</p>
                            <p id="fast-deli" class="mb-0">40.00 $</p>
                        </div>
                    </div>

                    <hr class="ms-1 me-1">

                    <div class="d-flex flex-row justify-content-between align-items-center ms-1 me-1">
                        <h4 class="mb-0">TOTAL TO PAY</h4>
                        <p class="mb-0" id="totalpay"></p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--  JavaScript  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/js/signUp.js"></script>
    <script>
        function fixtotal() {
            var ship = document.querySelector('input[name="delivery-method"]:checked').value;
            if(ship == 40){
                document.getElementById("fast-deli").innerHTML = '40.00 $';
            }
            else{
                document.getElementById("fast-deli").innerHTML = '20.00 $';
            }
            var price = document.getElementsByClassName('price_sp');
            var quanti = document.getElementsByClassName('quantity_sp');
            var sum = 0;
            for (var i = 0; i < price.length; i++) {
                sum += price[i].innerHTML.slice(0, -1) * quanti[i].innerHTML * 1.0;
            }

            var add = document.querySelector("#totalpay");
            var add2 = document.querySelector("#totalsub");
            // console.log(add);
            // add.innerHTML = String(sum) + " $";
            total = sum * 1.0 + ship * 1.0;
            add2.innerText = String(sum) + " $";
            add.innerText = String(total) + " $";

        }
        function success_order(){
            alert("Success order");
        }
        fixtotal();
    </script>
</body>

</html>