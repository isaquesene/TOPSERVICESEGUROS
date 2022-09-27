const btnLogin = document.querySelector("form-btn");
const form = document.querySelector("form");

btnLogin.addEventListener("click", event => {
    event.preventDefault();
    form.classList.add("form-hide");
});



const ulcubo = document.querySelector("ul.cubo");   
for (let i = 0; i < 11; i++){
    const li = document.createElement("li");

    const size = Math.floor(Math.random() * (120 - 10) + 10);

    li.style.width = `${size}px`;
    li.style.height = `${size}px`;
    li.style.bottom = `-${size}px`;

    ulcubo.appendChild(li);
}