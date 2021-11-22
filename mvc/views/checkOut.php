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
    <link type="text/css" rel="stylesheet" href="./public/css/checkOut.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>

<body>
    <div class="my_page">
        <div class="CO_container d-flex flex-row justify-content-between">
            <!-- <div id="logo_group">
                <span class="VinBK">VinBK</span>
            </div> -->

            <!-- ---------- LEFT ---------- -->
            <!-- ========================== -->
            <div class="CO-left">
                <div class="CO-logo-group d-flex flex-row justify-content-between align-items-center ps-3 pe-5">
                    <span class="CO-VinBK mb-0">VinBK</span>
                    <h2 class="fw-bolder mb-0">Check Out</h2>
                </div>
                <div class="ps-4 pe-5 pt-4 pb-4">
                    <form>
                        <h4>Delivery Address</h4>
                        <div class="ps-4 pe-4">
                            <label class="form-label">User Name</label>
                            <input type="text" class="form-control" style="width: 60%;" readonly value="Lê Hoàng Minh Tú">

                            <label class="form-label mt-3">Address</label>
                            <input type="text" class="form-control" style="width: 60%;">

                            <label class="form-label mt-3">Phone number</label>
                            <input type="text" class="form-control" style="width: 60%;">
                        </div>
                        <hr class="mt-4 mb-4">
                        <h4>Delivery Option</h4>
                        <div class="ps-4 pe-4">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" checked name="delivery-method">
                                <label class="form-check-label" for="delivery-method">Fast Delivery - 40.00 $</label>
                                <blockquote class="blockquote"></blockquote>
                                <p class="blockquote-footer">With fast service, and high reponsibility, Our professional team ensure that your order will arrive between 1 and 2 days.</p>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="delivery-method">
                                <label class="form-check-label" for="delivery-method">Normal Delivery - 20.00 $</label>
                                <blockquote class="blockquote"></blockquote>
                                <p class="blockquote-footer">The third party will be reponsible for delivery, so it may take 3 to 7 days to deliver your order</p>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                        <h4>Payment Method</h4>
                        <hr class="mt-4 mb-4">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">
                                <h5 class="mb-1 mt-1">ORDER</h5>
                            </button>
                        </div>
                    </form>
                </div>
            </div>


            <!-- ---------- RIGHT ---------- -->
            <!-- =========================== -->
            <div class="CO-right">
                <div class="CO-logo-group"></div>
                <div class="ps-3 pe-4 pt-3 pb-3">
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <div class="d-flex flex-row ps-1">
                            <h4 class="mb-0">2 &nbsp;</h4>
                            <h4 class="mb-0">Items</h4>
                        </div>
                        <a class="mb-0 CO-edit pe-2">Edit</a>
                    </div>

                    <hr class="ms-1 me-1">

                    <!-- FRAME ARRAY HERE -->
                    <div class="CO-frame d-flex flex-row mb-3">
                        <div class="border CO-img">
                            <!-- img -->
                            <img src="./mvc/database/access_bags/5.jpeg" style="width:100%;">
                        </div>
                        <div class="CO-detail ms-3 pt-2">
                            <h5 class="mb-1">45.00 $</h5>
                            <p class="mb-1">Đây là tên của sản phẩm người ta</p>
                            <div class="CO-detail-ls d-flex flex-row">
                                <p class="mb-0">White</p>
                                &nbsp; &ensp;
                                <p class="mb-0">XL</p>
                                &nbsp; &ensp;
                                Qty: <p class="mb-0">1</p>
                            </div>
                        </div>
                    </div>

                    <div class="CO-frame d-flex flex-row mb-3">
                        <div class="border CO-img">
                            <!-- img -->
                            <img src="./mvc/database/access_bags/14.jpeg" style="width:100%;">
                        </div>
                        <div class="CO-detail ms-3 pt-2">
                            <h5 class="mb-1">45.00 $</h5>
                            <p class="mb-1">Đây là tên của sản phẩm người ta</p>
                            <div class="CO-detail-ls d-flex flex-row">
                                <p class="mb-0">White</p>
                                &nbsp; &ensp;
                                <p class="mb-0">XL</p>
                                &nbsp; &ensp;
                                Qty: <p class="mb-0">1</p>
                            </div>
                        </div>
                    </div>

                    <div class="CO-frame d-flex flex-row mb-3">
                        <div class="border CO-img">
                            <!-- img -->
                            <img src="./mvc/database/access_bags/9.jpeg" style="width:100%;">
                        </div>
                        <div class="CO-detail ms-3 pt-2">
                            <h5 class="mb-1">45.00 $</h5>
                            <p class="mb-1">Đây là tên của sản phẩm người ta</p>
                            <div class="CO-detail-ls d-flex flex-row">
                                <p class="mb-0">White</p>
                                &nbsp; &ensp;
                                <p class="mb-0">XL</p>
                                &nbsp; &ensp;
                                Qty: <p class="mb-0">1</p>
                            </div>
                        </div>
                    </div>

                    <hr class="ms-1 me-1">

                    <div class="d-flex flex-row justify-content-between align-items-center ms-1 me-1">
                        <p class="mb-0">Sub-Total</p>
                        <p class="mb-0">100.00 $</p>
                    </div>

                    <div class="d-flex flex-row justify-content-between align-items-center ms-1 me-1">
                        <p class="mb-0">Delivery</p>
                        <p class="mb-0">40.00 $</p>
                    </div>

                    <hr class="ms-1 me-1">

                    <div class="d-flex flex-row justify-content-between align-items-center ms-1 me-1">
                        <h4 class="mb-0">TOTAL TO PAY</h4>
                        <p class="mb-0">140.00 $</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--  JavaScript  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/js/signUp.js"></script>

</body>

</html>