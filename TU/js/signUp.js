function toggle_CheckBox(){
    let is_all_true = true;
    $('input[type=checkbox]').each(function() {
        if($(this).is(':checked') == false){
            is_all_true = false;
        };
    });

    if(!is_all_true){
        $('input[type=checkbox]').prop('checked', true);
    }
    else{
        $('input[type=checkbox]').prop('checked', false);
    }
}