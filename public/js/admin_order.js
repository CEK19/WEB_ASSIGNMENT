$(document).ready(function(){
    $("#admin-order-query-but")
        .click(function(){
            let email = $("#text-query-email").val();
            window.location.href = "./?url=Admin/order_query/" + email;  // Sadly this reloads]
        })

    $(".del-order-but")
        .click(function(){

            let trObj = $(this).closest("tr");
            let id = trObj.children("td")[0].innerHTML;            

            $.ajax({
                url: './mvc/core/AJAX/adminDeleteOrder.php',
                type: 'POST',
                dataType: 'json',
                data: {                    
                    ajax_id: id
                }
            }).done(function(result) {   
                console.log(result);
                window.location.href = "./?url=Admin/order";
            }); 
        })
})