$(document).ready(function(){
    $("#category-show-button")
        .click(function(){
            let btnObj = $(this);
            let category = $('.form-select').val();

            window.location.href = "./?url=Admin/cloth/" + category;  // Sadly this reloads
        })

    $(".del-item-button-admin")
        .click(function(){
            let path = window.location.search;
            let splitPathArr = path.split('/');                
            let category = splitPathArr[2];

            let trObj = $(this).closest("tr");
            let tdObj = trObj.children()[0];
            
            let id = tdObj.innerHTML;

            $.ajax({
                url: './mvc/core/AJAX/adminDelItem.php',
                type: 'POST',
                dataType: 'json',
                data: {
                    ajax_category: category,
                    ajax_clothid: id
                }
            }).done(function(result) {                                      
                window.location.href = "./?url=Admin/cloth/" + category;  // Sadly this reloads
            });              

        })
})