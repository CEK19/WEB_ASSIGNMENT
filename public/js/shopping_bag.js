function shopping_fixtotal() {        
    var price = document.getElementsByClassName('price_sp');
    var quanti = document.getElementsByClassName('quantity_sp');
    var sum = 0;

    for (var i = 0; i < price.length; i++) {
        sum += price[i].innerHTML.slice(0, -1) * quanti[i].value;
    }

    var add = document.querySelector(".totalsub");
    var add2 = document.querySelector("#subtotal");
    console.log(add);
    add.innerHTML = String(sum) + " $";
    add2.innerText = String(sum) + " $";
}
$(document).ready(function(){
    $(".del-shopping-bag-but-page")
        .click(function(){        
            let buttonObj = $(this);
            let frameObj = buttonObj.parent();
            let imgObj = frameObj.find("img");
            
            let pathImg = imgObj.attr("src");            
            let splitPathArr = pathImg.split('/');    
            let category = splitPathArr[3];
            let clothID = splitPathArr[4].replace(".jpeg", "");
            
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
                var add = document.getElementById("buble");
                add.innerHTML = result.datacount;       
                buttonObj.closest(".Sb-frame").next().remove();
                buttonObj.closest(".Sb-frame").remove();   
                shopping_fixtotal();
            });  
        })
})