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

$(document).ready(function(){
    
    let frameObj = $(".product-detail-frame");
    let imgObj = frameObj.find("img");

    let pathImg = imgObj.attr("src");        
    let splitPathArr = pathImg.split('/');    
    let category = splitPathArr[3];
    let clothID = splitPathArr[4].replace(".jpeg", "");

    // PRECONSTANT
    const id_MBT_button = "move-to-bag-but";
    const classBefore_MTB = "btn-sm btn-light btn-outline-dark border-4 mt-2";
    const classAfter_MTB = "btn-sm btn-light btn-outline-success border-4 mt-2"
    const textBefore_MTB = "MOVE TO BAG";
    const textAfter_MTB = "ADDED TO YOUR BAG !";

    const id_WL_button = "move-to-wish-list-but";
    const classBefore_WL = "btn-sm btn-light btn-outline-dark border-4 mt-2";
    const classAfter_WL = "btn-sm btn-light btn-outline-info border-4 mt-2";        
    const textBefore_WL = `
                        FAVORITE <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="35" height="35" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512">
                        <g transform="translate(512 0) scale(-1 1)">
                            <path fill="currentColor" d="M453.122 79.012a128 128 0 0 0-181.087.068l-15.511 15.7l-15.382-15.666l-.1-.1a128 128 0 0 0-181.02 0l-6.91 6.91a128 128 0 0 0 0 181.019l182.373 182.371l20.595 21.578l.491-.492l.533.533l19.296-20.359L460.032 266.94a128.147 128.147 0 0 0 0-181.019zM437.4 244.313L256.571 425.146L75.738 244.313a96 96 0 0 1 0-135.764l6.911-6.91a96 96 0 0 1 135.713-.051l38.093 38.787l38.274-38.736a96 96 0 0 1 135.765 0l6.91 6.909a96.11 96.11 0 0 1-.004 135.765z" />
                        </g>
                        </svg>
                        `;
    const textAfter_WL = "ADDED TO YOUR WISHLIST !";   
    
    $.ajax({
        url: './mvc/core/AJAX/checkBagExist.php',
        type: 'POST',
        dataType: 'json',
        data: {
            ajax_category: category,
            ajax_clothid: clothID
        }
    }).done(function(result) {                              
        if(result.result_exist == "no-sign-in"){                
            $("#move-to-bag-but").attr("class", classBefore_MTB);
            $("#move-to-bag-but").children().html(textBefore_MTB);
        }
        else if(result.result_exist == "non-exist"){            
            $("#move-to-bag-but").attr("class", classBefore_MTB);
            $("#move-to-bag-but").children().html(textBefore_MTB);
        }
        else{            
            $("#move-to-bag-but").attr("class", classAfter_MTB);
            $("#move-to-bag-but").children().html(textAfter_MTB);
        }
    });

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
            $("#move-to-wish-list-but").attr("class", classBefore_WL);
            $("#move-to-wish-list-but").children().html(textBefore_WL);
        }
        else if(result.result_exist == "non-exist"){
            $("#move-to-wish-list-but").attr("class", classBefore_WL);
            $("#move-to-wish-list-but").children().html(textBefore_WL);
        }
        else{
            $("#move-to-wish-list-but").attr("class", classAfter_WL);
            $("#move-to-wish-list-but").children().html(textAfter_WL);
        }
    });          

    $(".product-detail-container button")
    .click(function(){

        // GET CATEGORY AND CLOTH ID 
        let buttonObj = $(this);        
        let text = buttonObj.children().text().replace(/\s/g, "");             

        if($(this).attr("class") == classBefore_MTB && $(this).attr("id") == id_MBT_button){ // BUTTON MOVE TO BAG
            $.ajax({
                url: './mvc/core/AJAX/moveToBag.php',
                type: 'POST',
                dataType: 'json',
                data: {
                    ajax_category: category,
                    ajax_clothid: clothID
                }
            }).done(function(result) {                      
                if(result.is_exist == "no-login"){                                            
                    alert("Please sign-in to put item to your shopping bag!");
                }
                else if(result.is_exist == "non-exist"){
                    buttonObj.attr("class", classAfter_MTB);
                    buttonObj.children().html(textAfter_MTB);
                    var add = document.getElementById("buble");
                    add.innerHTML = result.datacount;
                    // console.log(result.datacount);
                }
                else{
                    // console.log("exist-in-bag");
                }
            });   
        }
        else if($(this).attr("class") == classAfter_MTB && $(this).attr("id") == id_MBT_button){
            $.ajax({
                url: './mvc/core/AJAX/deleteBag.php',
                type: 'POST',
                dataType: 'json',
                data: {
                    ajax_category: category,
                    ajax_clothid: clothID
                }
            }).done(function(result) {                      
                if(result.state_response == "error"){                                            
                    alert("Delete failed");
                }
                else{
                    
                }
                buttonObj.attr("class", classBefore_MTB);
                buttonObj.children().html(textBefore_MTB);    
                var add = document.getElementById("buble");
                add.innerHTML = result.datacount;
                    // console.log(result.data_count);          

            });  

        }
        else if($(this).attr("class") == classBefore_WL && $(this).attr("id") == id_WL_button){ // BUTTON MOVE TO WISH LIST
            $.ajax({
                url: './mvc/core/AJAX/addWishlist.php',
                type: 'POST',
                dataType: 'json',
                data: {
                    ajax_category: category,
                    ajax_clothid: clothID
                }
            }).done(function(result) {                
                if(result.state_response == "no-sign-in"){
                    alert("Please sign-in to put item to your wishlist");
                }        
                else{                    
                    buttonObj.attr("class", classAfter_WL);                    
                    buttonObj.children().html(textAfter_WL);  
                                    
                }
            });
        }
        else if($(this).attr("class") == classAfter_WL && $(this).attr("id") == id_WL_button){
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
                if(result.state_response == "successful"){                                        
                    buttonObj.attr("class", classBefore_WL);
                    buttonObj.children().html(textBefore_WL);
                    
                }
            });       
        }        
    })

    var num_of_cmt = 2;
    $.ajax({
        url: './mvc/core/AJAX/loadComment.php',
        type: 'POST',
        dataType: 'html',
        data: {
            ajax_category: category,
            ajax_clothid: clothID,
            ajax_num_of_cmt: num_of_cmt
        }
    }).done(function(result) {
        $(".export-comment-area").html(result);
    });  

    $("#load-more-button")
        .click(function(){
            num_of_cmt = num_of_cmt + 2;
            $.ajax({
                url: './mvc/core/AJAX/loadComment.php',
                type: 'POST',
                dataType: 'html',
                data: {
                    ajax_category: category,
                    ajax_clothid: clothID,
                    ajax_num_of_cmt: num_of_cmt
                }
            }).done(function(result) {
                $(".export-comment-area").html(result);
            });  
        });

    $("#submit-comment-but")
        .click(function(){
            let cmtText = $("textarea#text-comment-field").val();
            let startCmt = $("#user-rating").val();
            if(cmtText.length > 0 && startCmt > 0){                
                $.ajax({
                    url: './mvc/core/AJAX/addComment.php',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        ajax_category: category,
                        ajax_clothid: clothID,                        
                        ajax_star : startCmt,
                        ajax_comment: cmtText
                    }
                }).done(function(result) {
                    if(result.status_update == "successful" && result.status_add == "successful"){
                        num_of_cmt = num_of_cmt + 1;
                        $.ajax({
                            url: './mvc/core/AJAX/loadComment.php',
                            type: 'POST',
                            dataType: 'html',
                            data: {
                                ajax_category: category,
                                ajax_clothid: clothID,
                                ajax_num_of_cmt: num_of_cmt
                            }
                        }).done(function(result) {
                            $(".export-comment-area").html(result);
                        });
                    }
                });          
            }
        });
})