$(document).ready(function() {
    $(".wishList-del-btn")
        .mouseover(function(){                        
            $(this).children().children("path").attr("fill", "black");
        })
        .mouseout(function(){
            $(this).children().children("path").attr("fill", "gray");
        })
        .click(function(){
            let imgObj = $(this).closest(".wishList-img-here").children("img");
            let pathImg = imgObj.attr("src");
            let splitPathArr = pathImg.split('/');
            let category = splitPathArr[3];
            let clothID = splitPathArr[4].replace(".jpeg", "");            

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
                }
            });                        
            $(this).closest(".wishList-frame").remove();
        })
});
