const email = document.querySelector("#e_mail");
const pass = document.querySelector("#pass-word")

// error message
const emailError = document.querySelector(".email .error");
const passError = document.querySelector(".password .error");
var emailSubmit = false;
var passsubmit = false;

// //Email Validation
email.addEventListener("input", () => {
    if (email.value == "") {
        emailError.classList.add("error-visible");
        emailError.classList.remove("error-hidden");
        emailError.innerText = "Field cannot be blank";
        emailSubmit = false;
    }
    else if (email.value != "") {
        emailError.classList.remove("error-visible");
        emailError.classList.add("error-hidden");
        emailError.innerText = "";
        emailSubmit = true;
    }
});

//password validation
pass.addEventListener("input", () => {
    if (pass.value == "") {
        passError.classList.add("error-visible");
        passError.classList.remove("error-hidden");
        passError.innerText = "Field cannot be blank";
        passsubmit = false;
    }
    else if (pass.value !== "") {
        passError.classList.remove("error-visible");
        passError.classList.add("error-hidden");
        passError.innerText = "";
        passsubmit = true;
    }
});