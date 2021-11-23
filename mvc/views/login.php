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
    <title>Sign in to VinBK</title>
    <!-- CSS -->
    <!-- <link type="text/css" rel="stylesheet" href="./assets/css/signIn.css"> của Công -->
    <link type="text/css" rel="stylesheet" href="./public/css/signIn.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>

<body>
    <div class="my_page">
        <div class="my_container">
            <div id="logo_group">
                <span class="VinBK">VinBK</span>
            </div>
            <div id="change_option">
                <div id="sign_up">
                    <a href="./?url=register">SIGN UP</a>
                </div>
                <div class="d-flex" id="vertical_line">
                    <div class="vr"></div>
                </div>
                <div id="sign_in">
                    <p>SIGN IN</p>
                </div>
            </div>
            <div class="my_content">
                <form action="login/verify" method="post">
                    <label class="form-label" for="email" id="email">EMAIL ADDRESS</label>
                    <input class="form-control" type="email" id="email_text" name="email">

                    <br>

                    <label class="form-label" for="password" id="password">PASSWORD</label>
                    <input class="form-control" type="password" id="pasword_text" name="pass">

                    <br>

                    <div class="d-grid mt-2 mb-1">
                        <button type = "submit" name ="submit"class="btn btn-dark my_button"><span class="fw-bold">SIGN IN</span></button>
                    </div>

                    <div class="text-center mb-5" id="forgot_pass">
                        <a href="">forgot password?</a>
                    </div>
                </form>

                <p class="text-center fw-bold fs-4 mb-2">OR SIGN IN WITH ...</p>

                <div class="d-flex mb-2">
                    <button class="me-2 my_icon" type="button">
                        <svg class="ms-3 me-4" width="30" height="30" viewBox="0 0 30 30" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M27.2569 12.5519H26.25V12.5H15V17.5H22.0644C21.0338 20.4106 18.2644 22.5 15 22.5C10.8581 22.5 7.5 19.1419 7.5 15C7.5 10.8581 10.8581 7.5 15 7.5C16.9119 7.5 18.6513 8.22125 19.9756 9.39937L23.5112 5.86375C21.2787 3.78312 18.2925 2.5 15 2.5C8.09688 2.5 2.5 8.09688 2.5 15C2.5 21.9031 8.09688 27.5 15 27.5C21.9031 27.5 27.5 21.9031 27.5 15C27.5 14.1619 27.4137 13.3438 27.2569 12.5519Z"
                                fill="#FFC107" />
                            <path
                                d="M3.94122 9.18188L8.0481 12.1938C9.15935 9.4425 11.8506 7.5 15 7.5C16.9118 7.5 18.6512 8.22125 19.9756 9.39937L23.5112 5.86375C21.2787 3.78312 18.2925 2.5 15 2.5C10.1987 2.5 6.03497 5.21062 3.94122 9.18188Z"
                                fill="#FF3D00" />
                            <path
                                d="M15 27.4999C18.2288 27.4999 21.1625 26.2643 23.3806 24.2549L19.5119 20.9812C18.2147 21.9677 16.6297 22.5012 15 22.4999C11.7488 22.4999 8.98814 20.4268 7.94814 17.5337L3.87189 20.6743C5.94064 24.7224 10.1419 27.4999 15 27.4999Z"
                                fill="#4CAF50" />
                            <path
                                d="M27.2569 12.5519H26.25V12.5H15V17.5H22.0644C21.5714 18.8853 20.6833 20.0957 19.51 20.9819L19.5119 20.9806L23.3806 24.2544C23.1069 24.5031 27.5 21.25 27.5 15C27.5 14.1619 27.4137 13.3438 27.2569 12.5519Z"
                                fill="#1976D2" />
                        </svg>
                        <p class="mb-0 my_icon_text">GOOGLE</p>
                    </button>

                    <button class="my_icon">
                        <svg class="ms-3 me-4" width="33" height="33" viewBox="0 0 33 33" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M24.0861 17.2638C24.0732 15.0659 25.069 13.4095 27.08 12.1881C25.9553 10.5768 24.2537 9.69053 22.0107 9.51973C19.887 9.35215 17.5635 10.7572 16.7127 10.7572C15.8136 10.7572 13.7575 9.57774 12.1397 9.57774C8.80107 9.6293 5.25293 12.2396 5.25293 17.5506C5.25293 19.12 5.53975 20.741 6.11338 22.4104C6.88037 24.6082 9.64541 29.9933 12.5297 29.9063C14.0379 29.8708 15.1046 28.8363 17.0672 28.8363C18.9718 28.8363 19.9579 29.9063 21.6401 29.9063C24.5502 29.8644 27.051 24.9691 27.7793 22.7648C23.8767 20.9247 24.0861 17.3766 24.0861 17.2638ZM20.6991 7.43467C22.333 5.49463 22.1848 3.72861 22.1364 3.09375C20.6927 3.17754 19.0233 4.07666 18.0727 5.18203C17.0253 6.36797 16.4098 7.83428 16.5419 9.4875C18.1017 9.60674 19.5261 8.8043 20.6991 7.43467Z"
                                fill="black" />
                        </svg>
                        <p class="mb-0 my_icon_text">APPLE</p>
                    </button>
                </div>

                <div class="d-flex">
                    <button class="me-2 my_icon">
                        <svg class="ms-3 me-3" width="30" height="30" viewBox="0 0 30 30" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M27.5 15C27.5 8.1 21.9 2.5 15 2.5C8.1 2.5 2.5 8.1 2.5 15C2.5 21.05 6.8 26.0875 12.5 27.25V18.75H10V15H12.5V11.875C12.5 9.4625 14.4625 7.5 16.875 7.5H20V11.25H17.5C16.8125 11.25 16.25 11.8125 16.25 12.5V15H20V18.75H16.25V27.4375C22.5625 26.8125 27.5 21.4875 27.5 15Z"
                                fill="#2035FF" />
                        </svg>

                        <p class="mb-0 my_icon_text">FACEBOOK</p>
                    </button>

                    <button class="my_icon">
                        <svg class="ms-3 me-4" width="26" height="26" viewBox="0 0 26 26" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_43:153)">
                                <path
                                    d="M26 3.16607C25.0433 3.68569 24.0153 4.03688 22.9363 4.19487C24.0377 3.38626 24.8834 2.10579 25.2816 0.580123C24.2346 1.3412 23.089 1.87742 21.8944 2.16563C20.9214 0.895855 19.5351 0.102295 18.0008 0.102295C15.0549 0.102295 12.6665 3.02773 12.6665 6.63588C12.6665 7.14805 12.7137 7.64665 12.8046 8.12497C8.37139 7.85241 4.44092 5.25129 1.80995 1.29829C1.35088 2.26328 1.08784 3.38576 1.08784 4.583C1.08784 6.84985 2.02962 8.84962 3.46084 10.0214C2.61376 9.98886 1.78532 9.70862 1.04467 9.20404C1.04437 9.23141 1.04437 9.25877 1.04437 9.28627C1.04437 12.4519 2.88305 15.0927 5.32319 15.693C4.5377 15.9546 3.71376 15.9929 2.91434 15.8049C3.59308 18.4007 5.56309 20.2896 7.8972 20.3425C6.07161 22.0948 3.77152 23.1394 1.27248 23.1394C0.841852 23.1394 0.41732 23.1084 0 23.0481C2.36062 24.9019 5.16445 25.9836 8.1768 25.9836C17.9884 25.9836 23.3537 16.0276 23.3537 7.39362C23.3537 7.11023 23.3486 6.82846 23.3383 6.5483C24.3825 5.62361 25.2839 4.47827 26 3.16607Z"
                                    fill="#55ACEE" />
                            </g>
                            <defs>
                                <clipPath id="clip0_43:153">
                                    <rect width="26" height="26" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                        <p class="mb-0 my_icon_text">TWITTER</p>
                    </button>
                </div>

            </div>
        </div>
    </div>

    <!--  JavaScript  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <!-- <script src="../js/singIn.js"></script> -->
</body>

</html>