let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar'); 

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

var swiper = new Swiper(".home-slider", {
    loop:true,
    navigation: {
      nextEl: ".swiper-button-next",    
      prevEl: ".swiper-button-prev",
    },
});

//não funciona 
const btnLogin = document.querySelector(".form-btn");
const form = document.querySelector("form");

btnLogin.addEventListener("click", event => {
    event.preventDefault();
    form.classList.add("form-hide");
});



