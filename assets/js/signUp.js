function toggle_CheckBox() {
    let is_all_true = true;
    $('input[type=checkbox]').each(function () {
        if ($(this).is(':checked') == false) {
            is_all_true = false;
        };
    });

    if (!is_all_true) {
        $('input[type=checkbox]').prop('checked', true);
    }
    else {
        $('input[type=checkbox]').prop('checked', false);
    }
}


function validattion() {
    var isError = false;
    var msg = "";

    // check Email
    let email = document.forms["my_form"]["email"].value;
    if (email.length == 0) {
        isError = true;
        msg += "Please enter your email\n"
    }
    else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        isError = true
        msg += "Your email must be <sth>@<sth>.<sth>\n"
    }

    // Check name
    let firstName = document.forms["my_form"]["firstName"].value;   //my_form is name of a form //firstName is id of input
    let lastName = document.forms["my_form"]["lastName"].value;
    if (firstName.length == 0) {
        isError = true;
        msg += "Please enter your first name\n";
    }
    else if (firstName.length < 2 || firstName.length > 30) {
        isError = true;
        msg += "Your first name length must be from 2 to 30\n";
    }

    if (lastName.length == 0) {
        isError = true;
        msg += "Please enter your last name\n";
    }
    else if (lastName.length < 2 || lastName.length > 30) {
        isError = true;
        msg += "Your last name length must be from 2 to 30\n";
    }

    // check Password
    let password = document.forms["my_form"]["password"].value;
    if (password.length < 2 || password.length > 30) {
        isError = true
        msg += "Your password length must be from 2 to 30\n"
    }

    // check valid date
    let today = new Date();
    let input_date = document.forms["my_form"]["birthday"].valueAsDate;
    alert(input_date);
    if (input_date == null) {
        isError = true;
        msg += "Please enter your Birthday\n"
    }
    else {
        let age = today.getFullYear() - input_date.getFullYear();
        let gap_month = today.getMonth() - input_date.getMonth();
        let gap_day = today.getDate() - input_date.getDate();
        if (gap_month < 0 || (gap_month === 0 && gap_day < 0)) {
            age--;
        }
        alert(age);
        if (age < 16) {
            isError = true;
            msg += "You are under 16 years old\n"
        }
    }


    if (isError) {
        alert(msg);
        isError = false;
        msg = "";
        return false
    }
    else {
        alert("Well done kid !!!");
        return true;
    }
}