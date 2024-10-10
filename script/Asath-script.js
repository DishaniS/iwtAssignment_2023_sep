function validateForm() {
    var gender = document.forms["new-trainer"]["gender"].value;
    var phone = document.forms["new-trainer"]["phone"].value;
    var x = document.forms["new-trainer"]["password"].value;
    var y = document.forms["new-trainer"]["confirm-password"].value;
    //Gender validation
    if (gender == "") {
        alert("Please select gender");
        return false;
    }
    //Phone number validation
    if (phone == "") {
        alert("Please enter phone number");
        return false;
    }
    if  (length(phone) != 10) {
        alert("Phone number must be 10 digits");
        return false;
    }
    //Password validation
    if (x != y) {
        alert("Password and Confirm Password must be the same");
        return false;
    }
}
