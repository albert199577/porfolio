let navAnchor = document.querySelectorAll("nav ul li a");
let nav = document.querySelector("nav");
let logo = document.querySelector(".logo");
const home = document.querySelector("#home");
const about = document.querySelector("#about");
const portfolio = document.querySelector("#portfolio");
const contact = document.querySelector("#contact");
let navTag = document.querySelectorAll("nav ul li a[href]");

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
    clear_underline();
    if (windowY >= 2000) {
        navTag[3].classList.add("nav-scroll-underline");
    } else if (windowY >= portfolio.offsetTop) {
        navTag[2].classList.add("nav-scroll-underline");
    } else if (windowY >= about.offsetTop) {
        navTag[1].classList.add("nav-scroll-underline");
    } else {
        navTag[0].classList.add("nav-scroll-underline");
    }
});

function clear_underline() {
    navTag.forEach(e => {
        e.classList.remove("nav-scroll-underline");
    })
}

//option list switch
let optionBtn = document.querySelectorAll("ul.portfolio-list-menu li");

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

// api 

// fetch('./api/test.php',{
//     headers: {
//         "Content-Type": "application/json"
//     } })
// .then(function (response) {
//     // console.log(response)
//     return response.json();
// })
// .then(function (data) {
//     console.log(data);
//     $("span.logo").html(data[0].name);
// });

// async function getName (table, position) {
//     let data = await fetch("./api/test.php");
//     let parseData = await data.json();
//     console.log(parseData);
//     let { name } =  parseData[0];
//     $("span.logo").html(name);
// }



const saveContact = async() => {
    let formData = {
        name: $("#name").val(),
        mail: $("#mail").val(),
        subject: $("#subject").val(),
        message: $("#exampleFormControlTextarea1").val()
    };
    try {
        const res = await fetch("./api/contact.php", {
            method: "POST",
            body: formData,
            headers: new Headers({
                "Content-type": "application/json"
            })
        });
    } catch (error) {
        console.log(" Fetch error :, error");
    }
}



// getName();

// async function manage (table, position) {
//     let data = await fetch("./api/manage.php");
//     let parseData = await data.json();
//     console.log(parseData);
//     let { name } =  parseData[0];
//     $("span.logo").html(name);
// }


