function mouseOver_WishList(obj){ 
    console.log("wish list in")   ;
    let subObjects = obj.getElementsByTagName("path");
    let myLen = subObjects.length;
    for(let index = 0; index < myLen; ++index){
        subObjects[index].setAttribute("stroke", "#000000"); //
    }
}

function mouseOut_WishList(obj){   
    console.log("wish list out")   ; 
    let subObjects = obj.getElementsByTagName("path");
    let myLen = subObjects.length;
    for(let index = 0; index < myLen; ++index){
        subObjects[index].setAttribute("stroke", "black"); //
    }    
}

// IF EXIST SELLING PAGE
let wishListObj = document.getElementById("wishList-page-background");
if(wishListObj){    
    let delIconList = wishListObj.getElementsByClassName("wishList-del-btn");    
    for(let index = 0; index < delIconList.length; ++index){
        delIconList[index].addEventListener("mouseenter", function(){
            mouseOver_WishList(delIconList[index]);
        });
        
        delIconList[index].addEventListener("mouseleave", function(){
            mouseOut_WishList(delIconList[index]);
        });
    }
}