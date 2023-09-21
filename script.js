function showForm(formId) {
    var Form = document.getElementById(formId);
    console.log(formId);
    if (formId == "register-form") {
        Form.style.display = 'block';
        document.getElementById("login-form").style.display = 'none';
        document.getElementById("title").innerHTML = "Register";
    }
    else if (formId == "login-form") {
        Form.style.display = 'block';
        document.getElementById("register-form").style.display = 'none';
        document.getElementById("title").innerHTML = "Login";
    }
    else if (formId == "forgot-form") {
        Form.style.display = 'block';
        document.getElementById("login-form").style.display = 'none';
        document.getElementById("title").innerHTML = "Forgot Password";
    }
}
function hideForm(formId) {
    var Form = document.getElementById(formId);
    console.log(formId);
    if (formId == "register-form") {
        Form.style.display = 'none';
        
    }
    else if (formId == "login-form") {
        Form.style.display = 'none';
    }
    else if (formId == "forgot-form") {
        Form.style.display = 'none';
    }
}





