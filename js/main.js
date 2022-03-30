
// -----------------------functions for progress and nbr questions ---------------------
let prog = 0;
let nbrQues = 1;
if(nbrQues == 1){
    document.querySelector(".btn-prv").style.visibility = "hidden";
}
document.querySelector(".btn-next").addEventListener("click",()=>{
    if(prog <100){
        prog += 4.55;
        nbrQues++;
        if(nbrQues == 23){
            document.querySelector(".btn-next").classList.add("d-none");
            document.querySelector(".btn-ter").classList.remove("d-none");
        }
        document.querySelector(".progress-bar").style.width = prog+"%";
        document.querySelector(".nbr-Q").innerHTML = nbrQues +"/23";
        document.querySelector(".btn-prv").style.visibility = "visible";
    }
})
document.querySelector(".btn-prv").addEventListener("click",()=>{
    if(prog>0){
        prog -= 4.55;
        nbrQues--;
        if(nbrQues == 1){
            document.querySelector(".btn-prv").style.visibility = "hidden";
        }
        document.querySelector(".progress-bar").style.width = prog+"%";
        document.querySelector(".nbr-Q").innerHTML = nbrQues+"/23";

        document.querySelector(".btn-next").classList.remove("d-none");
            document.querySelector(".btn-ter").classList.add("d-none");
    }
})

// -----------------------functions for progress and nbr questions ---------------------

//---------------------------------- functions for check button -----------------------------
let btnCheck = document.querySelectorAll(".check");

btnCheck.forEach(btn => {
    btn.addEventListener("click",()=>{
        if(document.querySelector(".oui").className.includes("active-check")){
            document.querySelector(".oui").classList.remove("active-check");
            document.querySelector(".non").classList.add("active-check");
        }
        else if(document.querySelector(".non").className.includes("active-check")){
            document.querySelector(".non").classList.remove("active-check");
            document.querySelector(".oui").classList.add("active-check");
        }
        else{
            btn.classList.add("active-check");
        }
    })
});

//---------------------------------- functions for check button -----------------------------
