// Username :
let username = document.getElementById("Username");
let erreurUsername = document.getElementById("errUser");
// password : 
let password = document.getElementById("Password");
let erreurPassword = document.getElementById("errPass");
// Password Verified :
let ValidePass = document.getElementById("PasswordV");
let erreurPasswordV = document.getElementById("errPassV");
 // Submit :
let Signin = document.getElementById("signin");


// Username : 
Signin.addEventListener("click",(e) =>{
    if(username.value == ""){
        e.preventDefault();
        username.setAttribute("style","color:red; border: 1px red solid ;")  ;
        erreurUsername.innerText = "Username is required";
        erreurUsername.setAttribute("style","color:red;font-size: 9px;");
    }
    else{
        username.setAttribute("style","color:black; border: 1px green solid ;")  ;
        erreurUsername.innerText = "";
        }
})
// password : 
Signin.addEventListener("click",(e) =>{
    if(password.value == ""){
        e.preventDefault();
        password.setAttribute("style","color:red; border: 1px red solid ;")  ;
        erreurPassword.innerText = "Password is required";
        erreurPassword.setAttribute("style","color:red;font-size: 9px;");
       }
    else{
        password.setAttribute("style","color:black; border: 1px green solid ;")  ;
        erreurPassword.innerText = "";
        }
})

// confirmation password (If this pwd semble A l'autre pwd): 
Signin.addEventListener("click",(e) =>{
    if (!(ValidePass.value == password.value)){
        e.preventDefault();
        ValidePass.setAttribute("style" , "color:red; border: 1px red solid ;")  ;
        erreurPasswordV.innerText = "Password is not the Same ! retry again"
        erreurPasswordV.setAttribute("style" ,"color:red;font-size:9px;");
    }
    else{
        ValidePass.setAttribute("style" , "color:black; border: 1px green solid ;")  ;
        erreurPasswordV.innerText = "";
    }
})

