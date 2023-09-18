function validatePhoneNumber(input_str) {
    var regex= /^01[0125][0-9]{8}$/;
    return regex.test(input_str);
}

function validateMyForm() {
    var phone = document.getElementById('myform_phone').value;
    if (phone=="")
    {
        document.getElementById("message4").innerHTML = "You should fill Phone Number!";
        return false;
    }
    if (!validatePhoneNumber(phone)) {
        document.getElementById("message4").innerHTML = "Please Enter Right Number!";
        return false;
    } 
    else {
        var answer = window.confirm("Are you sure you want to Save Your New Phone Number?");
        if (answer) {
        alert ("Your Phone Number is Saved successfully");
        }
        else {
        alert ("Your Phone Number is not Saved");
        }
    }
}
