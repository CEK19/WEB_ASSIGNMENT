function mouseOver_SELLING(obj){ 
    let pathObj = obj.getElementsByTagName("path")[0];
    pathObj.setAttribute("fill", "black");
}

function mouseOut_SELLING(obj){    
    let pathObj = obj.getElementsByTagName("path")[0];
    pathObj.setAttribute("fill", "gray");
}

function mouseClicked_SELLING(obj){
    let circleObj = obj.getElementsByTagName("circle")[0];
    let getCurrFillColor = circleObj.getAttribute("fill");
    if(getCurrFillColor == "white"){
        circleObj.setAttribute("fill", "#F5C6A5");
    }
    else{
        circleObj.setAttribute("fill", "white");
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

        heartIconList[index].addEventListener("click", function(){
            console.log("ho");
            mouseClicked_SELLING(heartIconList[index]);
        });
    }
}