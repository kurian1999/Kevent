const regForm = document.querySelector("#reg-form");
const fullName = document.querySelector("#full-name");
const email = document.querySelector("#email-id");
const pass = document.querySelector("#pass-word")
const regSubBtn = document.querySelector("#reg-btn");

//Error Message Class
const fullNameError = document.querySelector(".name .error");
const emailError = document.querySelector(".email .error");
const passError = document.querySelector(".password .error");
var fullNameSubmit = false;
var emailSubmit = false;
var passsubmit = false;

//Fullname Validation
var nameChk = /^[a-z A-Z]+$/;
fullName.addEventListener("input", () => {
    if (fullName.value.match(nameChk)) {
        fullNameError.classList.add("error-hidden");
        fullNameError.classList.remove("error-visible");
        fullNameSubmit = true;
    } else if (fullName.value == "") {
        fullNameError.classList.add("error-visible");
        fullNameError.classList.remove("error-hidden");
        fullNameError.innerText = "Field cannot be blank";
        fullNameSubmit = false;
    } else {
        fullNameError.classList.add("error-visible");
        fullNameError.classList.remove("error-hidden");
        fullNameError.innerText = "Name should not contain numbers";
        fullNameSubmit = false;
    }
});

// //Email Validation
var emailChk = /^(([A-Za-z0-9]+_+)|([A-Za-z0-9]+\-+)|([A-Za-z0-9]+\.+)|([A-Za-z0-9]+\++))*[A-Za-z0-9]+@((\w+\-+)|(\w+\.))*\w{1,63}\.[a-zA-Z]{2,6}$/;
email.addEventListener("input", () => {
    if (email.value.match(emailChk)) {
        emailError.classList.add("error-hidden");
        emailError.classList.remove("error-visible");
        emailSubmit = true;
    } else if (email.value == "") {
        emailError.classList.add("error-visible");
        emailError.classList.remove("error-hidden");
        emailError.innerText = "Field cannot be blank";
        emailSubmit = false;
    } else {
        emailError.classList.add("error-visible");
        emailError.classList.remove("error-hidden");
        emailError.innerText = "Invalid mail id";
        emailSubmit = false;
    }
});
//password validation
var passChk = /^[a-zA-Z0-9!@#$%^&*]{6,20}$/;
pass.addEventListener("input", () => {
    if (pass.value.match(passChk)) {
        passError.classList.add("error-hidden");
        passError.classList.remove("error-visible");
        passsubmit = true;
    } else if (pass.value == "") {
        passError.classList.add("error-visible");
        passError.classList.remove("error-hidden");
        passError.innerText = "Field cannot be blank";
        passsubmit = false;
    } else {
        passError.classList.add("error-visible");
        passError.classList.remove("error-hidden");
        passError.innerText = "password should contain atleast one number and one special character";
        passsubmit = false;
    }
});
//Submit Button Visibility
const buttonCursor = document.querySelector(".button");//To avoid poniterevent and cursor problem
regForm.addEventListener("keyup", () => {
    console.log(fullNameSubmit,emailSubmit,passsubmit);
    if (fullNameSubmit == true && emailSubmit == true && passsubmit==true) {
        regSubBtn.classList.remove("disabled");
        buttonCursor.classList.remove("cursor-disabled");
    } else {
        regSubBtn.classList.add("disabled");
        buttonCursor.classList.add("cursor-disabled");
    }
});

// //========================End============================


// //===================Alert Box Close====================
// const alertt = document.querySelector(".alertt");
// const alertClose = document.querySelector(".alert-close");
// console.log(alertClose);
// console.log(alertt);

// // regSubBtn.addEventListener("click",()=>{
// //     alertt.classList.remove("alert-hidden");
// //     alertt.classList.add("alert-visible");
// //     console.log("submit");
// // });

// alertClose.addEventListener("click", () => {
//     alertt.classList.remove("alert-visible");
//     alertt.classList.add("alert-hidden");
// });