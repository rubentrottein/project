 /*******************    nav    ********************/
 document.querySelector("header").innerHTML += `
 <nav>
     <a href="index.html">Home</a>
     <a href="articles.html">Articles</a>
     <a href="profile.html">Profil</a>
     <a href="#connexion" class="connexion">Connexion</a>
 </nav>
`
/*******************    modale de connexion    ********************/
let section = document.createElement("section");            
section.classList.add("modal")
section.innerHTML = `
 <article id="modalContent">
     <a href="#" class="connexion close">X</a>
     <h2>Connexion</h2>
     <form action="#">
         <label for="email">email
             <input type="text" name="email">
         </label>
         <label for="password">password
             <input type="password" name="password">
         </label>
         <input type="submit" value="Connexion">
         <a href="#" id="registerLink">Pas encore inscrit? s'inscrire ici</a>
     </form>
 </article>
`;
document.querySelector("body").append(section);

for(let displayButton of document.querySelectorAll(".connexion")){
 displayButton.addEventListener("click", ()=>{
 document.querySelector(".modal").classList.toggle("visible");
 })
}

document.querySelector("h1").addEventListener("click", changeVid);
//document.querySelector("h1").addEventListener("click", ()=> document.querySelector("video").autoplay = true);
let i=2
function changeVid(){
 
 document.querySelector("video").pause();
 if(i>9) {i=0}
 document.querySelector("video").src = "media/" + i + ".webm";

 i++;
}


function setUser(user){
    for(let userOccurence of document.querySelectorAll(".user")){
        userOccurence.innerHTML = user;
    }
}

setUser("Utilisateur");