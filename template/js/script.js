document.querySelector("h1").addEventListener("click", ()=>{
    fancyTheme();
})

for(let displayButton of document.querySelectorAll(".connexion")){
    let modal = document.querySelector(".modal");
    displayButton.addEventListener("click", ()=>{
        modal.classList.toggle("visible");
        modal.style.display="grid";
        console.log("Modale déployée : " + modal.classList);
        
    })
}

function fancyTheme(){
    document.querySelector("video").classList.toggle("visible");
    document.querySelector("main").classList.toggle("ogBg");
    document.querySelector("header").classList.toggle("ogHead");
}
//Scroll events

let pos = 0;
window.addEventListener("scroll", (e)=>{
    document.querySelector("body").style.backgroundPosition = "bottom " + pos + "px center";
    document.querySelector("main").style.backgroundPosition = "bottom " + pos + "px center";
    pos+=.5;
    if (scrollY > 730){
        document.querySelector("footer").style.left = 0;
        document.querySelector("footer").style.opacity = 1;
    } else {
        document.querySelector("footer").style.left = -25+"vw";
        document.querySelector("footer").style.opacity = 0;
    }
})


/* Dark Mode */
let darkMode = localStorage.getItem("darkMode");
function applyTheme(){
    document.querySelector("body").classList.toggle("darkMode");
    document.querySelector("#color_mode").checked = darkMode === true;
    for(let logo of document.querySelectorAll(".logo")){
        if(darkMode === true){
            logo.src="media/images/logo/dark.png";
        } else {
            logo.src="media/images/logo/light.png";
        }
    }
    fancyTheme();
}
for(let darkModeToggle of document.querySelectorAll(".darkModeToggle")){
    darkModeToggle.addEventListener("change", ()=>{
        darkMode = !darkMode;
        localStorage.setItem("darkMode", darkMode);
        applyTheme()
    })
}
applyTheme()


/* Video Background *
document.querySelector("h1").addEventListener("click", changeVid);
//document.querySelector("#profile").addEventListener("click", ()=> document.querySelector("video").autoplay = true);
let i=2
function changeVid(){
    
    document.querySelector("video").pause();
    if(i>9) {i=0}
    document.querySelector("video").src = i + ".webm";

    i++;
}
let testimonials = document.querySelectorAll("#testimonials figure");
let currentTestimony = 0;

/* Slider testimonials *
function initialize(){    
    
    setTimeout(()=>{
        for(let testimonial of testimonials){
            testimonial.style.display = "none";
        }
        testimonials[currentTestimony].style.display = "block";
    }
    , 1000)
}

setInterval(() => {

    for(let testimonial of testimonials){
        testimonial.style.opacity = 0;
    }
    testimonials[currentTestimony].style.opacity = 1;

    if(currentTestimony >= testimonials.length-1){ 
        currentTestimony=0;
    } else {
        currentTestimony++;
    }
    console.log(currentTestimony)
    initialize();
}, 3000);

/**/
