let val = document.getElementById("user-rating")
let star1 = document.getElementById("star-1")
let star2 = document.getElementById("star-2")
let star3 = document.getElementById("star-3")
let star4 = document.getElementById("star-4")
let star5 = document.getElementById("star-5")

function showStar(x) {
    switch (x) {
        case 5:
            star5.classList.remove("far")
            star5.classList.add("fas")
        case 4:
            star4.classList.remove("far")
            star4.classList.add("fas")
        case 3:
            star3.classList.remove("far")
            star3.classList.add("fas")
        case 2:
            star2.classList.remove("far")
            star2.classList.add("fas")
        case 1:
            star1.classList.remove("far")
            star1.classList.add("fas")
        default:
            break;
    }
}

function showNoStar() {
    star1.classList.remove("fas")
    star1.classList.add("far")
    star2.classList.remove("fas")
    star2.classList.add("far")
    star3.classList.remove("fas")
    star3.classList.add("far")
    star4.classList.remove("fas")
    star4.classList.add("far")
    star5.classList.remove("fas")
    star5.classList.add("far")
}

function mouseLeaving() {
    if (val.value == 1) {
        showNoStar();
        showStar(1)
    }
    else if (val.value == 2){
        showNoStar()
        showStar(2)
    }
    else if (val.value == 3) {
        showNoStar()
        showStar(3)
    }
    else if (val.value == 4) {
        showNoStar()
        showStar(4)
    }
    else if (val.value == 5) {
        showNoStar()
        showStar(5)
    }
    else {
        showNoStar();
    }
}


// MOUSE OVER ICON
star1.onmouseover = function() {
    showStar(1)
}
star2.onmouseover = function() {
    showStar(2)
}
star3.onmouseover = function() {
    showStar(3)
}
star4.onmouseover = function() {
    showStar(4)
}
star5.onmouseover = function() {
    showStar(5)
}


// CLICK THAT ICON
star1.onclick = function() {
    val.value = 1
}
star2.onclick = function() {
    val.value = 2
}
star3.onclick = function() {
    val.value = 3
}
star4.onclick = function() {
    val.value = 4
}
star5.onclick = function() {
    val.value = 5
}


// LEAVE THAR ICOn
star1.onmouseout = function() {
    mouseLeaving()
}
star2.onmouseout = function() {
    mouseLeaving()
}
star3.onmouseout = function() {
    mouseLeaving()
}
star4.onmouseout = function() {
    mouseLeaving()
}
star5.onmouseout = function() {
    mouseLeaving()
}

$(".product-detail-container button")
    .click(function(){

        let buttonObj = $(this);        
        let text = buttonObj.children().text().replace(/\s/g, "");        
        
        // GET CATEGORY AND CLOTH ID 
        let frameObj = $(".product-detail-frame");
        let imgObj = frameObj.find("img");

        let pathImg = imgObj.attr("src");        
        let splitPathArr = pathImg.split('/');    
        let category = splitPathArr[3];
        let clothID = splitPathArr[4].replace(".jpeg", "");

        if(text == "MOVETOBAG"){ // BUTTON MOVE TO BAG
            console.log(buttonObj.attr('class'));
        }
        else if(text == "FAVORITE"){ // BUTTON MOVE TO WISH LIST
            
            // IF NON EXISTED
            // $.ajax({
            //     url: './mvc/core/AJAX/addWishlist.php',
            //     type: 'POST',
            //     dataType: 'json',
            //     data: {
            //         ajax_category: category,
            //         ajax_clothid: clothID
            //     }
            // }).done(function(result) {
            //     // STEP 3: UPDATE COLOR OF BUTTON
            //     if(result.state_response == "no-sign-in"){
            //         alert("Please sign-in to put item to your wishlist");
            //     }                        
                // UPDATE SOME THING ON MOVE TO BAG BUTTON                
            // });
        }
    })