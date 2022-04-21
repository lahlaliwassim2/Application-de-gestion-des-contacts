let Fname = document.getElementById("Fname");
let Erreur_Fname = document.getElementById("erreur-Fname");

let Email = document.getElementById("email");
let Erreur_email = document.getElementById("erreur-email")

let Phone = document.getElementById("phone");
let Erreur_phone = document.getElementById("erreur-Phone");

let Adresse = document.getElementById("adresse");
let Erreur_adresse = document.getElementById("erreur-adresse");


let Submit = document.getElementById("add");

// name : 
Submit.addEventListener("click",(e) =>{
    if(Fname.value == ""){
        e.preventDefault();
        Fname.setAttribute("style" , "color:red; border: 1px red solid ;")  ;
        Erreur_Fname.innerText = "Name is required";
        Erreur_Fname.setAttribute("style" , "color:red;font-size: 9px;");
    }
    else{
        Fname.setAttribute("style" , "color:black; border: 1px green solid ;")  ;
        Erreur_Fname.innerText = "";
    }
})

// email : 
Submit.addEventListener("click",(e) =>{
    if(Email.value == ""){
        e.preventDefault();
        Email.setAttribute("style" , "color:red; border: 1px red solid ;")  ;
        Erreur_email.innerText = "Email is required";
        Erreur_email.setAttribute("style" , "color:red;font-size: 9px;");
    }
    else{
        Email.setAttribute("style" , "color:black; border: 1px green solid ;")  ;
        Erreur_email.innerText = "";
    }
})
// Phone : 
Submit.addEventListener("click",(e) =>{
    if(Phone.value == ""){
        e.preventDefault();
        Phone.setAttribute("style" , "color:red; border: 1px red solid ;")  ;
        Erreur_phone.innerText = "Phone Number is required";
        Erreur_phone.setAttribute("style" , "color:red;font-size: 9px;");
    }
    else{
        Phone.setAttribute("style" , "color:black; border: 1px green solid ;")  ;
        Erreur_phone.innerText = "";
    }
})
// Adresse : 
Submit.addEventListener("click",(e) =>{
    if(Adresse.value == ""){
        e.preventDefault();
        Adresse.setAttribute("style" , "color:red; border: 1px red solid ;")  ;
        Erreur_adresse.innerText = "Adresse Cant be blank";
        Erreur_adresse.setAttribute("style" , "color:red;font-size: 9px;");
    }
    else{
        Adresse.setAttribute("style" , "color:black; border: 1px green solid ;")  ;
        Erreur_adresse.innerText = "";
    }
})