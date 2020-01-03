var alertRedInput = "#8C1010";
var defaultInput = "rgba(10, 180, 180, 1)";

function firstnameValidation(nameInput){
    var firstname= document.getElementById('firstname');
    var errorArr=[];
     if(!/^[a-zA-Z]+[a-zA-Z] +$/.test(nameInput)){
         errorArr.push("Invalid Firstname given");
     }
    if(errorArr.length>0){
        firstname.setCustomValidity(errorArr);
        firstname.style.borderColor=alertRedInput;
    }else{
        firstname.setCustomValidity("");
        firstname.style.borderColor= defaultInput;
    }
     

}

function lastNameValidation(lastnameInput) {
    var lastname = document.getElementById("lastname");
    var issueArr = [];
    if (/[-!@#$%^&*()_+|~=`{}\[\]:";'<>?,.\/]/.test(lastnameInput)) {
        issueArr.push("No special characters!");
    }
    if (issueArr.length > 0) {
        lastname.setCustomValidity(issueArr);
        lastname.style.borderColor = alertRedInput;
    } else {
        lastname.setCustomValidity("");
        lastname.style.borderColor = defaultInput;
    }
}

function passwordValidation(passwordInput) {
    var password = document.getElementById("password");
    var issueArr = [];
    if (!/^.{7,15}$/.test(passwordInput)) {
        issueArr.push("Password must be between 7-15 characters.");
    }
    if (!/\d/.test(passwordInput)) {
        issueArr.push("Must contain at least one number.");
    }
    if (!/[a-z]/.test(passwordInput)) {
        issueArr.push("Must contain a lowercase letter.");
    }
    if (!/[A-Z]/.test(passwordInput)) {
        issueArr.push("Must contain an uppercase letter.");
    }
    if (issueArr.length > 0) {
        password.setCustomValidity(issueArr.join("\n"));
        password.style.borderColor = alertRedInput;
    } else {
        password.setCustomValidity("");
        password.style.borderColor = defaultInput;
    }
}

function phoneNumberValidation(phoneNumberInput){
    var ErrArr=[];
    var phoneNumber=document.getElementById('phoneNumber');
    if(!/^\d{11}/.test(phoneNumberInput)){
        ErrArr.push('Phone number must be 11 digit');
    }
    if(ErrArr.length > 0){
        phoneNumber.setCustomValidity(ErrArr);
        phoneNumber.style.borderColor= alertRedInput;
    }else{
        phoneNumber.setCustomValidity("");
        phoneNumber.style.borderColor= defaultInput;
    }
    
}






