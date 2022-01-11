let nav = document.querySelector("nav");

let navAnchor = document.querySelectorAll("nav ul li a");

window.addEventListener("scroll", () => {
    if (window.pageYOffset != 0) {
        nav.style.backgroundColor = "rgba(0, 0, 0, .3)";
        nav.style.color = "white";
        navAnchor.forEach( a => {
            a.style.color = "white";
        });
    } else {
        nav.style = "";
        navAnchor.forEach( a => {
            a.style.color = "#09777d";
        });
    }
})
//option list switch
let optionBtn = document.querySelectorAll("ul.protfolio-list-menu li");

optionBtn.forEach(e => {
    e.addEventListener("click", () => {
        clear_color();
        e.style.color = "#149ddd";
    })
});

function clear_color() {
    optionBtn.forEach(e => {
        e.style.color = "black";
    });
} 


//nav responsive
let nav_list = document.querySelector(".menu");
let btn = document.querySelector(".icon");
btn.addEventListener("click", () => {
    nav_list.classList.toggle("responsive");
})

