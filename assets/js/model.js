var btnModl = document.getElementById("modlbtn");
var Modeel = document.querySelector(".invisible");
var Fermer = document.querySelector(".btn-close");

btnModl.addEventListener('click' ,function(){
        console.log("ddddd");
    Modeel.classList.remove("invisible");
})
Fermer.addEventListener('click',function(){
    Modeel.classList.add("invisible");
})



