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

    $("#wishList-page-background button")
        .click(function(e){
            e.preventDefault();

            let buttonObj  = $(this);

            let frameObj = $(this).closest(".wishList-frame");
            let pathImg = frameObj.children().children("img").attr("src");
            let splitPathArr = pathImg.split('/');
            let category = splitPathArr[3];
            let clothID = splitPathArr[4].replace(".jpeg", ""); 
            let isWarning = false;

            jQuery.ajaxSetup({async:false});

            $.ajax({
                url: './mvc/core/AJAX/moveToBag.php',
                type: 'POST',
                dataType: 'json',
                data: {
                    ajax_category: category,
                    ajax_clothid: clothID
                }
            }).done(function(result) {
                // STEP 3: UPDATE COLOR OF BUTTON         
                if(result.is_exist == "exist"){
                    isWarning = true;                                        
                    alert("Your item have been existed in your shopping bag !");
                }
            });   
            

            if(!isWarning){
                $.ajax({
                    url: './mvc/core/AJAX/delWishlist.php',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        ajax_category: category,
                        ajax_clothid: clothID
                    }
                }).done(function(result_delete) {                        
                    if(result_delete.state_response == "successful"){                                        
                    }
                });  
                $(this).closest(".wishList-frame").remove();                
            }
            jQuery.ajaxSetup({async:true});
        })
});
