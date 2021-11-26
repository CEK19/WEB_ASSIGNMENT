//------------------------------------------//
function mouseOver_SELLING(obj){ 
    let pathObj = obj.getElementsByTagName("path")[0];
    pathObj.setAttribute("fill", "black");
}

function mouseOut_SELLING(obj){    
    let pathObj = obj.getElementsByTagName("path")[0];
    pathObj.setAttribute("fill", "gray");
}
//------------------------------------------//
function mouseClicked_SELLING(obj){
    // STEP 1: GET CATEGORY AND CLODTH ID => REFORMAT
    let frameObj = obj.parentElement;
    let imgObj = frameObj.getElementsByTagName("img")[0];
    let pathImg = imgObj.getAttribute("src");
    let splitPathArr = pathImg.split('/');
    
    let category = splitPathArr[3];
    let clothID = splitPathArr[4].replace(".jpeg", "");


    // STEP 2: GET CURRENT COLOR OF BUTTON
    let circleObj = obj.getElementsByTagName("circle")[0];
    let getCurrFillColor = circleObj.getAttribute("fill");

    // STEP 3: POST INFO FORMATTED TO API
    if(getCurrFillColor == "white"){ // NOT EXIST ON WISH LIST
        $.ajax({
            url: './mvc/core/AJAX/addWishlist.php',
            type: 'POST',
            dataType: 'json',
            data: {
                ajax_category: category,
                ajax_clothid: clothID
            }
        }).done(function(result) {
            // STEP 3: UPDATE COLOR OF BUTTON
            if(result.state_response == "no-sign-in"){
                alert("Please sign-in to put item to your wishlist");
            }        
            updateHeartColorBasedOnWishListExist(obj);
        });
    }
    else if (getCurrFillColor == "#F5C6A5"){ // EXIST ON WISHLIST
        $.ajax({
            url: './mvc/core/AJAX/delWishlist.php',
            type: 'POST',
            dataType: 'json',
            data: {
                ajax_category: category,
                ajax_clothid: clothID
            }
        }).done(function(result) {
            // STEP 3: UPDATE COLOR OF BUTTON 
            console.log(result)           ;
            updateHeartColorBasedOnWishListExist(obj);
        });
    }
}

function updateHeartColorBasedOnWishListExist(obj){    
    let circleObj = obj.getElementsByTagName("circle")[0];
    let getCurrFillColor = circleObj.getAttribute("fill");

    let beforeColor = getCurrFillColor;
    let afterColor = beforeColor;

    let frameObj = obj.parentElement;
    let imgObj = frameObj.getElementsByTagName("img")[0];
    let pathImg = imgObj.getAttribute("src");
    let splitPathArr = pathImg.split('/');
    
    let category = splitPathArr[3];
    let clothID = splitPathArr[4].replace(".jpeg", "");

    $.ajax({
        url: './mvc/core/AJAX/checkWishlistExist.php',
        type: 'POST',
        dataType: 'json',
        data: {
            ajax_category: category,
            ajax_clothid: clothID
        }
    }).done(function(result) {        
        if(result.result_exist == "no-sign-in"){
            afterColor = "white";  
        }
        else if(result.result_exist == "non-exist"){
            afterColor = "white";
        }
        else if(result.result_exist == "exist"){
            afterColor = "#F5C6A5";
        }

        if(beforeColor != afterColor){
            circleObj.setAttribute("fill", afterColor);
        }
    });    
}

//------------------------------------------//

// IF EXIST SELLING PAGE
let sellingClassObj = document.getElementsByClassName("sellingPageLayout");
if(sellingClassObj.length > 0){    
    let heartIconList = sellingClassObj[0].getElementsByClassName("selling-heart-btn");
    if(heartIconList.length > 0)    {
        for(let index = 0; index < heartIconList.length; ++index){
            heartIconList[index].addEventListener("mouseenter", function(){
                mouseOver_SELLING(heartIconList[index]);
            });
            
            heartIconList[index].addEventListener("mouseleave", function(){
                mouseOut_SELLING(heartIconList[index]);
            });
    
            heartIconList[index].addEventListener("click", function(){            
                mouseClicked_SELLING(heartIconList[index]);
            });
            
            updateHeartColorBasedOnWishListExist(heartIconList[index]);
        }
    }
}