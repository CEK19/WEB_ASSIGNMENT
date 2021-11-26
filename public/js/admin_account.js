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