function getNavBar(){
    document.getElementsByClassName("myNav")[0].innerHTML = `
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand " href="#">
                <strong>VinBK</strong>
            </a>                
            
            <ul class="nav">

                <li class="nav">
                    <a class="nav-link color-white" aria-current="page" href="#">SALES</a>
                </li>

                <li class="nav">
                    <a class="nav-link color-white" aria-current="page" href="#">SIZE</a>
                </li>

                <li class="nav-item dropdown">
                    <div class="nav-link dropdown-toggle color-white" href="#" id="navbarDropdown" role="button" aria-expanded="false">
                        SHIRT
                    </div>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Polo Shirts</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">T-shirts & Vest</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Shirts</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Active Wears</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <div class="nav-link dropdown-toggle color-white" href="#" id="navbarDropdown" role="button" aria-expanded="false">
                        SHOES
                    </div>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Trainers</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Boots</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Sandals & Slippers</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Shocks</a></li>                      
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <div class="nav-link dropdown-toggle color-white" href="#" id="navbarDropdown" role="button" aria-expanded="false">
                        ACCESSORIES
                    </div>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Bags</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Belts</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Caps</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Jewellery</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Sunglasses</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Ties</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Wallet</a></li>                                            
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <div class="nav-link dropdown-toggle color-white" href="#" id="navbarDropdown" role="button" aria-expanded="false">
                        PANTS
                    </div>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Jeans</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Trousers</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Joggers</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Lounge Wear</a></li>                      
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <div class="nav-link dropdown-toggle color-white" href="#" id="navbarDropdown" role="button" aria-expanded="false">
                        SIZE
                    </div>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <div class="nav-link dropdown-toggle color-white" href="#" id="navbarDropdown" role="button" aria-expanded="false">
                        BRAND
                    </div>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Levi's</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Nike</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Polo Ralph Lauren</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">River Island</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">The North Face</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Vans</a></li>
                    </ul>
                </li>

            </ul>            

            <form id="navBarSearchForm">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">                    
            </form>

            <div class="icon-user">                    
                <svg width="30" height="30" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M27.5 28.875V26.125C27.5 24.6663 26.9205 23.2674 25.8891 22.2359C24.8576 21.2045 23.4587 20.625 22 20.625H11C9.54131 20.625 8.14236 21.2045 7.11091 22.2359C6.07946 23.2674 5.5 24.6663 5.5 26.125V28.875" stroke="#EEEEEE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M16.5 15.125C19.5376 15.125 22 12.6626 22 9.625C22 6.58743 19.5376 4.125 16.5 4.125C13.4624 4.125 11 6.58743 11 9.625C11 12.6626 13.4624 15.125 16.5 15.125Z" stroke="#EEEEEE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>             
                
                <svg width="30" height="30" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M28.655 6.3387C27.9527 5.63608 27.1188 5.07871 26.2011 4.69844C25.2833 4.31816 24.2997 4.12244 23.3062 4.12244C22.3128 4.12244 21.3291 4.31816 20.4114 4.69844C19.4936 5.07871 18.6598 5.63608 17.9575 6.3387L16.5 7.7962L15.0425 6.3387C13.6239 4.92012 11.6999 4.12317 9.69373 4.12317C7.68756 4.12317 5.76356 4.92012 4.34498 6.3387C2.9264 7.75727 2.12946 9.68128 2.12946 11.6874C2.12946 13.6936 2.9264 15.6176 4.34498 17.0362L5.80248 18.4937L16.5 29.1912L27.1975 18.4937L28.655 17.0362C29.3576 16.3339 29.915 15.5001 30.2952 14.5823C30.6755 13.6646 30.8712 12.6809 30.8712 11.6874C30.8712 10.694 30.6755 9.71034 30.2952 8.79258C29.915 7.87483 29.3576 7.04099 28.655 6.3387V6.3387Z" stroke="#EEEEEE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                <svg width="30" height="30" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.375 30.25C13.1344 30.25 13.75 29.6344 13.75 28.875C13.75 28.1156 13.1344 27.5 12.375 27.5C11.6156 27.5 11 28.1156 11 28.875C11 29.6344 11.6156 30.25 12.375 30.25Z" stroke="#EEEEEE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M27.5 30.25C28.2594 30.25 28.875 29.6344 28.875 28.875C28.875 28.1156 28.2594 27.5 27.5 27.5C26.7406 27.5 26.125 28.1156 26.125 28.875C26.125 29.6344 26.7406 30.25 27.5 30.25Z" stroke="#EEEEEE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M1.375 1.375H6.875L10.56 19.7863C10.6857 20.4193 11.0301 20.9879 11.5329 21.3927C12.0356 21.7974 12.6647 22.0124 13.31 22H26.675C27.3203 22.0124 27.9494 21.7974 28.4521 21.3927C28.9549 20.9879 29.2993 20.4193 29.425 19.7863L31.625 8.25H8.25" stroke="#EEEEEE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                                                
            </div>                

        </div>        

    </nav>
`;
}

window.onload = function(){
    getNavBar();
}