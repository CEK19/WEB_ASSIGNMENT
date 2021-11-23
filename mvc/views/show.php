<?php
// require_once "./mvc/core/basehref.php";
// $home_url = getUrl().'/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- -----------------Library--------------------- -->
    
    <link type="text/css" rel="stylesheet" href="./public/css/navbar.css">
    <link type="text/css" rel="stylesheet" href="./public/css/footer.css">
    <link type="text/css" rel="stylesheet" href="./public/css/responsive.css">
    <link type="text/css" rel="stylesheet" href="./public/css/wishList.css">
    <link type="text/css" rel="stylesheet" href="./public/css/shopping_bag.css">
    <link type="text/css" rel="stylesheet" href="./public/css/sale.css">
    <link type="text/css" rel="stylesheet" href="./public/css/home_page.css">
    <link type="text/css" rel="stylesheet" href="./public/css/sellingPageLayout.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>        

    <!-- -----------------FONT EMBEDDED--------------------- -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=B612:wght@700&display=swap" rel="stylesheet">
    <title>Page</title>
</head>
<body>

    <!-- -----------------NAV BAR--------------------- -->
    <nav id="navbar-layout-for-all" class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand " href="./?url=Home/viewHome">
                    <strong>VinBK</strong>
                </a>                
                
                <ul class="nav">                
                    <li id="sale-id" class="nav-item">
                        <a class="nav-link color-white" aria-current="page" href="./?url=Home/sale">SALES</a>
                    </li>
                
                    <li class="nav-item dropdown">
                        <div class="nav-link dropdown-toggle color-white" href=""role="button" aria-expanded="false">
                        SHIRT
                        </div>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="./?url=Home/shirt_polo">
                            <span>
                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="17.5" cy="17.5" r="17" stroke="black"/>
                                <path d="M23.233 8.93152L24.6742 9.32306V29.3924H9.43701V9.32306L10.7873 8.89136" stroke="black" stroke-width="1.11111" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M29.6051 17.008L24.6741 15.502V9.32312L31.111 12.335L29.6051 17.008Z" stroke="black" stroke-width="1.11111" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M4.50595 17.008L9.43694 15.502V9.32312L3 12.335L4.50595 17.008Z" stroke="black" stroke-width="1.11111" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20.2292 7.5039L17.9672 9.93651L19.5781 12.5293C23.1713 8.08469 21.9409 6.86537 21.9409 6.86537C16.6987 2.66828 12.0569 6.86537 12.0569 6.86537C12.0569 6.86537 10.826 8.08519 14.4192 12.5293L16.0306 9.93651L13.7651 7.50038" stroke="black" stroke-width="1.11111" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16.9989 12.59C17.2354 12.59 17.4271 12.3983 17.4271 12.1618C17.4271 11.9254 17.2354 11.7336 16.9989 11.7336C16.7624 11.7336 16.5707 11.9254 16.5707 12.1618C16.5707 12.3983 16.7624 12.59 16.9989 12.59Z" fill="black"/>
                                <path d="M16.9989 14.2299C17.2354 14.2299 17.4271 14.0382 17.4271 13.8017C17.4271 13.5652 17.2354 13.3735 16.9989 13.3735C16.7624 13.3735 16.5707 13.5652 16.5707 13.8017C16.5707 14.0382 16.7624 14.2299 16.9989 14.2299Z" fill="black"/>
                                <path d="M16.9989 15.8694C17.2354 15.8694 17.4271 15.6777 17.4271 15.4413C17.4271 15.2048 17.2354 15.0131 16.9989 15.0131C16.7624 15.0131 16.5707 15.2048 16.5707 15.4413C16.5707 15.6777 16.7624 15.8694 16.9989 15.8694Z" fill="black"/>
                                </svg>                              
                            </span> 
                            Polo Shirts
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="./?url=Home/shirt_tshirt_vest">
                            <span>
                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="17.5" cy="17.5" r="17" stroke="black"/>
                                <path d="M23.875 6H21.2188L17.5 16.625V27.25H26V13.9688L23.875 10.7812V6Z" stroke="black" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M11.125 6H13.7812L17.5 16.625V27.25H9V13.9688L11.125 10.7812V6Z" stroke="black" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                            T-shirts & Vest
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="./?url=Home/shirt_shirt">
                            <span>
                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="17.5" cy="17.5" r="17" stroke="black"/>
                                <path d="M21.1371 7C21.1371 7 19.9168 7.42308 18 7.42308C16.0832 7.42308 14.8629 7 14.8629 7C14.67 7.00001 14.4786 7.03219 14.2966 7.09519L6 9.96154L6.89089 14.6154L9.50946 14.9073C9.83014 14.9431 10.1254 15.0967 10.3367 15.3375C10.548 15.5783 10.6598 15.8888 10.65 16.2072L10.2857 29H25.7143L25.35 16.2072C25.3402 15.8888 25.452 15.5783 25.6633 15.3375C25.8746 15.0967 26.1699 14.9431 26.4905 14.9073L29.1091 14.6154L30 9.96154L21.7034 7.09519C21.5214 7.03219 21.33 7.00001 21.1371 7V7Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M22 7C21.7654 7.86027 21.246 8.6208 20.5226 9.16333C19.7993 9.70587 18.9124 10 18 10C17.0876 10 16.2007 9.70587 15.4774 9.16333C14.754 8.6208 14.2346 7.86027 14 7" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>                                                                                                                  
                            </span>
                            Shirts
                            </a>
                        </li>                                
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <div class="nav-link dropdown-toggle color-white" href="" role="button" aria-expanded="false">
                        SHOES
                        </div>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="./?url=Home/shoes_trainers">
                            <span>
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M34.6665 18.0359C34.6665 27.5102 27.0514 35.1835 17.6665 35.1835C8.28162 35.1835 0.666504 27.5102 0.666504 18.0359C0.666504 8.56149 8.28162 0.888184 17.6665 0.888184C27.0514 0.888184 34.6665 8.56149 34.6665 18.0359Z" stroke="black"/>
                                <path d="M27.3332 11H19.6665V14.1667H27.3332V11Z" stroke="black" stroke-miterlimit="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M27.3332 14.1666V22.875C27.3332 23.3143 26.9067 23.6666 26.3748 23.6666H10.0832C9.02421 23.6666 8.1665 22.9581 8.1665 22.0833V19.7083C8.1665 17.9587 9.88192 16.5416 11.9998 16.5416H19.6665V14.1666H27.3332Z" stroke="black" stroke-miterlimit="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12.9583 18.9166V16.5416" stroke="black" stroke-miterlimit="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16.3123 18.9166V16.5416" stroke="black" stroke-miterlimit="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.4375 25.25V23.6666" stroke="black" stroke-miterlimit="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10.083 25.25V23.6666" stroke="black" stroke-miterlimit="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16.7913 25.25V23.6666" stroke="black" stroke-miterlimit="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M22.5413 25.25V23.6666" stroke="black" stroke-miterlimit="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M25.8958 25.25V23.6666" stroke="black" stroke-miterlimit="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M17.2708 16.5416H12" stroke="black" stroke-miterlimit="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>                              
                            </span>
                            Trainers
                            </a>
                        </li>                                                
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="./?url=Home/shoes_sandals_slippers">
                            <span>
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M29.6667 19.9167H6.33342V23.4167H29.6667V19.9167Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M18.2743 10.5834C20.3159 12.9167 20.3159 17.5834 20.3159 19.9167H8.64925V14.9584C8.64925 14.9584 15.6668 11.75 18.2743 10.5834Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M34.6665 17.9135C34.6665 27.3879 27.0514 35.0612 17.6665 35.0612C8.28162 35.0612 0.666504 27.3879 0.666504 17.9135C0.666504 8.43918 8.28162 0.765869 17.6665 0.765869C27.0514 0.765869 34.6665 8.43918 34.6665 17.9135Z" stroke="black"/>
                                </svg>                                                         
                            </span>
                            Sandals & Slippers
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="./?url=Home/shoes_shocks">
                            <span>
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M34.6665 17.6477C34.6665 27.122 27.0514 34.7954 17.6665 34.7954C8.28162 34.7954 0.666504 27.122 0.666504 17.6477C0.666504 8.17331 8.28162 0.5 17.6665 0.5C27.0514 0.5 34.6665 8.17331 34.6665 17.6477Z" stroke="black"/>
                                <path d="M27.1667 15.0729C25.4549 15.0729 22.6018 15.0729 21.4606 17.956C20.3194 20.8392 21.7459 23.434 23.1724 24.8756" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14.613 10.4597H27.1664" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15.7543 7H26.0253C26.328 7 26.6182 7.1215 26.8323 7.33778C27.0463 7.55406 27.1665 7.8474 27.1665 8.15327V18.6987C27.1665 20.6777 26.2535 22.5431 24.6923 23.7385C22.6142 25.33 19.7988 27.4751 18.6074 28.3354C16.6103 29.777 12.9013 31.2186 10.0483 28.3354C7.19523 25.4522 7.90849 21.6713 10.0483 19.6859C12.188 17.7006 14.6131 15.7371 14.6131 15.7371V8.15327C14.6131 7.8474 14.7334 7.55406 14.9474 7.33778C15.1614 7.1215 15.4517 7 15.7543 7V7Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>                              
                            </span>
                            Shocks
                            </a>
                        </li>                      
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <div class="nav-link dropdown-toggle color-white" href="" role="button" aria-expanded="false">
                        ACCESSORIES
                        </div>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="./?url=Home/access_bag">
                            <span>
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M34.6665 18.0359C34.6665 27.5102 27.0514 35.1835 17.6665 35.1835C8.28162 35.1835 0.666504 27.5102 0.666504 18.0359C0.666504 8.56149 8.28162 0.888184 17.6665 0.888184C27.0514 0.888184 34.6665 8.56149 34.6665 18.0359Z" stroke="black"/>
                                <path d="M11.5002 13C11.5002 10.2385 14.3731 8 17.9168 8C21.4606 8 24.3335 10.2385 24.3335 13" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M27.8335 13.9999C27.8335 13.7347 27.7106 13.4803 27.4918 13.2928C27.273 13.1052 26.9762 12.9999 26.6668 12.9999H9.16683C8.85741 12.9999 8.56066 13.1052 8.34187 13.2928C8.12308 13.4803 8.00016 13.7347 8.00016 13.9999V19.9999C8.00016 20.2651 8.12308 20.5194 8.34187 20.707C8.56066 20.8945 8.85741 20.9999 9.16683 20.9999H14.4168C14.7262 20.9999 15.023 20.8945 15.2418 20.707C15.4606 20.5194 15.5835 20.2651 15.5835 19.9999C15.5835 19.7347 15.7064 19.4803 15.9252 19.2928C16.144 19.1052 16.4407 18.9999 16.7502 18.9999H19.0835C19.3929 18.9999 19.6897 19.1052 19.9085 19.2928C20.1272 19.4803 20.2502 19.7347 20.2502 19.9999C20.2502 20.2651 20.3731 20.5194 20.5919 20.707C20.8107 20.8945 21.1074 20.9999 21.4168 20.9999H26.6668C26.9762 20.9999 27.273 20.8945 27.4918 20.707C27.7106 20.5194 27.8335 20.2651 27.8335 19.9999V13.9999Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M26.0835 21.0001V28.0001H9.75016V21.0001" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20.25 18.9999H15.5833V21.9999H20.25V18.9999Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>                              
                            </span>
                            Bags
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="./?url=Home/access_caps">
                            <span>
                                <svg width="35" height="36" viewBox="0 0 35 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M34.5 17.6477C34.5 27.122 26.8849 34.7954 17.5 34.7954C8.11511 34.7954 0.5 27.122 0.5 17.6477C0.5 8.17331 8.11511 0.5 17.5 0.5C26.8849 0.5 34.5 8.17331 34.5 17.6477Z" stroke="black"/>
                                <path d="M10.3999 18.1429C10.3999 13.0931 14.3396 9 19.1999 9C24.0603 9 27.9999 13.0931 27.9999 18.1429V21.5714H10.3999V18.1429Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20.85 21.5714H7.65C6.73873 21.5714 6 22.3389 6 23.2857C6 24.2325 6.73873 25 7.65 25H20.85C21.7613 25 22.5 24.2325 22.5 23.2857C22.5 22.3389 21.7613 21.5714 20.85 21.5714Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>                              
                            </span>
                            Caps
                            </a>
                        </li>                        
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="./?url=Home/access_glass">
                            <span>
                                <svg width="35" height="36" viewBox="0 0 35 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M34.5 17.6477C34.5 27.122 26.8849 34.7954 17.5 34.7954C8.11511 34.7954 0.5 27.122 0.5 17.6477C0.5 8.17331 8.11511 0.5 17.5 0.5C26.8849 0.5 34.5 8.17331 34.5 17.6477Z" stroke="black"/>
                                <path d="M15.8213 20.7097H20.232" stroke="black" stroke-linecap="round"/>
                                <path d="M7 17.1651L10.8368 8.27774L13.3384 7M28.804 17.2862L24.9171 8.27724L22.416 7" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.7018 16.871H15.379C15.4685 16.871 15.557 16.8894 15.6389 16.9251C15.7209 16.9607 15.7946 17.0129 15.8553 17.0783C15.9161 17.1436 15.9625 17.2208 15.9918 17.3049C16.0211 17.389 16.0326 17.4782 16.0255 17.5669L15.5609 23.4058C15.5481 23.5675 15.4744 23.7186 15.3545 23.8287C15.2347 23.9388 15.0775 24 14.9143 24H8.16693C8.00377 24 7.84659 23.9388 7.72676 23.8287C7.60692 23.7186 7.53322 23.5675 7.52036 23.4058L7.05573 17.5669C7.04868 17.4782 7.06015 17.3891 7.08941 17.305C7.11867 17.2209 7.1651 17.1438 7.22578 17.0784C7.28645 17.0131 7.36006 16.9609 7.44198 16.9252C7.5239 16.8895 7.61236 16.871 7.7018 16.871ZM20.6749 16.871H28.3515C28.441 16.871 28.5295 16.8894 28.6115 16.9251C28.6935 16.9607 28.7672 17.0129 28.8279 17.0783C28.8886 17.1436 28.9351 17.2208 28.9644 17.3049C28.9937 17.389 29.0051 17.4782 28.9981 17.5669L28.5335 23.4058C28.5206 23.5675 28.4469 23.7186 28.3271 23.8287C28.2072 23.9388 28.0501 24 27.8869 24H21.1395C20.9763 24 20.8191 23.9388 20.6993 23.8287C20.5795 23.7186 20.5058 23.5675 20.4929 23.4058L20.0283 17.5669C20.0212 17.4782 20.0327 17.389 20.062 17.3049C20.0913 17.2208 20.1378 17.1436 20.1985 17.0783C20.2592 17.0129 20.3329 16.9607 20.4149 16.9251C20.4969 16.8894 20.5854 16.871 20.6749 16.871Z" fill="black" stroke="black"/>
                                </svg>                              
                            </span>                          
                            Sunglasses
                            </a>
                        </li>                                                                 
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <div class="nav-link dropdown-toggle color-white" href="" role="button" aria-expanded="false">
                        PANTS
                        </div>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="./?url=Home/pants_jeans">
                            <span>
                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="17.5" cy="17.5" r="17" stroke="black"/>
                                <path d="M17.6305 13.5388C16.6349 13.5388 15.7117 14.2232 15.7117 14.6389C15.7117 15.0546 14.9339 28.4106 14.9339 28.4106H9.85425V6.26147H25.4098V28.4106H20.3301C20.3301 28.4106 19.5524 15.0546 19.5524 14.6389C19.5524 14.2232 18.6291 13.5388 17.6336 13.5388" stroke="black" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M17.8264 9.02724C18.2559 9.02724 18.6041 8.67901 18.6041 8.24946C18.6041 7.8199 18.2559 7.47168 17.8264 7.47168C17.3968 7.47168 17.0486 7.8199 17.0486 8.24946C17.0486 8.67901 17.3968 9.02724 17.8264 9.02724Z" fill="black"/>
                                <path d="M22.0029 7.57202C22.0029 7.57202 21.0684 11.0479 24.3705 12.0314" stroke="black" stroke-width="1.11111" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.2609 7.57202C13.2609 7.57202 14.1954 11.0479 10.8933 12.0314" stroke="black" stroke-width="1.11111" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>                              
                            </span>
                            Jeans
                            </a>
                        </li>                        
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="./?url=Home/pants_jog">
                            <span>
                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="17.5" cy="17.5" r="17" stroke="black"/>
                                <path d="M17.5 14.9167L22.25 24.9444H27L24.8889 7H10.1111L8 24.9444H12.75L17.5 14.9167Z" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M22.7778 24.9445L23.3056 28.1111H26.4723V24.9445H22.7778Z" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M11.6945 28.1111H8.52783V24.9445H12.2223L11.6945 28.1111Z" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M17.5 7L19.6111 10.9583" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M17.5 7L15.3889 10.9583" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>                              
                            </span>
                            Joggers
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="./?url=Home/pants_lounges">
                            <span>
                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="17.5" cy="17.5" r="17" stroke="black"/>
                                <path d="M6 25.3333L7.27778 10H27.7222L29 25.3333H19.3157L17.5 18.3056L15.6843 25.3333H6Z" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M17.5 10L19.4167 14.4722" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M17.5001 10L14.9446 14.7917" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.6667 10H21.3334" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>                        
                                Lounge Wear      
                            </span>
                            </a>
                        </li>                      
                        </ul>
                    </li>
                </ul>            

                <form id="navBarSearchForm">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">                    
                </form>

                <!-----------------------------CHECK CÁI---------------------->
                <ul class="nav">

                    <li class="nav-item dropdown">
                            <div class="nav-link dropdown-toggle color-white" href="" role="button" aria-expanded="false">                                
                                    <svg id="login-icon" width="30" height="30" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M27.5 28.875V26.125C27.5 24.6663 26.9205 23.2674 25.8891 22.2359C24.8576 21.2045 23.4587 20.625 22 20.625H11C9.54131 20.625 8.14236 21.2045 7.11091 22.2359C6.07946 23.2674 5.5 24.6663 5.5 26.125V28.875" stroke="#EEEEEE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M16.5 15.125C19.5376 15.125 22 12.6626 22 9.625C22 6.58743 19.5376 4.125 16.5 4.125C13.4624 4.125 11 6.58743 11 9.625C11 12.6626 13.4624 15.125 16.5 15.125Z" stroke="#EEEEEE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>                                  
                            </div>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="./?url=myAccount/">
                                <span>
                                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M35 17.4825C35 7.83125 27.16 0 17.5 0C7.84 0 0 7.83125 0 17.4825C0 22.7981 2.415 27.5887 6.195 30.8044C6.23 30.8394 6.265 30.8394 6.265 30.8744C6.58 31.1194 6.895 31.3644 7.245 31.6094C7.42 31.7144 7.56 31.8522 7.735 31.9922C10.627 33.953 14.0409 35.0008 17.535 35C21.0291 35.0008 24.443 33.953 27.335 31.9922C27.51 31.8872 27.65 31.7494 27.825 31.6422C28.14 31.3994 28.49 31.1544 28.805 30.9094C28.84 30.8744 28.875 30.8744 28.875 30.8394C32.585 27.5866 35 22.7981 35 17.4825V17.4825ZM17.5 32.7972C14.21 32.7972 11.2 31.7472 8.715 29.9994C8.75 29.7194 8.82 29.4416 8.89 29.1616C9.09855 28.4027 9.40443 27.6741 9.8 26.9938C10.185 26.3288 10.64 25.7338 11.2 25.2088C11.725 24.6838 12.355 24.1959 12.985 23.8109C13.65 23.4259 14.35 23.1459 15.12 22.9359C15.896 22.7268 16.6963 22.6216 17.5 22.6231C19.8858 22.6062 22.1839 23.5214 23.905 25.1738C24.71 25.9788 25.34 26.9238 25.795 28.0066C26.04 28.6366 26.215 29.3016 26.32 29.9994C23.7369 31.8153 20.6575 32.7922 17.5 32.7972ZM12.145 16.6097C11.8366 15.9036 11.6815 15.1401 11.69 14.3697C11.69 13.6019 11.83 12.8319 12.145 12.1319C12.46 11.4319 12.88 10.8041 13.405 10.2791C13.93 9.75406 14.56 9.33625 15.26 9.02125C15.96 8.70625 16.73 8.56625 17.5 8.56625C18.305 8.56625 19.04 8.70625 19.74 9.02125C20.44 9.33625 21.07 9.75625 21.595 10.2791C22.12 10.8041 22.54 11.4341 22.855 12.1319C23.17 12.8319 23.31 13.6019 23.31 14.3697C23.31 15.1747 23.17 15.9097 22.855 16.6075C22.551 17.2971 22.124 17.9257 21.595 18.4625C21.058 18.9908 20.4295 19.417 19.74 19.7203C18.2937 20.3147 16.6713 20.3147 15.225 19.7203C14.5355 19.417 13.907 18.9908 13.37 18.4625C12.8402 17.9335 12.4235 17.3024 12.145 16.6075V16.6097ZM28.385 28.2166C28.385 28.1466 28.35 28.1116 28.35 28.0416C28.0058 26.9465 27.4984 25.9097 26.845 24.9659C26.191 24.0152 25.3872 23.1767 24.465 22.4831C23.7607 21.9533 22.9972 21.5069 22.19 21.1531C22.5572 20.9108 22.8975 20.63 23.205 20.3153C23.7268 19.8002 24.1851 19.2244 24.57 18.6003C25.3452 17.3268 25.7455 15.8604 25.725 14.3697C25.7358 13.2661 25.5215 12.172 25.095 11.1541C24.674 10.1733 24.0679 9.28278 23.31 8.53125C22.5532 7.78757 21.6625 7.19379 20.685 6.78125C19.6654 6.35555 18.5698 6.14194 17.465 6.15344C16.36 6.14263 15.2644 6.35699 14.245 6.78344C13.259 7.1951 12.3662 7.80147 11.62 8.56625C10.8763 9.32222 10.2825 10.2122 9.87 11.1891C9.44354 12.207 9.22917 13.3011 9.24 14.4047C9.24 15.1747 9.345 15.9097 9.555 16.6075C9.765 17.3425 10.045 18.0075 10.43 18.6353C10.78 19.2653 11.27 19.8253 11.795 20.3503C12.11 20.6653 12.46 20.9431 12.845 21.1881C12.0353 21.5514 11.2716 22.0096 10.57 22.5531C9.66 23.2531 8.855 24.0909 8.19 25.0009C7.52994 25.9408 7.02205 26.9787 6.685 28.0766C6.65 28.1466 6.65 28.2166 6.65 28.2516C3.885 25.4537 2.17 21.6781 2.17 17.4825C2.17 9.05625 9.065 2.16781 17.5 2.16781C25.935 2.16781 32.83 9.05625 32.83 17.4825C32.8254 21.5074 31.2273 25.3667 28.385 28.2166V28.2166Z" fill="black"/>
                                    </svg>                       
                                </span>
                                My Account
                                </a>
                            </li>                        
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="./?url=Home/home">
                                <span>
                                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.9792 5.83325H8.02083C7.21542 5.83325 6.5625 6.48617 6.5625 7.29159V30.6249C6.5625 31.4303 7.21542 32.0833 8.02083 32.0833H26.9792C27.7846 32.0833 28.4375 31.4303 28.4375 30.6249V7.29159C28.4375 6.48617 27.7846 5.83325 26.9792 5.83325Z" stroke="black" stroke-width="1.5" stroke-linejoin="round"/>
                                    <path d="M13.125 2.91663V7.29163" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M21.875 2.91663V7.29163" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M11.6665 13.8541H23.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M11.6665 19.6875H20.4165" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M11.6665 25.5208H17.4998" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                My Orders
                                </a>
                            </li>   
                            <li><hr class="dropdown-divider"></li>                         
                            <li>
                                <a class="dropdown-item middle-text" href="./?url=login">                                    
                                    <span>
                                        <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M27.4722 5.83336V5.58336H27.2222H9.9907C10.0439 5.22646 10.2102 4.89345 10.4685 4.63521C10.7862 4.31744 11.2172 4.13892 11.6666 4.13892H27.2222C27.6716 4.13892 28.1026 4.31744 28.4203 4.63521C28.7381 4.95298 28.9166 5.38397 28.9166 5.83336V29.1667C28.9166 29.6161 28.7381 30.0471 28.4203 30.3648C28.1026 30.6826 27.6716 30.8611 27.2222 30.8611H11.6666C11.2172 30.8611 10.7862 30.6826 10.4685 30.3648C10.1507 30.0471 9.97217 29.6161 9.97217 29.1667V19.8889H11.4166V29.1667V29.4167H11.6666H27.2222H27.4722V29.1667V5.83336Z" fill="black" stroke="black" stroke-width="0.5"/>
                                            <path d="M14.8625 18.1371L14.8709 18.1299L14.8787 18.1219L18.1648 14.758L18.5797 14.3333H17.9859H3.88873C3.69718 14.3333 3.51348 14.2572 3.37804 14.1218C3.24259 13.9863 3.1665 13.8026 3.1665 13.6111C3.1665 13.4195 3.24259 13.2358 3.37804 13.1004C3.51348 12.965 3.69718 12.8889 3.88873 12.8889H17.9859H18.5986L18.1609 12.4602L14.8929 9.26016C14.7788 9.12314 14.7194 8.94865 14.7263 8.77027C14.7333 8.58851 14.8087 8.41609 14.9373 8.28746C15.0659 8.15884 15.2384 8.08349 15.4201 8.07647C15.5989 8.06956 15.7737 8.12924 15.9109 8.24376L21.3464 13.6887L15.8939 19.1413L15.8871 19.1481L15.8808 19.1554C15.816 19.231 15.7364 19.2924 15.6468 19.3358C15.5572 19.3791 15.4596 19.4035 15.3601 19.4073C15.2606 19.4112 15.1615 19.3944 15.0688 19.3581C14.9761 19.3218 14.8919 19.2667 14.8215 19.1963C14.7512 19.126 14.6961 19.0418 14.6598 18.9491C14.6235 18.8564 14.6067 18.7572 14.6105 18.6578C14.6144 18.5583 14.6387 18.4607 14.6821 18.3711C14.7254 18.2815 14.7868 18.2018 14.8625 18.1371Z" fill="black" stroke="black" stroke-width="0.5"/>
                                        </svg>

                                    </span>
                                    Sign In                                    
                                </a>
                            </li>                              
                            <li><hr class="dropdown-divider"></li>                         
                            <li>
                                <a class="middle-text dropdown-item" href="./?url=register">                                    
                                    <span>
                                        <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.5007 17.5C21.5277 17.5 24.7923 14.2354 24.7923 10.2083C24.7923 6.18122 21.5277 2.91663 17.5007 2.91663C13.4736 2.91663 10.209 6.18122 10.209 10.2083C10.209 14.2354 13.4736 17.5 17.5007 17.5Z" stroke="black" stroke-width="2.91667"/>
                                        <path d="M24.7921 32.0833H7.68C7.26639 32.0834 6.85749 31.9955 6.48044 31.8255C6.10339 31.6555 5.76681 31.4072 5.49304 31.0972C5.21928 30.7871 5.01458 30.4224 4.89255 30.0272C4.77051 29.632 4.73392 29.2154 4.78521 28.805L5.35396 24.2491C5.48622 23.1907 6.0006 22.2171 6.80038 21.5113C7.60015 20.8055 8.63021 20.4162 9.69687 20.4166H10.2087" stroke="black" stroke-width="2.91667" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M27.709 18.9583V27.7083" stroke="black" stroke-width="2.91667" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M23.334 23.3333H32.084" stroke="black" stroke-width="2.91667" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                    Sign Up
                                </a>
                            </li>                              
                            </ul>
                        </li>                

                    <li class="nav-item"> 
                        <a class="nav-link color-white" aria-current="page" href="./?url=Home/wishList">
                            <svg id="wishlist-icon" width="30" height="30" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M28.655 6.3387C27.9527 5.63608 27.1188 5.07871 26.2011 4.69844C25.2833 4.31816 24.2997 4.12244 23.3062 4.12244C22.3128 4.12244 21.3291 4.31816 20.4114 4.69844C19.4936 5.07871 18.6598 5.63608 17.9575 6.3387L16.5 7.7962L15.0425 6.3387C13.6239 4.92012 11.6999 4.12317 9.69373 4.12317C7.68756 4.12317 5.76356 4.92012 4.34498 6.3387C2.9264 7.75727 2.12946 9.68128 2.12946 11.6874C2.12946 13.6936 2.9264 15.6176 4.34498 17.0362L5.80248 18.4937L16.5 29.1912L27.1975 18.4937L28.655 17.0362C29.3576 16.3339 29.915 15.5001 30.2952 14.5823C30.6755 13.6646 30.8712 12.6809 30.8712 11.6874C30.8712 10.694 30.6755 9.71034 30.2952 8.79258C29.915 7.87483 29.3576 7.04099 28.655 6.3387V6.3387Z" stroke="#EEEEEE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </li>

                    <li class="nav-item"> 
                        <a class="nav-link color-white" aria-current="page" href="./?url=Home/shopping_bag">
                            <svg id="buy-icon" width="30" height="30" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.375 30.25C13.1344 30.25 13.75 29.6344 13.75 28.875C13.75 28.1156 13.1344 27.5 12.375 27.5C11.6156 27.5 11 28.1156 11 28.875C11 29.6344 11.6156 30.25 12.375 30.25Z" stroke="#EEEEEE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M27.5 30.25C28.2594 30.25 28.875 29.6344 28.875 28.875C28.875 28.1156 28.2594 27.5 27.5 27.5C26.7406 27.5 26.125 28.1156 26.125 28.875C26.125 29.6344 26.7406 30.25 27.5 30.25Z" stroke="#EEEEEE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M1.375 1.375H6.875L10.56 19.7863C10.6857 20.4193 11.0301 20.9879 11.5329 21.3927C12.0356 21.7974 12.6647 22.0124 13.31 22H26.675C27.3203 22.0124 27.9494 21.7974 28.4521 21.3927C28.9549 20.9879 29.2993 20.4193 29.425 19.7863L31.625 8.25H8.25" stroke="#EEEEEE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </li>

                </ul>                
                <!-----------------------------CHECK CÁI---------------------->
        </div>              
    </nav>    


    <?php 
        require_once "./mvc/views/page/". $data['content'] .".php" ;
    ?>            

    <footer id="footer-layout-for-all">
        <hr>
        <div class="payment-social">
            <div class="social">
                <div class="item">
                    <svg width="47" height="47" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M43.0833 23.5C43.0833 12.69 34.31 3.91663 23.5 3.91663C12.69 3.91663 3.91663 12.69 3.91663 23.5C3.91663 32.9783 10.6533 40.8704 19.5833 42.6916V29.375H15.6666V23.5H19.5833V18.6041C19.5833 14.8245 22.6579 11.75 26.4375 11.75H31.3333V17.625H27.4166C26.3395 17.625 25.4583 18.5062 25.4583 19.5833V23.5H31.3333V29.375H25.4583V42.9854C35.3479 42.0062 43.0833 33.6637 43.0833 23.5Z" fill="#699BF7"/>
                    </svg>   
                </div>
                <div class="item">
                    <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.5 0C14.2082 0 13.5428 0.024375 11.4636 0.117C9.38438 0.2145 7.96819 0.541125 6.7275 1.02375C5.4261 1.51325 4.24732 2.28108 3.27356 3.27356C2.28169 4.24782 1.51395 5.42646 1.02375 6.7275C0.541125 7.96575 0.212063 9.38437 0.117 11.4562C0.024375 13.5403 0 14.2033 0 19.5024C0 24.7967 0.024375 25.4597 0.117 27.5389C0.2145 29.6156 0.541125 31.0318 1.02375 32.2725C1.52344 33.5546 2.18888 34.6418 3.27356 35.7264C4.35581 36.8111 5.44294 37.479 6.72506 37.9762C7.96819 38.4589 9.38194 38.7879 11.4587 38.883C13.5403 38.9756 14.2033 39 19.5 39C24.7967 39 25.4573 38.9756 27.5389 38.883C29.6132 38.7855 31.0343 38.4589 32.2749 37.9762C33.5755 37.4865 34.7534 36.7187 35.7264 35.7264C36.8111 34.6418 37.4766 33.5546 37.9762 32.2725C38.4564 31.0318 38.7855 29.6156 38.883 27.5389C38.9756 25.4597 39 24.7967 39 19.5C39 14.2033 38.9756 13.5403 38.883 11.4587C38.7855 9.38438 38.4564 7.96575 37.9762 6.7275C37.4861 5.42642 36.7184 4.24777 35.7264 3.27356C34.753 2.28071 33.5741 1.51282 32.2725 1.02375C31.0294 0.541125 29.6108 0.212063 27.5364 0.117C25.4548 0.024375 24.7943 0 19.4951 0H19.5024H19.5ZM17.7523 3.51488H19.5024C24.7089 3.51488 25.3256 3.53194 27.3804 3.627C29.2817 3.71231 30.3152 4.03163 31.0026 4.29731C31.9117 4.65075 32.5626 5.07487 33.2451 5.75737C33.9276 6.43988 34.3493 7.08825 34.7027 7.99988C34.9708 8.68481 35.2877 9.71831 35.373 11.6196C35.4681 13.6744 35.4876 14.2911 35.4876 19.4951C35.4876 24.6992 35.4681 25.3183 35.373 27.3731C35.2877 29.2744 34.9684 30.3054 34.7027 30.9928C34.3901 31.8395 33.8911 32.6051 33.2426 33.2329C32.5601 33.9154 31.9118 34.3371 31.0001 34.6905C30.3176 34.9586 29.2841 35.2755 27.3804 35.3633C25.3256 35.4559 24.7089 35.4778 19.5024 35.4778C14.2959 35.4778 13.6768 35.4559 11.622 35.3633C9.72075 35.2755 8.68969 34.9586 8.00231 34.6905C7.15528 34.3783 6.38899 33.8802 5.75981 33.2329C5.11083 32.6041 4.61107 31.8378 4.29731 30.9904C4.03163 30.3054 3.71231 29.2719 3.627 27.3707C3.53438 25.3159 3.51488 24.6992 3.51488 19.4902C3.51488 14.2837 3.53438 13.6695 3.627 11.6147C3.71475 9.71344 4.03163 8.67994 4.29975 7.99256C4.65319 7.08337 5.07731 6.43256 5.75981 5.75006C6.44231 5.06756 7.09069 4.64587 8.00231 4.29244C8.68969 4.02431 9.72075 3.70744 11.622 3.61969C13.4209 3.53681 14.118 3.51244 17.7523 3.51V3.51488ZM29.9106 6.75187C29.6033 6.75187 29.299 6.8124 29.0151 6.93C28.7312 7.04759 28.4732 7.21996 28.2559 7.43725C28.0386 7.65453 27.8663 7.91249 27.7487 8.1964C27.6311 8.4803 27.5706 8.78458 27.5706 9.09188C27.5706 9.39917 27.6311 9.70345 27.7487 9.98735C27.8663 10.2713 28.0386 10.5292 28.2559 10.7465C28.4732 10.9638 28.7312 11.1362 29.0151 11.2538C29.299 11.3713 29.6033 11.4319 29.9106 11.4319C30.5312 11.4319 31.1264 11.1853 31.5652 10.7465C32.004 10.3077 32.2506 9.71248 32.2506 9.09188C32.2506 8.47127 32.004 7.87608 31.5652 7.43725C31.1264 6.99841 30.5312 6.75187 29.9106 6.75187ZM19.5024 9.48675C18.1742 9.46603 16.8551 9.70975 15.6219 10.2037C14.3887 10.6977 13.2661 11.432 12.3195 12.364C11.3729 13.296 10.6211 14.407 10.1079 15.6323C9.59478 16.8576 9.33051 18.1728 9.33051 19.5012C9.33051 20.8296 9.59478 22.1448 10.1079 23.3701C10.6211 24.5954 11.3729 25.7064 12.3195 26.6384C13.2661 27.5704 14.3887 28.3047 15.6219 28.7987C16.8551 29.2927 18.1742 29.5364 19.5024 29.5157C22.1314 29.4747 24.6388 28.4015 26.4834 26.5279C28.328 24.6543 29.3619 22.1305 29.3619 19.5012C29.3619 16.872 28.328 14.3481 26.4834 12.4745C24.6388 10.6009 22.1314 9.52777 19.5024 9.48675ZM19.5024 12.9992C21.2266 12.9992 22.8801 13.6841 24.0992 14.9032C25.3183 16.1224 26.0033 17.7759 26.0033 19.5C26.0033 21.2241 25.3183 22.8776 24.0992 24.0968C22.8801 25.3159 21.2266 26.0008 19.5024 26.0008C17.7783 26.0008 16.1248 25.3159 14.9057 24.0968C13.6865 22.8776 13.0016 21.2241 13.0016 19.5C13.0016 17.7759 13.6865 16.1224 14.9057 14.9032C16.1248 13.6841 17.7783 12.9992 19.5024 12.9992Z" fill="#9747FF"/>
                    </svg>          
                </div>            
                <div class="item">
                    <svg width="40" height="39" viewBox="0 0 40 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M33.3073 25.8984C33.3073 25.526 33.1163 25.2975 32.7344 25.2129C31.5712 24.959 30.5469 24.4596 29.6615 23.7148C28.776 22.9701 28.0816 22.056 27.5781 20.9727C27.4566 20.651 27.3958 20.4395 27.3958 20.3379C27.3958 20.084 27.5651 19.8639 27.9036 19.6777C28.2422 19.4915 28.6154 19.3477 29.0234 19.2461C29.4314 19.1445 29.8047 18.971 30.1432 18.7256C30.4818 18.4801 30.651 18.1712 30.651 17.7988C30.651 17.4772 30.4904 17.2106 30.1693 16.999C29.8481 16.7874 29.5139 16.6816 29.1667 16.6816C28.9583 16.6816 28.6806 16.7493 28.3333 16.8848C27.9861 17.0202 27.717 17.0879 27.526 17.0879C27.4566 17.0879 27.3524 17.071 27.2135 17.0371C27.3003 15.429 27.3438 14.4642 27.3438 14.1426C27.3438 12.8053 27.1962 11.8405 26.901 11.248C26.276 9.92773 25.3819 8.89941 24.2188 8.16309C23.0556 7.42676 21.7361 7.05859 20.2604 7.05859C16.8056 7.05859 14.4184 8.45508 13.099 11.248C12.8038 11.8405 12.6562 12.8053 12.6562 14.1426C12.6562 14.4642 12.6997 15.429 12.7865 17.0371C12.717 17.071 12.5955 17.0879 12.4219 17.0879C12.2135 17.0879 11.9358 17.0244 11.5885 16.8975C11.2413 16.7705 10.9809 16.707 10.8073 16.707C10.4427 16.707 10.1085 16.8086 9.80469 17.0117C9.50087 17.2148 9.34896 17.4857 9.34896 17.8242C9.34896 18.1797 9.51823 18.4801 9.85677 18.7256C10.1953 18.971 10.5686 19.1445 10.9766 19.2461C11.3845 19.3477 11.7578 19.4915 12.0964 19.6777C12.4349 19.8639 12.6042 20.084 12.6042 20.3379C12.6042 20.4395 12.5434 20.651 12.4219 20.9727C11.3108 23.3086 9.59201 24.722 7.26562 25.2129C6.88368 25.2975 6.69271 25.526 6.69271 25.8984C6.69271 26.6771 7.88194 27.2526 10.2604 27.625C10.2951 27.7096 10.3472 27.9297 10.4167 28.2852C10.4861 28.6406 10.5859 28.8988 10.7161 29.0596C10.8464 29.2204 11.0503 29.3008 11.3281 29.3008C11.5365 29.3008 11.862 29.2627 12.3047 29.1865C12.7474 29.1104 13.0903 29.0723 13.3333 29.0723C13.941 29.0723 14.5226 29.1992 15.0781 29.4531C15.6337 29.707 16.1024 29.9821 16.4844 30.2783C16.8663 30.5745 17.3655 30.8496 17.9818 31.1035C18.5981 31.3574 19.2622 31.4844 19.974 31.4844C20.7205 31.4844 21.4062 31.3574 22.0312 31.1035C22.6562 30.8496 23.1554 30.5745 23.5286 30.2783C23.9019 29.9821 24.3663 29.707 24.9219 29.4531C25.4774 29.1992 26.059 29.0723 26.6667 29.0723C26.9097 29.0723 27.2526 29.1061 27.6953 29.1738C28.138 29.2415 28.4722 29.2754 28.6979 29.2754C28.9757 29.2754 29.1753 29.1908 29.2969 29.0215C29.4184 28.8522 29.5139 28.5983 29.5833 28.2598C29.6528 27.9212 29.7049 27.7096 29.7396 27.625C32.1181 27.2526 33.3073 26.6771 33.3073 25.8984ZM40 19.5C40 23.0378 39.1059 26.3005 37.3177 29.2881C35.5295 32.2757 33.1033 34.6413 30.0391 36.3848C26.9748 38.1283 23.6285 39 20 39C16.3715 39 13.0252 38.1283 9.96094 36.3848C6.8967 34.6413 4.47049 32.2757 2.68229 29.2881C0.894097 26.3005 0 23.0378 0 19.5C0 15.9622 0.894097 12.6995 2.68229 9.71191C4.47049 6.72428 6.8967 4.35872 9.96094 2.61523C13.0252 0.871745 16.3715 0 20 0C23.6285 0 26.9748 0.871745 30.0391 2.61523C33.1033 4.35872 35.5295 6.72428 37.3177 9.71191C39.1059 12.6995 40 15.9622 40 19.5Z" fill="#FFD233"/>
                    </svg>     
                </div>           
            </div>
            <div class="payment">
                <div class="item">
                    <svg width="60" height="40" viewBox="0 0 60 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M51.4323 22.4479H47.8385C48.0816 21.8056 48.6545 20.2517 49.5573 17.7865L49.6354 17.5521C49.7049 17.3785 49.7917 17.1528 49.8958 16.875C50 16.5972 50.0781 16.3715 50.1302 16.1979L50.4427 17.6302L51.4323 22.4479ZM13.8281 20.7552L12.3177 13.0729C12.1267 12.1354 11.4757 11.6667 10.3646 11.6667H3.38542L3.33333 12.0052C8.73264 13.3767 12.2309 16.2934 13.8281 20.7552ZM18.4896 11.6667L14.2708 23.0729L13.8281 20.7552C13.3767 19.5399 12.6389 18.4158 11.6146 17.3828C10.5903 16.3498 9.45312 15.5816 8.20312 15.0781L11.7188 28.3594H16.276L23.0729 11.6667H18.4896ZM22.1094 28.3854H26.4323L29.1406 11.6667H24.8177L22.1094 28.3854ZM42.1094 12.0833C40.9115 11.6146 39.6181 11.3802 38.2292 11.3802C36.0938 11.3802 34.349 11.8924 32.9948 12.9167C31.6406 13.941 30.9549 15.2691 30.9375 16.901C30.9201 18.6719 32.1788 20.1823 34.7135 21.4323C35.5469 21.8316 36.1285 22.1875 36.4583 22.5C36.7882 22.8125 36.9531 23.151 36.9531 23.5156C36.9531 24.0365 36.6927 24.4358 36.1719 24.7135C35.651 24.9913 35.0521 25.1302 34.375 25.1302C32.8819 25.1302 31.5278 24.8438 30.3125 24.2708L29.7396 23.9844L29.1406 27.7344C30.4253 28.3247 32.0312 28.6198 33.9583 28.6198C36.2153 28.6372 38.0252 28.125 39.388 27.0833C40.7509 26.0417 41.4497 24.6528 41.4844 22.9167C41.4844 21.0764 40.2691 19.566 37.8385 18.3854C36.9878 17.9514 36.3715 17.5868 35.9896 17.2917C35.6076 16.9965 35.4167 16.6667 35.4167 16.3021C35.4167 15.9201 35.6293 15.5859 36.0547 15.2995C36.48 15.013 37.092 14.8698 37.8906 14.8698C39.1059 14.8524 40.1823 15.0608 41.1198 15.4948L41.5104 15.7031L42.1094 12.0833ZM53.1771 11.6667H49.8438C48.7153 11.6667 47.9601 12.1354 47.5781 13.0729L41.1719 28.3854H45.7031L46.6146 25.8854H52.1354C52.2222 26.2674 52.3958 27.1007 52.6562 28.3854H56.6667L53.1771 11.6667ZM60 3.33333V36.6667C60 37.5694 59.6701 38.3507 59.0104 39.0104C58.3507 39.6701 57.5694 40 56.6667 40H3.33333C2.43056 40 1.64931 39.6701 0.989583 39.0104C0.329861 38.3507 0 37.5694 0 36.6667V3.33333C0 2.43056 0.329861 1.64931 0.989583 0.989583C1.64931 0.329861 2.43056 0 3.33333 0H56.6667C57.5694 0 58.3507 0.329861 59.0104 0.989583C59.6701 1.64931 60 2.43056 60 3.33333Z" fill="#545454"/>
                    </svg>
                </div>

                <div class="item">
                    <svg width="60" height="40" viewBox="0 0 60 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M29.1406 5.54688C26.9184 4.07118 24.4792 3.33333 21.8229 3.33333C20.0347 3.33333 18.3203 3.6849 16.6797 4.38802C15.0391 5.09115 13.6285 6.03299 12.4479 7.21354C11.2674 8.3941 10.3255 9.80035 9.6224 11.4323C8.91927 13.0642 8.56771 14.7743 8.56771 16.5625C8.56771 18.3681 8.91927 20.0868 9.6224 21.7188C10.3255 23.3507 11.2674 24.7569 12.4479 25.9375C13.6285 27.1181 15.0347 28.0599 16.6667 28.763C18.2986 29.4661 20.0174 29.8177 21.8229 29.8177C24.4792 29.8177 26.9184 29.0799 29.1406 27.6042C26.8663 25.7465 25.3212 23.4418 24.5052 20.6901C23.6892 17.9384 23.6936 15.191 24.5182 12.4479C25.3429 9.70486 26.8837 7.40451 29.1406 5.54688ZM30 6.17188C27.8125 7.89062 26.3194 10.0564 25.5208 12.6693C24.7222 15.2821 24.7179 17.8906 25.5078 20.4948C26.2977 23.099 27.7951 25.2604 30 26.9792C32.2049 25.2604 33.7023 23.099 34.4922 20.4948C35.2821 17.8906 35.2778 15.2821 34.4792 12.6693C33.6806 10.0564 32.1875 7.89062 30 6.17188ZM30.8594 5.54688C33.1163 7.40451 34.6571 9.7092 35.4818 12.4609C36.3064 15.2127 36.3108 17.9644 35.4948 20.7161C34.6788 23.4679 33.1337 25.7639 30.8594 27.6042C33.0816 29.0799 35.5208 29.8177 38.1771 29.8177C39.9826 29.8177 41.7014 29.4661 43.3333 28.763C44.9653 28.0599 46.3715 27.1181 47.5521 25.9375C48.7326 24.7569 49.6745 23.3507 50.3776 21.7188C51.0807 20.0868 51.4323 18.3681 51.4323 16.5625C51.4323 14.7743 51.0807 13.0642 50.3776 11.4323C49.6745 9.80035 48.7326 8.3941 47.5521 7.21354C46.3715 6.03299 44.9609 5.09115 43.3203 4.38802C41.6797 3.6849 39.9653 3.33333 38.1771 3.33333C35.5208 3.33333 33.0816 4.07118 30.8594 5.54688ZM50.1562 24.349H50.3385V24.2708H49.8958V24.349H50.0781V24.7917H50.1562V24.349ZM50.9115 24.7917H51.0156V24.2708H50.8854L50.7292 24.6094L50.5729 24.2708H50.4427V24.7917H50.5208V24.401L50.6771 24.7396H50.7812L50.9115 24.401V24.7917ZM50.7031 36.25V36.3021H50.5729V36.224H50.7031V36.25ZM50.7031 36.4844H50.7812L50.6771 36.3542H50.7292L50.7552 36.3281C50.7726 36.3108 50.7812 36.2847 50.7812 36.25C50.7812 36.2153 50.7726 36.1892 50.7552 36.1719L50.7292 36.1458H50.4948V36.4844H50.5729V36.3542H50.599L50.7031 36.4844ZM17.8385 34.7135C17.8385 34.3837 17.934 34.1146 18.125 33.9062C18.316 33.6979 18.5764 33.5938 18.9062 33.5938C19.2188 33.5938 19.4705 33.7023 19.6615 33.9193C19.8524 34.1363 19.9479 34.401 19.9479 34.7135C19.9479 35.0434 19.8524 35.3125 19.6615 35.5208C19.4705 35.7292 19.2188 35.8333 18.9062 35.8333C18.5764 35.8333 18.316 35.7292 18.125 35.5208C17.934 35.3125 17.8385 35.0434 17.8385 34.7135ZM30.1562 33.5677C30.6771 33.5677 30.9809 33.8455 31.0677 34.401H29.2448C29.3316 33.8455 29.6354 33.5677 30.1562 33.5677ZM39.4271 34.7135C39.4271 34.3837 39.5226 34.1146 39.7135 33.9062C39.9045 33.6979 40.1562 33.5938 40.4688 33.5938C40.7812 33.5938 41.0373 33.7023 41.237 33.9193C41.4366 34.1363 41.5365 34.401 41.5365 34.7135C41.5365 35.0434 41.441 35.3125 41.25 35.5208C41.059 35.7292 40.7986 35.8333 40.4688 35.8333C40.1562 35.8333 39.9045 35.7292 39.7135 35.5208C39.5226 35.3125 39.4271 35.0434 39.4271 34.7135ZM46.5104 34.7135C46.5104 34.401 46.6102 34.1363 46.8099 33.9193C47.0095 33.7023 47.2656 33.5938 47.5781 33.5938C47.8906 33.5938 48.1467 33.7023 48.3464 33.9193C48.546 34.1363 48.6458 34.401 48.6458 34.7135C48.6458 35.0434 48.546 35.3125 48.3464 35.5208C48.1467 35.7292 47.8906 35.8333 47.5781 35.8333C47.2656 35.8333 47.0095 35.7248 46.8099 35.5078C46.6102 35.2908 46.5104 35.026 46.5104 34.7135ZM50.625 36.5885C50.5903 36.5885 50.5556 36.5799 50.5208 36.5625C50.5035 36.5625 50.4774 36.5451 50.4427 36.5104C50.408 36.4757 50.3906 36.4497 50.3906 36.4323C50.3733 36.3976 50.3646 36.3628 50.3646 36.3281C50.3646 36.276 50.3733 36.2413 50.3906 36.224C50.3906 36.1892 50.408 36.1545 50.4427 36.1198L50.4688 36.0938C50.5035 36.0938 50.5208 36.0851 50.5208 36.0677C50.5556 36.0503 50.5903 36.0417 50.625 36.0417C50.6771 36.0417 50.7118 36.0503 50.7292 36.0677L50.8333 36.1198L50.8854 36.224V36.25C50.9028 36.2847 50.9115 36.3108 50.9115 36.3281L50.8854 36.3542V36.4323L50.8594 36.4583L50.8333 36.5104C50.7986 36.5451 50.7639 36.5625 50.7292 36.5625C50.7118 36.5799 50.6771 36.5885 50.625 36.5885ZM15.599 36.4844H16.3802V34.2708C16.3802 33.8542 16.2543 33.52 16.0026 33.2682C15.7509 33.0165 15.408 32.8819 14.974 32.8646C14.4184 32.8646 14.0104 33.0729 13.75 33.4896C13.5069 33.0729 13.1163 32.8646 12.5781 32.8646C12.1615 32.8646 11.8229 33.0382 11.5625 33.3854V32.9688H10.7812V36.4844H11.5625V34.5312C11.5625 33.9062 11.849 33.5938 12.4219 33.5938C12.9427 33.5938 13.2031 33.9062 13.2031 34.5312V36.4844H13.9583V34.5312C13.9583 33.9062 14.2448 33.5938 14.8177 33.5938C15.3385 33.5938 15.599 33.9062 15.599 34.5312V36.4844ZM19.9219 36.4844H20.6771V32.9688H19.9219V33.3854C19.6267 33.0382 19.2535 32.8646 18.8021 32.8646C18.2986 32.8646 17.8819 33.0382 17.5521 33.3854C17.2222 33.7326 17.0573 34.1753 17.0573 34.7135C17.0573 35.2517 17.2222 35.6944 17.5521 36.0417C17.8819 36.3889 18.2986 36.5625 18.8021 36.5625C19.2882 36.5625 19.6615 36.3889 19.9219 36.0417V36.4844ZM24.5573 35.4167C24.5573 34.8264 24.1493 34.4792 23.3333 34.375L22.9688 34.3229C22.5694 34.2535 22.3698 34.1319 22.3698 33.9583C22.3698 33.6979 22.5868 33.5677 23.0208 33.5677C23.4201 33.5677 23.7934 33.6632 24.1406 33.8542L24.4531 33.2292C24.0712 32.9861 23.5938 32.8646 23.0208 32.8646C22.5694 32.8646 22.2135 32.9688 21.9531 33.1771C21.6927 33.3854 21.5625 33.6632 21.5625 34.0104C21.5625 34.5833 21.9705 34.9219 22.7865 35.026L23.125 35.0781C23.5417 35.1476 23.75 35.2691 23.75 35.4427C23.75 35.7378 23.4809 35.8854 22.9427 35.8854C22.5087 35.8854 22.1181 35.7639 21.7708 35.5208L21.4323 36.1198C21.8663 36.4149 22.3698 36.5625 22.9427 36.5625C23.4462 36.5625 23.8411 36.4583 24.1276 36.25C24.4141 36.0417 24.5573 35.7639 24.5573 35.4167ZM27.9427 36.3021L27.7344 35.651C27.5087 35.7726 27.283 35.8333 27.0573 35.8333C26.7274 35.8333 26.5625 35.6424 26.5625 35.2604V33.6719H27.8125V32.9688H26.5625V31.901H25.7812V32.9688H25.0521V33.6719H25.7812V35.2604C25.7812 36.1285 26.1892 36.5625 27.0052 36.5625C27.3698 36.5625 27.6823 36.4757 27.9427 36.3021ZM30.1823 32.8646C29.6788 32.8646 29.2622 33.0382 28.9323 33.3854C28.6024 33.7326 28.4375 34.1753 28.4375 34.7135C28.4375 35.2691 28.6068 35.7161 28.9453 36.0547C29.2839 36.3932 29.7135 36.5625 30.2344 36.5625C30.8073 36.5625 31.2847 36.3976 31.6667 36.0677L31.3021 35.4948C30.9896 35.7552 30.651 35.8854 30.2865 35.8854C29.6962 35.8854 29.3403 35.599 29.2188 35.026H31.849V34.7135C31.849 34.158 31.6927 33.7109 31.3802 33.3724C31.0677 33.0339 30.6684 32.8646 30.1823 32.8646ZM34.3229 32.8646C33.9236 32.8646 33.6198 33.0382 33.4115 33.3854V32.9688H32.6302V36.4844H33.4115V34.5052C33.4115 33.8976 33.6632 33.5938 34.1667 33.5938C34.3403 33.5938 34.4965 33.6285 34.6354 33.6979L34.8698 32.9688C34.7135 32.8993 34.5312 32.8646 34.3229 32.8646ZM35.1042 34.7135C35.1042 35.2517 35.2734 35.6944 35.612 36.0417C35.9505 36.3889 36.4062 36.5625 36.9792 36.5625C37.4826 36.5625 37.8993 36.4236 38.2292 36.1458L37.8646 35.5208C37.5521 35.7465 37.2483 35.8507 36.9531 35.8333C36.6406 35.8333 36.3845 35.7292 36.1849 35.5208C35.9852 35.3125 35.8854 35.0434 35.8854 34.7135C35.8854 34.3837 35.9852 34.1146 36.1849 33.9062C36.3845 33.6979 36.6406 33.5938 36.9531 33.5938C37.283 33.5938 37.5868 33.6979 37.8646 33.9062L38.2292 33.2812C37.8819 33.0035 37.4653 32.8646 36.9792 32.8646C36.4062 32.8646 35.9505 33.0382 35.612 33.3854C35.2734 33.7326 35.1042 34.1753 35.1042 34.7135ZM41.4844 36.4844H42.2656V32.9688H41.4844V33.3854C41.224 33.0382 40.8594 32.8646 40.3906 32.8646C39.8872 32.8646 39.4661 33.0382 39.1276 33.3854C38.7891 33.7326 38.6198 34.1753 38.6198 34.7135C38.6198 35.2517 38.7891 35.6944 39.1276 36.0417C39.4661 36.3889 39.8872 36.5625 40.3906 36.5625C40.8767 36.5625 41.2413 36.3889 41.4844 36.0417V36.4844ZM44.9479 32.8646C44.5486 32.8646 44.2448 33.0382 44.0365 33.3854V32.9688H43.2812V36.4844H44.0365V34.5052C44.0365 33.8976 44.2882 33.5938 44.7917 33.5938C44.9653 33.5938 45.1215 33.6285 45.2604 33.6979L45.4948 32.9688C45.3559 32.8993 45.1736 32.8646 44.9479 32.8646ZM48.5938 36.4844H49.349V31.5365H48.5938V33.3854C48.3333 33.0382 47.9601 32.8646 47.474 32.8646C46.9878 32.8646 46.5755 33.0425 46.237 33.3984C45.8984 33.7543 45.7292 34.1927 45.7292 34.7135C45.7292 35.2344 45.8984 35.6727 46.237 36.0286C46.5755 36.3845 46.9878 36.5625 47.474 36.5625C47.9774 36.5625 48.3507 36.3889 48.5938 36.0417V36.4844ZM50.625 35.9635L50.5729 35.9896H50.4948C50.4601 36.0069 50.4253 36.033 50.3906 36.0677C50.3385 36.0851 50.3125 36.1198 50.3125 36.1719C50.2951 36.2066 50.2865 36.2587 50.2865 36.3281C50.2865 36.3802 50.2951 36.4236 50.3125 36.4583C50.3125 36.4931 50.3385 36.5278 50.3906 36.5625C50.4253 36.5972 50.4601 36.6233 50.4948 36.6406C50.5295 36.658 50.5729 36.6667 50.625 36.6667C50.6944 36.6667 50.7465 36.658 50.7812 36.6406C50.7812 36.6233 50.7986 36.6059 50.8333 36.5885L50.8854 36.5625C50.9028 36.5451 50.9288 36.5104 50.9635 36.4583C50.9809 36.4236 50.9896 36.3802 50.9896 36.3281C50.9896 36.2587 50.9809 36.2066 50.9635 36.1719C50.9462 36.1545 50.9201 36.1198 50.8854 36.0677C50.8854 36.0503 50.8681 36.033 50.8333 36.0156L50.7812 35.9896C50.7639 35.9896 50.7378 35.9852 50.7031 35.9766C50.6684 35.9679 50.6424 35.9635 50.625 35.9635ZM60 3.33333V36.6667C60 37.5694 59.6701 38.3507 59.0104 39.0104C58.3507 39.6701 57.5694 40 56.6667 40H3.33333C2.43056 40 1.64931 39.6701 0.989583 39.0104C0.329861 38.3507 0 37.5694 0 36.6667V3.33333C0 2.43056 0.329861 1.64931 0.989583 0.989583C1.64931 0.329861 2.43056 0 3.33333 0H56.6667C57.5694 0 58.3507 0.329861 59.0104 0.989583C59.6701 1.64931 60 2.43056 60 3.33333Z" fill="#545454"/>
                    </svg>
                </div>

                <div class="item">
                    <svg width="60" height="40" viewBox="0 0 60 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.401 20.2604C19.401 20.9028 19.1797 21.4366 18.737 21.862C18.2943 22.2873 17.7517 22.5 17.1094 22.5C16.6059 22.5 16.2023 22.3611 15.8984 22.0833C15.5946 21.8056 15.4427 21.4236 15.4427 20.9375C15.4427 20.2951 15.6597 19.7526 16.0938 19.3099C16.5278 18.8672 17.066 18.6458 17.7083 18.6458C18.1944 18.6458 18.5981 18.7891 18.9193 19.0755C19.2405 19.362 19.401 19.7569 19.401 20.2604ZM39.8438 16.3802C39.8438 17.1094 39.6528 17.6042 39.2708 17.8646C38.8889 18.125 38.316 18.2552 37.5521 18.2552L36.7188 18.2812L37.1615 15.4948C37.1962 15.3038 37.309 15.2083 37.5 15.2083H37.9688C38.3507 15.2083 38.6545 15.2257 38.8802 15.2604C39.1059 15.2951 39.3229 15.4036 39.5312 15.5859C39.7396 15.7682 39.8438 16.033 39.8438 16.3802ZM48.9844 20.2604C48.9844 20.8854 48.763 21.4149 48.3203 21.849C47.8776 22.283 47.3438 22.5 46.7188 22.5C46.2153 22.5 45.8073 22.3611 45.4948 22.0833C45.1823 21.8056 45.026 21.4236 45.026 20.9375C45.026 20.2951 45.2431 19.7526 45.6771 19.3099C46.1111 18.8672 46.6493 18.6458 47.2917 18.6458C47.7778 18.6458 48.1814 18.7891 48.5026 19.0755C48.8238 19.362 48.9844 19.7569 48.9844 20.2604ZM13.3594 15.8073C13.3594 14.783 13.0252 14.0408 12.3568 13.5807C11.6884 13.1207 10.816 12.8906 9.73958 12.8906H5.57292C5.24306 12.8906 5.06076 13.0556 5.02604 13.3854L3.33333 24.0104C3.31597 24.1146 3.34201 24.2101 3.41146 24.2969C3.4809 24.3837 3.56771 24.4271 3.67188 24.4271H5.65104C5.99826 24.4271 6.18924 24.2622 6.22396 23.9323L6.69271 21.0677C6.71007 20.9288 6.77083 20.816 6.875 20.7292C6.97917 20.6424 7.10938 20.5859 7.26562 20.5599C7.42188 20.5339 7.56944 20.5208 7.70833 20.5208C7.84722 20.5208 8.01215 20.5295 8.20312 20.5469C8.3941 20.5642 8.51562 20.5729 8.56771 20.5729C10.0608 20.5729 11.2326 20.1519 12.0833 19.3099C12.934 18.4679 13.3594 17.3003 13.3594 15.8073ZM21.4062 23.9323L22.474 17.1354C22.4913 17.0312 22.4653 16.9358 22.3958 16.849C22.3264 16.7622 22.2396 16.7188 22.1354 16.7188H20.1562C19.9132 16.7188 19.7656 17.0052 19.7135 17.5781C19.2448 16.8837 18.4201 16.5365 17.2396 16.5365C15.9896 16.5365 14.9262 17.0052 14.0495 17.9427C13.1727 18.8802 12.7344 19.9826 12.7344 21.25C12.7344 22.2743 13.0339 23.0903 13.6328 23.6979C14.2318 24.3056 15.0347 24.6094 16.0417 24.6094C16.5278 24.6094 17.0312 24.5052 17.5521 24.2969C18.0729 24.0885 18.4896 23.8108 18.8021 23.4635C18.7326 23.6719 18.6979 23.8542 18.6979 24.0104C18.6979 24.2882 18.8108 24.4271 19.0365 24.4271H20.8333C21.1632 24.4271 21.3542 24.2622 21.4062 23.9323ZM33.0469 17.0833C33.0469 16.9965 33.0122 16.9141 32.9427 16.8359C32.8733 16.7578 32.7951 16.7188 32.7083 16.7188H30.7031C30.5122 16.7188 30.3559 16.8056 30.2344 16.9792L27.474 21.0417L26.3281 17.1354C26.2413 16.8576 26.0503 16.7188 25.7552 16.7188H23.8021C23.7153 16.7188 23.6372 16.7578 23.5677 16.8359C23.4983 16.9141 23.4635 16.9965 23.4635 17.0833C23.4635 17.1181 23.6328 17.6302 23.9714 18.6198C24.3099 19.6094 24.6745 20.6771 25.0651 21.8229C25.4557 22.9688 25.6597 23.5764 25.6771 23.6458C24.2535 25.5903 23.5417 26.6319 23.5417 26.7708C23.5417 26.9965 23.6545 27.1094 23.8802 27.1094H25.8854C26.0764 27.1094 26.2326 27.0226 26.3542 26.849L32.9948 17.2656C33.0295 17.2309 33.0469 17.1701 33.0469 17.0833ZM42.9427 15.8073C42.9427 14.783 42.6085 14.0408 41.9401 13.5807C41.2717 13.1207 40.3993 12.8906 39.3229 12.8906H35.1823C34.8351 12.8906 34.6441 13.0556 34.6094 13.3854L32.9167 24.0104C32.8993 24.1146 32.9253 24.2101 32.9948 24.2969C33.0642 24.3837 33.151 24.4271 33.2552 24.4271H35.3906C35.599 24.4271 35.7378 24.3142 35.8073 24.0885L36.276 21.0677C36.2934 20.9288 36.3542 20.816 36.4583 20.7292C36.5625 20.6424 36.6927 20.5859 36.849 20.5599C37.0052 20.5339 37.1528 20.5208 37.2917 20.5208C37.4306 20.5208 37.5955 20.5295 37.7865 20.5469C37.9774 20.5642 38.099 20.5729 38.151 20.5729C39.6441 20.5729 40.816 20.1519 41.6667 19.3099C42.5174 18.4679 42.9427 17.3003 42.9427 15.8073ZM50.9896 23.9323L52.0573 17.1354C52.0746 17.0312 52.0486 16.9358 51.9792 16.849C51.9097 16.7622 51.8229 16.7188 51.7188 16.7188H49.7396C49.4965 16.7188 49.349 17.0052 49.2969 17.5781C48.8455 16.8837 48.0208 16.5365 46.8229 16.5365C45.5729 16.5365 44.5095 17.0052 43.6328 17.9427C42.7561 18.8802 42.3177 19.9826 42.3177 21.25C42.3177 22.2743 42.6172 23.0903 43.2161 23.6979C43.8151 24.3056 44.6181 24.6094 45.625 24.6094C46.1285 24.6094 46.6406 24.5052 47.1615 24.2969C47.6823 24.0885 48.0903 23.8108 48.3854 23.4635C48.3854 23.4809 48.3681 23.559 48.3333 23.6979C48.2986 23.8368 48.2812 23.941 48.2812 24.0104C48.2812 24.2882 48.3941 24.4271 48.6198 24.4271H50.4167C50.7465 24.4271 50.9375 24.2622 50.9896 23.9323ZM56.6667 13.2812V13.2552C56.6667 13.0122 56.5538 12.8906 56.3281 12.8906H54.401C54.2101 12.8906 54.0972 12.9861 54.0625 13.1771L52.3698 24.0104L52.3438 24.0625C52.3438 24.1493 52.3785 24.2318 52.4479 24.3099C52.5174 24.388 52.6042 24.4271 52.7083 24.4271H54.4271C54.7569 24.4271 54.9392 24.2622 54.974 23.9323L56.6667 13.2812ZM10.2083 16.7708C10.1215 17.3785 9.89583 17.7778 9.53125 17.9688C9.16667 18.1597 8.64583 18.2552 7.96875 18.2552L7.10938 18.2812L7.55208 15.4948C7.58681 15.3038 7.69965 15.2083 7.89062 15.2083H8.38542C9.07986 15.2083 9.58333 15.3082 9.89583 15.5078C10.2083 15.7075 10.3125 16.1285 10.2083 16.7708ZM60 3.33333V36.6667C60 37.5694 59.6701 38.3507 59.0104 39.0104C58.3507 39.6701 57.5694 40 56.6667 40H3.33333C2.43056 40 1.64931 39.6701 0.989583 39.0104C0.329861 38.3507 0 37.5694 0 36.6667V3.33333C0 2.43056 0.329861 1.64931 0.989583 0.989583C1.64931 0.329861 2.43056 0 3.33333 0H56.6667C57.5694 0 58.3507 0.329861 59.0104 0.989583C59.6701 1.64931 60 2.43056 60 3.33333Z" fill="#545454"/>
                    </svg>    
                </div>

                <div class="item">
                    <svg width="60" height="40" viewBox="0 0 60 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_20:88)">
                        <path d="M56 40H4C2.93913 40 1.92172 39.5785 1.17157 38.8284C0.421427 38.0782 0 37.0608 0 36L0 19.1733H2.88167L3.53167 17.6H4.98667L5.635 19.1666H11.305V17.975L11.8117 19.175H14.755L15.2617 17.955V19.1716H29.35V16.5983H29.6167C29.8067 16.605 29.8617 16.6216 29.8617 16.9383V19.175H37.15V18.5766C37.895 18.955 38.7733 19.1766 39.705 19.1766L39.8633 19.175H39.855H42.9217L43.5783 17.6083H45.0333L45.675 19.175H51.585V17.685L52.4783 19.175H57.205V9.33496H52.5267V10.4966L51.8717 9.33496H47.0617V10.4966L46.46 9.33496H39.965C38.9809 9.28523 38.0005 9.48775 37.1167 9.9233L37.1517 9.9083V9.33496H32.6717V9.9083C32.1294 9.48088 31.4445 9.27643 30.7567 9.33663H30.7667H14.395L13.2967 11.8783L12.1683 9.33663H7.01167V10.4983L6.44333 9.33663H2.04333L0.005 14.0033V4.0033C0.005 2.94243 0.426427 1.92501 1.17657 1.17487C1.92672 0.424723 2.94413 0.0032959 4.005 0.0032959H56.005C57.0659 0.0032959 58.0833 0.424723 58.8334 1.17487C59.5836 1.92501 60.005 2.94243 60.005 4.0033V21.47H56.8833C56.8333 21.4666 56.7733 21.4666 56.715 21.4666C55.9917 21.4666 55.32 21.6833 54.76 22.055L54.7733 22.0466V21.47H50.1567C49.4354 21.4301 48.7218 21.6351 48.1317 22.0516L48.1417 22.045V21.4683H39.8983V22.045C39.2235 21.6644 38.4614 21.4657 37.6867 21.4683H37.6217H37.625H32.1867V22.045C31.4762 21.5898 30.6331 21.3873 29.7933 21.47L29.8083 21.4683H23.7233L22.33 22.975L21.0267 21.4683H11.9367V31.315H20.8567L22.2917 29.785L23.6433 31.315H29.1417V29.01H29.9083C30.6455 29.0388 31.3807 28.9157 32.0683 28.6483L32.0317 28.6616V31.3183H36.565V28.7533H36.7833C37.06 28.7533 37.0883 28.7633 37.0883 29.0433V31.32H50.865L51.0333 31.3233C51.8233 31.3233 52.56 31.0866 53.1733 30.6816L53.1583 30.69V31.32H57.5283L57.7367 31.3233C58.555 31.3233 59.3333 31.155 60.04 30.85L60.0017 30.865V36.0016C60.0017 37.0625 59.5802 38.0799 58.8301 38.8301C58.0799 39.5802 57.0625 40.0016 56.0017 40.0016L56 40ZM35.175 29.935H33.4783V22.8766H37.3717C38.0748 22.8115 38.7829 22.9297 39.4267 23.22L39.4 23.21C39.9217 23.4966 40.27 24.0433 40.27 24.67L40.2667 24.7816V24.7766L40.2683 24.84C40.2683 25.65 39.78 26.3466 39.08 26.65L39.0667 26.655C39.4017 26.775 39.6817 26.98 39.89 27.245L39.8933 27.2483C40.1286 27.6378 40.2272 28.0947 40.1733 28.5466L40.175 28.5366V29.9333H38.4817V29.05C38.5618 28.569 38.4653 28.0753 38.21 27.66L38.215 27.6683C38.0391 27.5347 37.8379 27.4383 37.6236 27.3847C37.4093 27.3311 37.1864 27.3216 36.9683 27.3566L36.9783 27.355H35.175V29.9333V29.935ZM35.175 24.335V25.92H37.225C37.5145 25.9467 37.8058 25.8949 38.0683 25.77L38.0583 25.775C38.1656 25.7057 38.2538 25.6107 38.3149 25.4986C38.3761 25.3866 38.4082 25.261 38.4083 25.1333L38.4067 25.095V25.0966C38.4149 24.9692 38.3869 24.8421 38.3258 24.73C38.2648 24.6179 38.1732 24.5254 38.0617 24.4633L38.0583 24.4616C37.8054 24.3485 37.5275 24.3026 37.2517 24.3283H37.2583L35.175 24.335ZM20.1333 29.9333H13.455V22.8766H20.2383L22.3133 25.19L24.4583 22.8766H29.8467C31.76 22.8766 32.69 23.6383 32.69 25.2016C32.69 26.7933 31.7283 27.5666 29.7567 27.5666H27.6483V29.9316H24.37L22.2933 27.6L20.135 29.9333H20.1333ZM25.9683 23.6333L23.3783 26.4166L25.9683 29.29V23.6333ZM15.1367 27.0583V28.4616H19.2833L21.2 26.3916L19.3567 24.335H15.135V25.6183H18.8383V27.0566L15.1367 27.0583ZM27.6483 24.3366V26.1333H29.8267C30.4933 26.1333 30.8767 25.7933 30.8767 25.2C30.8767 24.6333 30.52 24.335 29.845 24.335L27.6483 24.3366ZM57.7117 29.9366H54.455V28.42H57.6983C57.941 28.4534 58.1871 28.3899 58.3833 28.2433L58.3817 28.245C58.4443 28.1869 58.4942 28.1165 58.5284 28.0382C58.5625 27.9599 58.5801 27.8754 58.58 27.79V27.785V27.7633C58.5801 27.6789 58.5619 27.5956 58.5264 27.519C58.491 27.4424 58.4394 27.3745 58.375 27.32C58.2025 27.1953 57.9898 27.1394 57.7783 27.1633H57.7817L57.47 27.1533C55.9467 27.1133 54.2217 27.0666 54.2217 24.9783C54.2217 23.9616 54.8583 22.8766 56.64 22.8766H60.0017V24.38H56.9267C56.6891 24.3534 56.4492 24.4011 56.24 24.5166L56.2467 24.5133C56.1644 24.5675 56.0982 24.6428 56.0551 24.7313C56.012 24.8199 55.9935 24.9185 56.0017 25.0166V25.015V25.0333C56.0017 25.1456 56.0371 25.255 56.1029 25.346C56.1688 25.437 56.2617 25.5049 56.3683 25.54L56.3717 25.5416C56.583 25.6068 56.8042 25.6339 57.025 25.6216H57.02L57.935 25.645C58.6247 25.5761 59.3138 25.7815 59.8533 26.2166L59.8483 26.2133C59.8983 26.2533 59.9417 26.2966 59.98 26.345L59.9817 26.3466L60.0017 29.0333C59.7214 29.3608 59.3648 29.6144 58.9635 29.7716C58.5621 29.9288 58.1282 29.9849 57.7 29.935L57.7117 29.9366ZM51.13 29.9366H47.8433V28.42H51.1133C51.358 28.452 51.6057 28.3887 51.805 28.2433L51.8017 28.245C51.8639 28.1867 51.9135 28.1162 51.9473 28.0379C51.9811 27.9596 51.9985 27.8752 51.9983 27.79V27.785V27.7733C51.9982 27.6875 51.9799 27.6027 51.9446 27.5246C51.9092 27.4464 51.8577 27.3767 51.7933 27.32C51.6178 27.1952 51.4024 27.1394 51.1883 27.1633H51.1917L50.8817 27.1533C49.3633 27.1133 47.64 27.0666 47.64 24.9783C47.64 23.9616 48.2733 22.8766 50.0517 22.8766H53.4317V24.38H50.3383C50.1024 24.3537 49.8642 24.4014 49.6567 24.5166L49.6633 24.5133C49.5758 24.5735 49.5061 24.6563 49.4617 24.7529C49.4173 24.8494 49.3999 24.9562 49.4111 25.0619C49.4224 25.1676 49.462 25.2682 49.5258 25.3533C49.5895 25.4383 49.675 25.5045 49.7733 25.545L49.7767 25.5466C49.9907 25.6123 50.2148 25.6394 50.4383 25.6266H50.4333L51.3417 25.65C52.035 25.5832 52.7272 25.7888 53.2717 26.2233L53.2667 26.2183C53.4498 26.4202 53.5891 26.6579 53.6757 26.9164C53.7624 27.1748 53.7945 27.4485 53.77 27.72V27.7116C53.775 29.1833 52.8833 29.9333 51.125 29.9333L51.13 29.9366ZM46.8333 29.9366H41.2V22.875H46.8283V24.3333H42.8833V25.6166H46.7367V27.055H42.8833V28.4583L46.8333 28.465V29.9316V29.9366ZM50.1167 17.7933H46.6817L46.025 16.22H42.5217L41.885 17.7933H39.9117C39.0255 17.84 38.1528 17.5608 37.4583 17.0083L37.4667 17.0133C37.1367 16.6492 36.8863 16.2203 36.7313 15.7539C36.5764 15.2876 36.5203 14.7942 36.5667 14.305L36.565 14.3183C36.5221 13.8201 36.5809 13.3184 36.7379 12.8436C36.8949 12.3689 37.1468 11.931 37.4783 11.5566L37.475 11.56C37.825 11.2539 38.2342 11.0232 38.6772 10.8821C39.1202 10.7411 39.5875 10.6927 40.05 10.74L40.0367 10.7383H41.67V12.2433H40.07C39.8359 12.2131 39.598 12.235 39.3733 12.3073C39.1486 12.3796 38.9426 12.5006 38.77 12.6616L38.7717 12.66C38.4153 13.1163 38.2423 13.6893 38.2867 14.2666V14.2583C38.2336 14.8514 38.4002 15.4434 38.755 15.9216L38.75 15.915C39.0813 16.1857 39.5054 16.3161 39.9317 16.2783H39.925H40.6817L43.0667 10.7283H45.6L48.455 17.395V10.7283H51.0233L53.9867 15.6416V10.7283H55.72V17.7816H53.3133L50.1133 12.485V17.7816L50.1167 17.7933ZM44.285 11.93L43.1233 14.7433H45.4517L44.285 11.93ZM27.9533 17.79H26.2667V10.7333H30.1467C30.8549 10.6598 31.5699 10.7802 32.215 11.0816L32.19 11.0716C32.4494 11.2151 32.6656 11.4254 32.8163 11.6806C32.9669 11.9359 33.0465 12.2269 33.0467 12.5233L33.0433 12.64V12.635V12.6866C33.0435 13.0716 32.9325 13.4483 32.7238 13.7718C32.5151 14.0952 32.2175 14.3515 31.8667 14.51L31.8533 14.515C32.1883 14.6416 32.47 14.845 32.685 15.105L32.6883 15.1083C32.9261 15.4993 33.0243 15.9593 32.9667 16.4133L32.9683 16.4033V17.7883H31.2667L31.26 16.8983V16.765C31.3206 16.3298 31.2243 15.8873 30.9883 15.5166L30.9933 15.525C30.8168 15.3953 30.6163 15.3019 30.4035 15.2501C30.1907 15.1983 29.9697 15.1892 29.7533 15.2233L29.7633 15.2216H27.955V17.7883L27.9533 17.79ZM27.9533 12.2016V13.7683H30C30.2891 13.7997 30.5812 13.7476 30.8417 13.6183L30.8333 13.6216C30.9401 13.5567 31.0284 13.4655 31.0897 13.3566C31.151 13.2477 31.1832 13.1249 31.1833 13L31.1817 12.9533V12.955C31.1901 12.8283 31.1614 12.702 31.0989 12.5915C31.0364 12.481 30.9429 12.3913 30.83 12.3333L30.8267 12.3316C30.573 12.2228 30.2968 12.1771 30.0217 12.1983H30.0267L27.9533 12.2016ZM10.0933 17.79H6.66667L6.01833 16.2166H2.505L1.85167 17.79H0.0183333L3.04 10.7333H5.545L8.41333 17.4116V10.7333H11.165L13.3717 15.5183L15.4 10.7333H18.2083V17.7866H16.475L16.4717 12.2666L14.0267 17.7883H12.5467L10.095 12.2583V17.7883L10.0933 17.79ZM4.25333 11.93L3.105 14.7433H5.40833L4.25333 11.93ZM35.7333 17.7883H34.0133V10.7333H35.735V17.7866L35.7333 17.7883ZM25.09 17.7883H19.4667V10.7333H25.1V12.2H21.1533V13.4716H25.005V14.92H21.15V16.33H25.0967V17.7866L25.09 17.7883Z" fill="#545454"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_20:88">
                        <rect width="60" height="40" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>     
                </div>                               
            </div>
        </div>
        <hr id="no-margin-bot">
        <div class="contact">
            <div class="contact-item">
                <h6>HELP AND INFORMATION</h6>                            
                <a href=""><p>Help</p></a>
                <a href=""><p>Track order</p></a>
                <a href=""><p>Delivery and returns</p></a>
            </div>
            <div class="contact-item">
                <h6>ABOUT US</h6>                            
                <a href=""><p>Facebook</p></a>
                <a href=""><p>Instagram</p></a>
            </div>
            <div class="contact-item">
                <h6>MORE FROM US</h6>                                                
                <a href=""><p>Gift vouchers</p></a>
                <a href=""><p>Black Friday</p></a>
            </div>
            <div class="contact-item">
                <h6>SHOPPING FROM</h6>
                <p>You’re in: Vietnam</p>                 
                <a href=""><p><strong>CHANGE</strong></p> </a>              
            </div>
        </div>

        <div class="little-thing">
            <div class="left-thing">
                &copy; 2021 VINBK
            </div>

            <div class="right-thing">
                <div class="sub-right-thing">
                    <a href="">Accessibility |</a>
                </div>
                <div class="sub-right-thing">
                    
                    <a href="https://www.freeprivacypolicy.com/live/18f39e7d-8ce8-4382-9c11-9bd1c41b1364" target="_blank">&nbsp;Privacy & Cookies |</a>
                </div>
                <div class="sub-right-thing">
                    <a href="https://www.termsfeed.com/live/efb181e0-4bb1-49d9-96b7-1a1226c66fbe" target="_blank">&nbsp;Terms and Conditions</a>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="./public/js/navbarEffect.js"></script>
</body>
</html>