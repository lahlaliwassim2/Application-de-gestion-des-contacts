let Name = document.getElementById("name");
let Password = document.getElementById("passw");
let confpas = document.getElementById("confpas");
let Submit= document.getElementById("btn");
let erorN = document.getElementById("erorN");
let erorP = document.getElementById("erorP");
let erorPP = document.getElementById("erorPP");
let Usn1 = document.getElementById("Usn1");
let bttn = document.getElementById("bttn");
let pssw = document.getElementById("pssw");
// console.log("wassim");

Submit.addEventListener("click", (e) =>{
    console.log("wazds");
if(Name.value==""){
        e.preventDefault();
        Name.setAttribute("style","color:red;border:1px solid red ");
        console.log("fsgsrfgh");
        erorN.innerHTML="entrer votre nom";
        erorN.setAttribute("style","color:red");
       
}
else{
    Name.setAttribute("style","color:green");
    erorN.innerHTML="";
   
}
})
Submit.addEventListener("click", (e)=>{
    if(Password.value==""){
        Password.setAttribute("style","color:red;border:1px solid red ");
        erorP.innerHTML="entrer votre password";
        erorP.setAttribute("style","color:red");
    }
    else{
        Password.setAttribute("style","color:green");
        erorP.innerHTML="";
        
    }
})
Submit.addEventListener("click",(e)=>{
    if(confpas.value==""){
        confpas.setAttribute("style","color:red;border:1px solid red ");
        erorPP.innerHTML="remplire le champ "
        erorPP.setAttribute("style","color:red");
    }
    else{
        confpas.setAttribute("style","color:green");
        erorPP.innerHTML="";
    }

})
bttn.addEventListener("click",(e)=>{
    console.log("sssss");
    if(Usn1.value==""){
        Usn1.setAttribute("style","color:red;border:1px solid red")
    }
})
