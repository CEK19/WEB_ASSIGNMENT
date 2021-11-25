<?php
require_once "./mvc/core/basehref.php";
$home_url = getUrl().'/';
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
    <title>vinBK Account</title>
    <!-- CSS -->
    <link type="text/css" rel="stylesheet" href="./public/css/myAccount.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>

<body>
    <div class="my_container">
        <div class="mA-mobile" style="display:none;">
            <div class="logo_group d-flex align-items-center justify-content-center">
                <a href="?url=Home" class="VinBK align-middle text-center text-decoration-none link-dark">VinBK</a>
            </div>
        </div>

        <div class="my_top d-flex justify-content-between">
            <div class="my_left">
                <div class="logo_group d-flex align-items-center justify-content-center">
                    <a href="?url=Home" class="VinBK align-middle text-center text-decoration-none link-dark">VinBK</a>
                </div>

                <div style="border: 1px solid black;">

                    <div class="bg-white mb-2 ps-2 d-flex align-items-center">

                        <img class="mt-2 mb-2 img-fluid rounded-circle border-2 border-secondary img-thumbnail"
                            src="assets/img/av0.png" alt="" id="avatar">

                        <div class="ms-3 w-100">
                            <p class="mb-0">Hi,</p>
                            <p class="mb-0 fw-bolder"><?php echo $_SESSION['firstname'].' '.$_SESSION['lastname']?></p>
                        </div>
                    </div>

                    <div class="bg-white mb-2 ps-1 pt-0 pb-0">
                        <a class="d-flex align-items-center" href="">
                            <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M41.823 37.4824C41.0705 35.7984 39.9784 34.2687 38.6076 32.9786C37.241 31.6848 35.6221 30.6533 33.8404 29.941C33.8244 29.9334 33.8085 29.9296 33.7925 29.9221C36.2779 28.2261 37.8936 25.4636 37.8936 22.3467C37.8936 17.1834 33.4654 13 28 13C22.5346 13 18.1064 17.1834 18.1064 22.3467C18.1064 25.4636 19.7221 28.2261 22.2075 29.9259C22.1915 29.9334 22.1756 29.9372 22.1596 29.9447C20.3724 30.657 18.7687 31.6784 17.3924 32.9824C16.0229 34.2735 14.931 35.8029 14.177 37.4862C13.4362 39.1341 13.0367 40.9009 13.0001 42.691C12.999 42.7312 13.0065 42.7712 13.0221 42.8087C13.0376 42.8461 13.061 42.8802 13.0907 42.909C13.1204 42.9378 13.156 42.9607 13.1952 42.9764C13.2345 42.992 13.2767 43 13.3192 43H15.7128C15.8884 43 16.028 42.8681 16.032 42.706C16.1118 39.7965 17.3485 37.0716 19.5346 35.0063C21.7966 32.8693 24.8006 31.6935 28 31.6935C31.1994 31.6935 34.2034 32.8693 36.4654 35.0063C38.6515 37.0716 39.8882 39.7965 39.968 42.706C39.972 42.8719 40.1116 43 40.2872 43H42.6808C42.7233 43 42.7655 42.992 42.8048 42.9764C42.844 42.9607 42.8796 42.9378 42.9093 42.909C42.939 42.8802 42.9624 42.8461 42.9779 42.8087C42.9935 42.7712 43.001 42.7312 42.9999 42.691C42.96 40.8894 42.5651 39.1369 41.823 37.4824ZM28 28.8291C26.1689 28.8291 24.4455 28.1545 23.149 26.9296C21.8524 25.7048 21.1383 24.0766 21.1383 22.3467C21.1383 20.6168 21.8524 18.9887 23.149 17.7638C24.4455 16.5389 26.1689 15.8643 28 15.8643C29.8311 15.8643 31.5545 16.5389 32.851 17.7638C34.1476 18.9887 34.8617 20.6168 34.8617 22.3467C34.8617 24.0766 34.1476 25.7048 32.851 26.9296C31.5545 28.1545 29.8311 28.8291 28 28.8291Z" fill="black" />
                            </svg>

                            <h5 class="mb-0 ms-3">Account Overview</h5>
                        </a>
                    </div>

                    <div class="bg-white mb-2 ps-1 pt-0 pb-0">
                        <a class="d-flex align-items-center" href="">
                            <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M26.4896 13.3956C26.9516 13.1361 27.4715 13 28 13C28.5285 13 29.0484 13.1361 29.5104 13.3956L41.2004 19.96C41.4428 20.0962 41.6447 20.2955 41.7853 20.5372C41.9259 20.7789 42 21.0541 42 21.3345V34.2856C41.9999 34.8465 41.8514 35.3971 41.57 35.8805C41.2885 36.3639 40.8843 36.7623 40.3993 37.0347L29.5104 43.1524C29.0484 43.4118 28.5285 43.548 28 43.548C27.4715 43.548 26.9516 43.4118 26.4896 43.1524L15.6007 37.0347C15.1159 36.7625 14.7119 36.3642 14.4304 35.8812C14.149 35.3981 14.0004 34.8478 14 34.2872V21.3345C14 21.0541 14.0741 20.7789 14.2147 20.5372C14.3553 20.2955 14.5572 20.0962 14.7996 19.96L26.4911 13.3956H26.4896Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M28 28.2731V44M14 20.4097L28 28.2731L14 20.4097ZM28 28.2731L42 20.4097L28 28.2731Z" stroke="black" stroke-width="2" stroke-linejoin="round" />
                                <path d="M21 24.3415L35 16.478" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M18.6667 28.7891L23.3334 31.4186" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <h5 class="mb-0 ms-3">My order</h5>
                        </a>

                        <hr class="mt-1 mb-1" width="75%">

                        <a class="d-flex align-items-center" href="">
                            <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M28.0007 12C20.3105 12 14 17.6397 14 24.5182C14 27.1621 14.938 29.6239 16.5193 31.6494L25.5962 43.6086L25.6343 43.6541C25.9921 44.0732 26.3421 44.4032 26.7526 44.6468C27.1628 44.8903 27.6724 45.0368 28.1722 44.992C29.1714 44.9019 29.7843 44.2693 30.365 43.5634L30.3947 43.5264L40.4152 30.3473L40.4215 30.337C40.656 29.9562 40.8285 29.5691 40.9759 29.1919C41.6502 27.7157 41.9986 26.1255 42 24.5182C42 17.6397 35.6912 12 28.0007 12ZM28.0007 13.7556C34.6248 13.7556 40.0421 18.601 40.0421 24.5182C40.0421 25.9428 39.7264 27.3007 39.1562 28.5488L39.1465 28.5706L39.137 28.5927C39.0106 28.919 38.8724 29.2197 38.709 29.4853L38.7072 29.488L28.7742 42.5345C28.314 43.0846 27.9797 43.2453 27.9769 43.2453C27.9758 43.2453 27.9702 43.2644 27.8334 43.1829C27.7007 43.1044 27.475 42.9113 27.2115 42.6077L18.1821 30.7202L18.1562 30.6872C16.7724 28.9339 15.9583 26.8103 15.9583 24.5182C15.9583 18.6013 21.3766 13.7553 28.0007 13.7553V13.7556ZM28.0077 17.7948C27.8667 17.7926 27.7293 17.837 27.6192 17.9202L21.6324 22.493C21.2163 22.8104 21.4669 23.4206 22.0136 23.4203H22.6751V30.4116C22.6751 30.7023 22.938 30.9383 23.2624 30.9383H32.7376C33.062 30.9383 33.3249 30.7023 33.3249 30.4116V23.4206H34.0592C34.6076 23.4209 34.8575 22.8071 34.4379 22.4907L28.3787 17.9182C28.2731 17.8393 28.1425 17.7958 28.0077 17.7948Z" fill="black"/>
                                <path d="M28.2928 17.6951V17.6962C28.2922 17.6962 28.2911 17.6962 28.2905 17.6973L28.2928 17.6951Z" fill="black"/>
                                <path d="M27.708 17.6951L27.7102 17.6973L27.708 17.6962V17.6951Z" fill="black"/>
                            </svg>
                            <h5 class="mb-0 ms-3">Address Book</h5>
                        </a>

                        <hr class="mt-1 mb-1" width="75%">

                        <a class="d-flex align-items-center" href="">
                            <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M35.1245 33.3571C34.7465 33.3571 34.3841 33.5264 34.1168 33.8278C33.8496 34.1292 33.6995 34.538 33.6995 34.9642C33.6995 35.3904 33.8496 35.7992 34.1168 36.1006C34.3841 36.402 34.7465 36.5713 35.1245 36.5713H39.8745C40.2524 36.5713 40.6149 36.402 40.8821 36.1006C41.1493 35.7992 41.2995 35.3904 41.2995 34.9642C41.2995 34.538 41.1493 34.1292 40.8821 33.8278C40.6149 33.5264 40.2524 33.3571 39.8745 33.3571H35.1245Z" fill="black"/>
                                <path d="M14.225 13C12.8392 13 11.5102 13.6209 10.5304 14.726C9.55049 15.8311 9 17.33 9 18.8929V37.1071C9 38.67 9.55049 40.1689 10.5304 41.274C11.5102 42.3791 12.8392 43 14.225 43H41.775C43.1608 43 44.4898 42.3791 45.4696 41.274C46.4495 40.1689 47 38.67 47 37.1071V18.8929C47 17.33 46.4495 15.8311 45.4696 14.726C44.4898 13.6209 43.1608 13 41.775 13H14.225ZM11.85 37.1071V25.8571H44.15V37.1071C44.15 38.5857 43.086 39.7857 41.775 39.7857H14.225C12.914 39.7857 11.85 38.5857 11.85 37.1071ZM11.85 22.6429V18.8929C11.85 17.4143 12.914 16.2143 14.225 16.2143H41.775C43.086 16.2143 44.15 17.4143 44.15 18.8929V22.6429H11.85Z" fill="black"/>
                            </svg>
                            <h5 class="mb-0 ms-3">Payment Method</h5>
                        </a>
                    </div>

                    <div class="bg-white mb-2 ps-1 pt-0 pb-0">

                        <a class="d-flex align-items-center" href="">
                            <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 13H43V37H31.5714L20.1429 43V37H13V13ZM20.1429 25H21.5714V26.5H20.1429V25ZM27.2857 25H28.7143V26.5H27.2857V25ZM34.4286 25H35.8571V26.5H34.4286V25Z" stroke="black" stroke-width="2"/>
                            </svg>      
                            <h5 class="mb-0 ms-3">Contact Preference</h5>
                        </a>

                        <hr class="mt-1 mb-1" width="75%">

                        <a class="d-flex align-items-center" href="">
                            <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M44.625 43C44.625 43 47 43 47 40.5C47 38 44.625 30.5 35.125 30.5C25.625 30.5 23.25 38 23.25 40.5C23.25 43 25.625 43 25.625 43H44.625ZM25.6772 40.5C25.6597 40.4975 25.6423 40.4941 25.625 40.49C25.6274 39.83 26.0216 37.915 27.43 36.19C28.741 34.5725 31.0448 33 35.125 33C39.2029 33 41.5066 34.575 42.82 36.19C44.2284 37.915 44.6203 39.8325 44.625 40.49L44.606 40.495C44.595 40.497 44.5839 40.4986 44.5728 40.5H25.6772ZM35.125 25.5C36.3848 25.5 37.593 24.9732 38.4838 24.0355C39.3746 23.0979 39.875 21.8261 39.875 20.5C39.875 19.1739 39.3746 17.9021 38.4838 16.9645C37.593 16.0268 36.3848 15.5 35.125 15.5C33.8652 15.5 32.657 16.0268 31.7662 16.9645C30.8754 17.9021 30.375 19.1739 30.375 20.5C30.375 21.8261 30.8754 23.0979 31.7662 24.0355C32.657 24.9732 33.8652 25.5 35.125 25.5ZM42.25 20.5C42.25 21.4849 42.0657 22.4602 41.7076 23.3701C41.3496 24.2801 40.8248 25.1069 40.1631 25.8033C39.5015 26.4997 38.7161 27.0522 37.8516 27.4291C36.9872 27.806 36.0607 28 35.125 28C34.1893 28 33.2628 27.806 32.3984 27.4291C31.5339 27.0522 30.7485 26.4997 30.0869 25.8033C29.4252 25.1069 28.9004 24.2801 28.5424 23.3701C28.1843 22.4602 28 21.4849 28 20.5C28 18.5109 28.7507 16.6032 30.0869 15.1967C31.4231 13.7902 33.2353 13 35.125 13C37.0147 13 38.8269 13.7902 40.1631 15.1967C41.4993 16.6032 42.25 18.5109 42.25 20.5ZM25.473 31.2C24.523 30.8851 23.5436 30.6781 22.5517 30.5825C21.9944 30.5267 21.4348 30.4992 20.875 30.5C11.375 30.5 9 38 9 40.5C9 42.1675 9.79088 43 11.375 43H21.388C21.0359 42.2195 20.8603 41.3638 20.875 40.5C20.875 37.975 21.7704 35.395 23.4638 33.24C24.0409 32.505 24.713 31.8175 25.473 31.2ZM20.685 33C19.2794 35.2232 18.52 37.8295 18.5 40.5H11.375C11.375 39.85 11.7645 37.925 13.18 36.19C14.4744 34.6 16.7235 33.05 20.685 33.0025V33ZM12.5625 21.75C12.5625 19.7609 13.3132 17.8532 14.6494 16.4467C15.9856 15.0402 17.7978 14.25 19.6875 14.25C21.5772 14.25 23.3894 15.0402 24.7256 16.4467C26.0618 17.8532 26.8125 19.7609 26.8125 21.75C26.8125 23.7391 26.0618 25.6468 24.7256 27.0533C23.3894 28.4598 21.5772 29.25 19.6875 29.25C17.7978 29.25 15.9856 28.4598 14.6494 27.0533C13.3132 25.6468 12.5625 23.7391 12.5625 21.75ZM19.6875 16.75C18.4277 16.75 17.2195 17.2768 16.3287 18.2145C15.4379 19.1521 14.9375 20.4239 14.9375 21.75C14.9375 23.0761 15.4379 24.3479 16.3287 25.2855C17.2195 26.2232 18.4277 26.75 19.6875 26.75C20.9473 26.75 22.1555 26.2232 23.0463 25.2855C23.9371 24.3479 24.4375 23.0761 24.4375 21.75C24.4375 20.4239 23.9371 19.1521 23.0463 18.2145C22.1555 17.2768 20.9473 16.75 19.6875 16.75Z" fill="black"/>
                            </svg>                                
                            <h5 class="mb-0 ms-3">Social Media</h5>
                        </a>

                        <hr class="mt-1 mb-1" width="75%">

                        <a class="d-flex align-items-center" href="">
                            <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M37.5605 14.4155C36.5887 13.5747 35.2709 13.1024 33.8969 13.1024C32.5229 13.1024 31.2051 13.5747 30.2334 14.4155L27.791 16.5293C27.6874 16.619 27.5872 16.7117 27.4939 16.8074C27.4 16.7112 27.3015 16.6184 27.1985 16.5293L24.7527 14.4155C24.2775 13.9773 23.7054 13.6263 23.0704 13.3832C22.4354 13.1402 21.7505 13.01 21.0562 13.0006C20.362 12.9911 19.6726 13.1025 19.029 13.3281C18.3855 13.5537 17.8009 13.889 17.31 14.3139C16.8191 14.7389 16.4318 15.2449 16.1713 15.802C15.9108 16.359 15.7822 16.9557 15.7934 17.5565C15.8045 18.1574 15.955 18.7502 16.236 19.2997C16.517 19.8493 16.9227 20.3443 17.4291 20.7555L18.9439 22.071H9V31.0406H12.4545V43H43.5455V31.0406H47V22.071H36.0439L37.5605 20.757C38.5319 19.916 39.0776 18.7754 39.0776 17.5862C39.0776 16.397 38.5319 15.2565 37.5605 14.4155ZM32.6757 20.7555L35.1181 18.6417C35.4327 18.3597 35.6068 17.9821 35.6029 17.5901C35.599 17.1982 35.4173 16.8232 35.097 16.546C34.7768 16.2689 34.3436 16.1117 33.8907 16.1082C33.4378 16.1048 33.0015 16.2555 32.6757 16.5278L30.2334 18.6417C29.9187 18.9236 29.7446 19.3012 29.7486 19.6932C29.7525 20.0852 29.9342 20.4601 30.2544 20.7373C30.5747 21.0144 31.0079 21.1717 31.4608 21.1751C31.9136 21.1785 32.35 21.0278 32.6757 20.7555ZM24.7545 18.6417L22.3121 16.5293C22.1528 16.3865 21.9622 16.2727 21.7514 16.1943C21.5407 16.116 21.314 16.0747 21.0847 16.073C20.8553 16.0713 20.6279 16.1091 20.4156 16.1843C20.2033 16.2594 20.0105 16.3704 19.8483 16.5108C19.6861 16.6512 19.5579 16.8181 19.471 17.0018C19.3842 17.1855 19.3405 17.3824 19.3425 17.5809C19.3445 17.7794 19.3921 17.9755 19.4826 18.1579C19.5732 18.3403 19.7048 18.5053 19.8697 18.6432L22.3121 20.757C22.4714 20.8998 22.662 21.0136 22.8728 21.092C23.0835 21.1703 23.3101 21.2116 23.5395 21.2133C23.7688 21.215 23.9963 21.1772 24.2086 21.102C24.4208 21.0269 24.6137 20.9159 24.7759 20.7755C24.938 20.6351 25.0663 20.4682 25.1531 20.2845C25.24 20.1008 25.2837 19.9039 25.2817 19.7054C25.2797 19.507 25.2321 19.3108 25.1415 19.1284C25.051 18.946 24.9194 18.7811 24.7545 18.6432V18.6417ZM43.5455 25.0609V28.0507H12.4545V25.0609H43.5455ZM29.5839 31.0406H40.0909V40.0101H29.5839V31.0406ZM26.4161 31.0406V40.0101H15.9091V31.0406H26.4161Z" fill="black"/>
                            </svg>                                
                            <h5 class="mb-0 ms-3">Gifts & Voucher</h5>
                        </a>
                    </div>

                    <div class="bg-white ps-1 pt-0 pb-0">                            
                        <a class="d-flex align-items-center" href="logout">
                            <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.3513 12H30.4324C31.3212 12 32.1737 12.3477 32.8022 12.9665C33.4307 13.5854 33.7837 14.4248 33.7837 15.3V18.6H30.4324V15.3H15.3513V41.7H30.4324V38.4H33.7837V41.7C33.7837 42.5752 33.4307 43.4146 32.8022 44.0335C32.1737 44.6523 31.3212 45 30.4324 45H15.3513C14.4625 45 13.6101 44.6523 12.9816 44.0335C12.3531 43.4146 12 42.5752 12 41.7V15.3C12 14.4248 12.3531 13.5854 12.9816 12.9665C13.6101 12.3477 14.4625 12 15.3513 12V12Z" fill="black"/>
                                <path d="M32.2589 34.4235L34.6216 36.75L43 28.5L34.6216 20.25L32.2589 22.5765L36.5822 26.85H20.3784V30.15H36.5822L32.2589 34.4235Z" fill="black"/>
                            </svg>
                            <h5 class="mb-0 ms-3">Sign out</h5>
                        </a>
                    </div>
                </div>
            </div>



            <div class="my_right">
                <div class="logo_group d-flex align-items-center justify-content-start ps-3">
                    <span class="my_account align-middle text-start mt-3">My Account</span>
                </div>

                <div style="border: 1px solid black;">
                    <div class="crop mb-3" style="width: 100%;">
                        <img src="assets/img/av5.jpg" class="img-fluid" alt="background image" width="100%">
                    </div>
                    <div class="bg-white ps-5 pt-4">
                        <h2 class="mb-4">My Details</h2>

                       
                            <form name="my_form" onsubmit="validattion_update()" action="myAccount/update" method="post">
                                <div class="col-7">
                                    <label class="form-label my_label" for="email">EMAIL ADDRESS</label>
                                    <input name ="email" class="form-control" type="text" id="email" value= "<?php echo $_SESSION['email'] ?> ">
                                </div>

                                <br>

                                <div class="col-7">
                                    <label class="form-label my_label" for="firstName">FIRST NAME</label>
                                    <input name = "fname" class="form-control" type="text" id="firstName" value="<?php echo $_SESSION['firstname'] ?>">
                                    <p class="mb-0 my_quote">Must have 2-30 characters</p>
                                </div>


                                <br>

                                <div class="col-7">
                                    <label class="form-label my_label" for="lastName">LAST NAME</label>
                                    <input name = "lname" class="form-control" type="text" id="lastName" value="<?php echo $_SESSION['lastname'] ?> ">
                                    <p class="mb-0 my_quote">Must have 2-30 characters</p>
                                </div>

                                <br>

                                <div class="col-7">
                                    <label class="form-label my_label" for="password">PASSWORD</label>
                                    <input name = "pass" class="form-control" type="password" id="password">
                                    <p class="mb-0 my_quote">Must have 10 or more characters</p>
                                </div>

                                <br>

                                <br>

                                <div class="d-grid mt-2 pb-3 col-7">
                                    <button class="btn btn-dark my_button" type="submit" name = "submit"><span class="fw-bold">UPDATE MY
                                            INFO</span></button>
                                </div>
                            </form>
                        
                    </div>
                </div>

            </div>
        </div>


        <footer class="d-flex align-items-center mt-5">
            <div class="footer_left" style="width: 50%;">
                <a class="ms-3 footer-del" href="">VinBK HomePage</a>
                <a class="ms-3" href="">Terms & Conditions</a>
                <a class="ms-3" href="">Privacy & Policy</a>
            </div>
            <div class="footer_right text-end me-3" style="width: 50%;">
                <p class="mb-0">&copy; 2021 BK</p>
            </div>
        </footer>
    </div>



    <!--  JavaScript  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <!-- <script src="../js/singIn.js"></script> -->
    <script>
        function validattion_update(){
    var isError = false;
    var msg = "";

    // check Email
    let email = document.forms["my_form"]["email"].value;
    if (email.length == 0) {
        isError = true;
        msg += "Please enter your email\n"
    }
    else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        isError = true
        msg += "Your email must be <sth>@<sth>.<sth>\n"
    }

    // Check name
    let firstName = document.forms["my_form"]["firstName"].value;   //my_form is name of a form //firstName is id of input
    let lastName = document.forms["my_form"]["lastName"].value;
    if (firstName.length == 0) {
        isError = true;
        msg += "Please enter your first name\n";
    }
    else if (firstName.length < 2 || firstName.length > 30) {
        isError = true;
        msg += "Your first name length must be from 2 to 30\n";
    }

    if (lastName.length == 0) {
        isError = true;
        msg += "Please enter your last name\n";
    }
    else if (lastName.length < 2 || lastName.length > 30) {
        isError = true;
        msg += "Your last name length must be from 2 to 30\n";
    }

    // check Password
    let password = document.forms["my_form"]["password"].value;
    if (password.length < 2 || password.length > 30) {
        isError = true
        msg += "Your password length must be from 2 to 30\n"
    }
    // Notify
    if (isError) {
        alert(msg);
        isError = false;
        msg = "";
        return false;
    }
    else {
        alert("Well done kid !!!");
        return true;
    }
}
    </script>
</body>

</html>