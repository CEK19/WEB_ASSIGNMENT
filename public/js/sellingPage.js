function mouseOver_SELLING(obj){    
    let subObjects = obj.getElementsByTagName("path");
    let myLen = subObjects.length;
    for(let index = 0; index < myLen; ++index){
        subObjects[index].setAttribute("stroke", "blue"); //
    }
}

function mouseOut_SELLING(obj){    
    let subObjects = obj.getElementsByTagName("path");
    let myLen = subObjects.length;
    for(let index = 0; index < myLen; ++index){
        subObjects[index].setAttribute("stroke", "black"); //
    }    
}

// IF EXIST SELLING PAGE
let sellingClassObj = document.getElementsByClassName("sellingPageLayout");
if(sellingClassObj.length > 0){
    let heartIconList = sellingClassObj[0].getElementsByClassName("selling-heart-btn");    
    for(let index = 0; index < heartIconList.length; ++index){
        heartIconList[index].addEventListener("mouseenter", function(){
            mouseOver_SELLING(heartIconList[index]);
        });
        
        heartIconList[index].addEventListener("mouseleave", function(){
            mouseOut_SELLING(heartIconList[index]);
        });
    }
}