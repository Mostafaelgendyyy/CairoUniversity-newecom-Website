
function validateMyForm()
{
    //collect form data in JavaScript variables
    var inputnum = document.getElementById("innum").value;
    //check empty old password field
    if (inputnum=="")
    {
        document.getElementById("message5").innerHTML = "You should fill the National ID!";
        return false;
    }
    if (inputnum.length != 14)
    {
        document.getElementById("message5").innerHTML = "National ID should be from 14 Numbers!";
        return false;
    }
    else {
        var answer = window.confirm("Are you sure you want to Save Your National ID?");
        if (answer) {
        alert ("Your National ID is Saved successfully");
        }
        else {
        alert ("Your National ID is not Saved");
        }
    }

}
