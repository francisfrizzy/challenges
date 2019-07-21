window.onload = function(){
    
    //inputs
    var signup_button = document.getElementById("signup");
    var form_array = [];
    
        
    function signup_click() {
        var name = document.getElementById("name").value;
        var surname = document.getElementById("surname").value;
        var age = document.getElementById("age").value;
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirm_password").value;
        console.log(name+";"+surname+";"+age+";"+email+";"+password);
        
        if(password !== confirmPassword){    
            alert("Passwords do not match!");
        }
        else if(password === confirmPassword){
            form_array = [name,surname,age,email,password,confirmPassword];
            console.log(form_array);
            alert("successful signup!");
        }   
    }
    
    signup_button.addEventListener("click", signup_click);
    
}