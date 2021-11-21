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

            <div class="CO-left">
                <div class="CO-logo-group d-flex flex-row justify-content-between ps-3 pe-5 pt-2">
                    <span class="VinBK mb-0">VinBK</span>
                    <h2 class="fw-bolder mb-0 pt-1">Check Out</h2>
                </div>
                <div class="ps-3 pe-5 pt-3 pb-3">
                    <form>
                        <h4>Delivery Address</h4>
                        <hr>
                        <h4>Delivery Option</h4>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" checked>
                            <label class="form-check-label">Fast Delivery</label>
                        </div>

                        <div class="form-check">
                            <input type="radio" class="form-check-input">
                            <label class="form-check-label">Normal Delivery</label>
                        </div>
                        <hr>
                        <h4>Payment Method</h4>
                        <hr>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">
                                <h5 class="mb-1 mt-1">ORDER</h5>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="CO-right">
                <div class="CO-logo-group"></div>
                <div class="ps-3 pe-5 pt-3 pb-3">
                    hi
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