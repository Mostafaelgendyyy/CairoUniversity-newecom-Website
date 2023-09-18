function validateForm() {
  //collect form data in JavaScript variables
  var pw= document.getElementById("pswd").value;
  var pw1 = document.getElementById("pswd1").value;
  var pw2 = document.getElementById("pswd2").value;

  //check empty old password field
  if (pw=="")
  {
    alert ("See the Error Under The Old Password");
    document.getElementById("message0").innerHTML = "You should fill the old Password first!";
    return false;
  }
  /******* LENGTH of OLD PASSWORD *******/
  if(pw.length < 8) {
    alert ("See the Error Under The Old Password");
    document.getElementById("message0").innerHTML = "Password length must be atleast 8 characters";
    return false;
  }

  //maximum length of password validation
  if(pw.length > 15) {
    alert ("See the Error Under The Old Password");
    document.getElementById("message0").innerHTML = "Password length must not exceed 15 characters";
    return false;
  }

  //check empty password field
  if(pw1 == "") {
    alert ("See the Error Under The New Password");
    document.getElementById("message1").innerHTML = "Fill the password please!";
    return false;
  }
  //check empty confirm password field
  if(pw2 == "") {
    alert ("See the Error Under The Confirm Password");
    document.getElementById("message2").innerHTML = "Confirm the New password please!";
    return false;
  } 

  /******* LENGTH of NEW PASSWORD *******/
  //minimum password length validation
  if(pw1.length < 8) {
    alert ("See the Error Under The New Password");
    document.getElementById("message1").innerHTML = "Password length must be atleast 8 characters";
    return false;
  }

  //maximum length of password validation
  if(pw1.length > 15) {
    alert ("See the Error Under The New Password");
    document.getElementById("message1").innerHTML = "Password length must not exceed 15 characters";
    return false;
  }
  if(pw1 != pw2) {
    alert ("Please Make Sure that the Two Passwords are Equal");
    document.getElementById("message2").innerHTML = "Passwords are not same";
    return false;
  } 
  else {
    var answer = window.confirm("Are you sure you want to Change Your Password?");
    if (answer) {
      alert ("Your password is changed successfully");
    }
    else {
      alert ("Your password is not changed");
    }
    document.write("JavaScript form has been submitted successfully");
  }
}
