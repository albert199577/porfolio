let nav = document.querySelector("nav");
let navAnchor = document.querySelectorAll("nav ul li a");
let logo = document.querySelector(".logo");
const home = document.querySelector("#home");
const about = document.querySelector("#about");
const portfolio = document.querySelector("#portfolio");
const contact = document.querySelector("#contact");
let navTag = document.querySelectorAll("nav ul li a[href]");

console.log(navTag[0]);
//nav bar color switch
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

//nav bar a tag text underline
window.addEventListener("scroll", () => {
    let windowY = window.pageYOffset;
    console.log(home.offsetTop);
    console.log(about.offsetTop);
    console.log(window.pageYOffset);
    if (windowY >= 0 || windowPage < about.offsetTop) {
        clear_underline();
        navTag[0].classList.add("nav-scroll-underline");
    } else if (windowPage >= about.offsetTop || windowPage < portfolio.offsetTop) {
        clear_underline();
        navTag[1].classList.add("nav-scroll-underline");
    } else if (windowPage >= portfolio.offsetTop || windowPage < contact.offsetTop) {
        clear_underline();
        navTag[2].classList.add("nav-scroll-underline");
    }
    //   switch (windowPage) {
    //     case 0:
    //       clear_underline();
    //       navTag[0].classList.add("nav-scroll-underline");
    //       console.log("aaa");
    //       break;
    //     case about.offsetTop:
    //       clear_underline();
    //       navTag[1].classList.add("nav-scroll-underline");
    //       console.log("aaa");
    //       break;
    //     case portfolio.offsetTop:
    //       clear_underline();
    //       navTag[2].classList.add("nav-scroll-underline");
    //       console.log("aaa");
    //       break;
    //     case contact.offsetTop:
    //       clear_underline();
    //       navTag[3].classList.add("nav-scroll-underline");
    //       console.log("aaa");
    //       break;
    //   }
});

function clear_underline() {
    navTag.forEach(e => {
        e.classList.remove("nav-scroll-underline");
    })
} 


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

