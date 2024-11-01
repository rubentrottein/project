let accordion = document.querySelector(".accordion");
let content = document.querySelector(".content");
let open = document.querySelector(".open");

accordion.addEventListener("click", function() {
    content.classList.toggle('open');
})