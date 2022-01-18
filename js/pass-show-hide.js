const pswrdField = document.querySelector(".form input[type='password']")
const toggleIcon = document.querySelector(".form .field i");
console.log(toggleIcon);
toggleIcon.onclick = () => {
    if (pswrdField.type === "password") {
        pswrdField.type = "text";
        toggleIcon.classList.add("active");
    } else {
        pswrdField.type = "password";
        toggleIcon.classList.remove("active");
    }
}