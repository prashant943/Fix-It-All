function validateName() {
    var name = document.getElementById("name").value;
    const regex = /^[a-zA-Z ]*$/;
    if(name.length == 0){
        document.getElementById("name-error").innerHTML = 'Name Field empty. Enter a Name.';
        document.getElementById("name").focus();
    }
    else{
        if(name.match(regex)){
            document.getElementById("name").value = name.toUpperCase();
            document.getElementById("name-error").innerHTML = '';
        } else{
            document.getElementById("name-error").innerHTML = "Name should only contain spaces and alphabets. Enter a Valid Name.";
            document.getElementById("name").focus();
        }       
    }
}

function validateEmail() {
    var email = document.getElementById("email").value;
    const regex = /\S+@\S+\.\S+/;
    if(email.length == 0){
        document.getElementById("email-error").innerHTML = 'Email Field empty. Enter a Email.';
        document.getElementById("email").focus();
    } else{
        if(!email.match(regex)){
            document.getElementById("email-error").innerHTML = "Enter a Valid Email.";
            document.getElementById("email").focus();
        } else
            document.getElementById("email-error").innerHTML = "";
    }
}

function validateMobile() {
    var mobile = document.getElementById("mobile").value;
    const regex = /^\d{10}$/;
    if(mobile.length == 0){
        document.getElementById("mobile-error").innerHTML = 'Mobile Field empty. Enter a Mobile No.';
        document.getElementById("mobile").focus();
    } else{
        if(!mobile.match(regex)){
            document.getElementById("mobile-error").innerHTML = "Enter a Valid Mobile Number. Only numbers are allowed";
            document.getElementById("mobile").focus();
        } else
            document.getElementById("mobile-error").innerHTML = "";
    }
}

function validatePW() {
    var pw = document.getElementById("password").value;
    const regex = /^(?=.*\d)(?=.*[a-zA-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
    if(pw.length == 0){
        document.getElementById("pw-error").innerHTML = 'Password Field empty. Enter a Password.';
        document.getElementById("password").focus();
    } else{
        if(!pw.match(regex)){
            document.getElementById("pw-error").innerHTML = "Pattern didn't match the pattern. Enter a Valid Password.";
            document.getElementById("password").focus();
        } else
            document.getElementById("pw-error").innerHTML = "";
    }
}