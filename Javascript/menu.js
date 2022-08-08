const menuHamburger = document.querySelector(".hamburger");
const navLink = document.querySelector(".nav_links");
const html = document.querySelector("html");
const body = document.querySelector("body");

menuHamburger.addEventListener('click', () =>{
    navLink.classList.toggle("mobile_menu");
    html.classList.toggle("scroll_off");
    body.classList.toggle("scroll_off");
});