const navAnchor = document.querySelectorAll(".nav-flex ul li a");
const nav = document.querySelector(".nav-flex");
const logo = document.querySelector(".logo");

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

//nav responsive
let nav_list = document.querySelector(".menu");
let btn = document.querySelector(".icon");
btn.addEventListener("click", () => {
    nav_list.classList.toggle("responsive");
})


//check manager login
const checkLogin = async() => {
    let formData = {
        account: $("#account").val(),
        password: $("#password").val(),
    };
    let data = await fetch("./api/check_login.php", {
        method: "POST",
        body: JSON.stringify(formData),
        headers: new Headers({
            "Content-type": "application/json"
        })
    });
    let parseData = await data.json();
    console.log(parseData);
    if (parseData) {
        location.href = "backstage.php?do=manage";
    } else {
        $("#error").text("帳號密碼錯誤, 請重新輸入");
    }
}