let Username = document.getElementById("username");
let password = document.getElementById("password");
let erreurName = document.getElementById("erreurName");
let erreurPassword = document.getElementById("erreurPassword");
let login = document.getElementById("login");



// Username : 
login.addEventListener("click",(e) =>{
    if(Username.value == ""){
        e.preventDefault();
        Username.setAttribute("style","color:red; border: 1px red solid ;")  ;
        erreurName.innerText = "Username is required";
        erreurName.setAttribute("style","color:red;font-size: 9px;");
    }
    else{
        Username.setAttribute("style","color:black; border: 1px green solid ;")  ;
        erreurName.innerText = "";
    }
})

// password : 
login.addEventListener("click",(e) =>{
    if(password.value == ""){
        e.preventDefault();
        password.setAttribute("style","color:red; border: 1px red solid ;")  ;
        erreurPassword.innerText = "Password cant be blank";
        erreurPassword.setAttribute("style" , "color:red;font-size: 9px;");
    }
    else{
        password.setAttribute("style" , "color:black; border: 1px green solid ;")  ;
        erreurPassword.innerText = "";
    }
})

