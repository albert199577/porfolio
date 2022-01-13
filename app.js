let nav = document.querySelector("nav");
let navAnchor = document.querySelectorAll("nav ul li a");
let logo = document.querySelector(".logo");

window.addEventListener("scroll", () => {
    if (window.pageYOffset != 0) {
        nav.style.backgroundColor = "rgba(0, 0, 0, .3)";
        nav.style.color = "white";
        logo.style.color = "#0a5374";
        navAnchor.forEach( a => {
            a.style.color = "white";
        });
    } else {
        nav.style = "";
        logo.style.color = "#149ddd";
        navAnchor.forEach( a => {
            a.style = "";
        });
    }
})
//option list switch
let optionBtn = document.querySelectorAll("ul.protfolio-list-menu li");

optionBtn.forEach(e => {
    e.addEventListener("click", () => {
        clear_color();
        e.classList.toggle("btn-color");

    })
});

function clear_color() {
    optionBtn.forEach(e => {
        e.classList.remove("btn-color");
    });
} 


//nav responsive
let nav_list = document.querySelector(".menu");
let btn = document.querySelector(".icon");
btn.addEventListener("click", () => {
    nav_list.classList.toggle("responsive");
})

