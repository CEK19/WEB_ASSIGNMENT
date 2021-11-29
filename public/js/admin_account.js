let left = document.getElementById("left")
let user_id = document.getElementById("user-id")
let add_btn = document.getElementById("add-btn")
let edit_btn = document.getElementById("edit-btn")


add_btn.onclick = function() {
    // the correct form has existed
    if(!left.classList.contains("d-none") && user_id.classList.contains("d-none")){
        left.classList.add("d-none")
    }
    else{
        user_id.classList.add("d-none")
        left.classList.remove("d-none")
    }
};


edit_btn.onclick = function() {
    // the correct form has existed
    if(!left.classList.contains("d-none") && !user_id.classList.contains("d-none")){
        left.classList.add("d-none")
    }
    else{
        user_id.classList.remove("d-none")
        left.classList.remove("d-none")
    }
};

$(document).ready(function(){

    //---------FOR EDIT or ADD--------//

    $("#admin-submit-add-edit")
    .click(function(){

        let ptr_user_id = $("#user-id-add-edit");
        let ptr_fname = $("#name-fname-add-edit");
        let ptr_lname = $("#name-lname-add-edit");
        let ptr_email = $("#email-add-edit-adm");
        let ptr_button_add_edit = $(this);

        // ADD MODE        
        if(ptr_user_id.val() == ""){       
            let pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;     
            if(ptr_email.val().match(pattern) && ptr_fname.val().length > 0 && ptr_lname.val().length > 0){
                $.ajax({
                    url: './mvc/core/AJAX/adminAddUser.php',
                    type: 'POST',
                    dataType: 'html',
                    data: {
                        ajax_fname: ptr_fname.val(),
                        ajax_lname: ptr_lname.val(),
                        ajax_email: ptr_email.val()
                    }
                }).done(function(result) {                       
                    $("#table-area-data-export").html(result);
                });  
            }
            else{
                alert("INVALID INPUT");
            }
        }
        // EDIT MODE
        else{
            let pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;     
            if(ptr_email.val().match(pattern) && ptr_fname.val().length > 0 && ptr_lname.val().length > 0 && ptr_user_id.length > 0){
                $.ajax({
                    url: './mvc/core/AJAX/adminEditUser.php',
                    type: 'POST',
                    dataType: 'html',
                    data: {
                        ajax_id: ptr_user_id.val(),
                        ajax_fname: ptr_fname.val(),
                        ajax_lname: ptr_lname.val(),
                        ajax_email: ptr_email.val()
                    }
                }).done(function(result) {                                       
                    $("#table-area-data-export").html(result);
                });  
    
            }
            else{
                alert("INVALID INPUT");
            }
        }
                
    });


    //---------UP DATE ADMIN LEVEL--------//
    $("#admin-button-edit-type-account")
        .click(function(){
            const clvfac = "Choose level for account";
            let ptr_user_id = $("#user-id-type-edit");            
            let ptr_user_type_select = $("#user-select-type");
            let ptr_button_type = $(this);
            
            if(ptr_user_type_select.val() == clvfac || ptr_user_id.val() == ""){
                alert("SELECT BEFORE EDIT");
            }
            else{
                $.ajax({
                    url: './mvc/core/AJAX/editTypeUser.php',
                    type: 'POST',
                    dataType: 'html',
                    data: {
                        ajax_id: ptr_user_id.val(),
                        ajax_type: ptr_user_type_select.val()
                    }
                }).done(function(result) {                                       
                    $("#table-area-data-export").html(result);
                });  
            }

        });
})