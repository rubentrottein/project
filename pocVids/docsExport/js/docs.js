let user = "kevin";

for(let selector of document.querySelectorAll(".select")){
    selector.addEventListener("click", setUser);
    
}


/** Developpement (affichage complet)*/
(function dev(){
for(let student of document.querySelectorAll(".student"))
    student.style.display = "block";
})()
document.querySelector(".dashboard").style.display = "none";
/** */

function setUser(){
    user = prompt("Afficher les documents de cours pour quel élève?");
    if(user==="kevin"||user==="Kevin"||user==="Kévin"||user==="kévin"){
        document.querySelector("#kevin").style.display ="block";
        document.querySelectorAll(".select")[1].style.display ="none";
    } else {
        alert("Eleve inconnu. Saisissez le prénom sans accents ni majuscules.")
    }
}
/*
(function start(){
    let progresses = document.querySelectorAll("progress")
    for(let i=0;i<progresses.length;i++){
        document.querySelectorAll("li")[i].innerHTML += progresses[i].value +"%";
    }
})()
*/
(function autoDashboard(){
    const sections = document.querySelectorAll("section");
    const articles = document.querySelectorAll("article h3");
    for(let i=0; i<sections.length;i++){
        let newLink = document.createElement("a");
        newLink.href= "#"+sections[i].id;
        newLink.innerHTML = articles[i].textContent;
    }
})()