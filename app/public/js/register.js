const form = document.getElementById("register-form");
const passwordRegex = !/[A-Z]/;

function validateForm()                                    
{                       
    var email = document.forms["register-form"]["email"];    
    var password = document.forms["register-form"]["passsword"];  
    var confirmPassword = document.forms["register-form"]["password_confirmation"]; 
  
    return (passwordRegex.test(password));
}

form.addEventListener("submit", function(e) {
    //e.preventDefault();

    if(validateForm())
        form.submit();
});
