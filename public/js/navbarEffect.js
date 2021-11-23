function mouseOver_NAV(obj){
    let subObjects = obj.getElementsByTagName("path");
    let myLen = subObjects.length;
    for(let index = 0; index < myLen; ++index){
        subObjects[index].setAttribute("stroke", "#0d6efd"); //
    }
}

function mouseOut_NAV(obj){
    let subObjects = obj.getElementsByTagName("path");
    let myLen = subObjects.length;
    for(let index = 0; index < myLen; ++index){
        subObjects[index].setAttribute("stroke", "#EEEEEE"); //
    }    
}

const objIconList = {
    login: document.getElementById("login-icon"),
    wish_list: document.getElementById("wishlist-icon"),
    buy_icon: document.getElementById("buy-icon")
}

objIconList.login.addEventListener("mouseenter", function(){
    mouseOver_NAV(objIconList.login);
});

objIconList.login.addEventListener("mouseleave", function(){
    mouseOut_NAV(objIconList.login);
});

objIconList.wish_list.addEventListener("mouseenter", function(){
    mouseOver_NAV(objIconList.wish_list);
});

objIconList.wish_list.addEventListener("mouseleave", function(){
    mouseOut_NAV(objIconList.wish_list);
});

objIconList.buy_icon.addEventListener("mouseenter", function(){
    mouseOver_NAV(objIconList.buy_icon);
});

objIconList.buy_icon.addEventListener("mouseleave", function(){
    mouseOut_NAV(objIconList.buy_icon);
});    
