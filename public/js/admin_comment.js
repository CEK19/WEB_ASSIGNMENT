$(document).ready(function(){
    $(".del-cmt-btn-admin")
        .click(function(){
            let trObj = $(this).closest("tr");

            let id = (trObj.children()[0]).innerHTML;
            let email = (trObj.children()[1]).innerHTML;
            let clothID = (trObj.children()[2]).innerHTML;
            let category = (trObj.children()[3]).innerHTML;
            let start = (trObj.children()[4]).innerHTML;
            let comment = (trObj.children()[5]).innerHTML;

            $.ajax({
                url: './mvc/core/AJAX/adminDeleteComment.php',
                type: 'POST',
                dataType: 'json',
                data: {                    
                    id_cmt: id,
                    category: category,
                    clothID: clothID,
                    email: email,
                    star: start,
                    comment: comment
                }
            }).done(function(result) {   
                console.log(result);
                window.location.href = "./?url=Admin/comment";
            }); 

        })
})