const regForm = document.querySelector("#reg-form");
const evename = document.querySelector("#ename-id");
const evetype = document.querySelector("#etype-id");
const evedes = document.querySelector("#edes-id");
const evecap = document.querySelector("#ecap-id");
const eveprice = document.querySelector("#eprice-id");
const evedura = document.querySelector("#edura-id");
const evedate = document.querySelector("#edate-id");
const regSubBtn = document.querySelector("#reg-btn");
console.log(regSubBtn);

//Error Message Class
const EveNameError = document.querySelector(".evname .error");
const EveTypeError = document.querySelector(".evtype .error");
const EveDesError = document.querySelector(".evdes .error");
const EveCapError = document.querySelector(".evcap .error");
const EvePriceError = document.querySelector(".evprice .error");
const EveDuraError = document.querySelector(".evdura .error");
const EveDateError = document.querySelector(".evdate .error");
var EveNameSubmit = false;
var EveTypeSubmit = false;
var EveDessubmit = false;
var EveCapsubmit = false;
var EvePriceSubmit = false;
var EveDuraSubmit = false;
var EveDateSubmit = false;

//Event name Validation
var nameChk = /^[a-z A-Z]+$/;
evename.addEventListener("input", () => {
    console.log("hello");
    if (evename.value.match(nameChk)) {
        EveNameError.classList.add("error-hidden");
        EveNameError.classList.remove("error-visible");
        EveNameSubmit = true;
    } else if (evename.value == "") {
        EveNameError.classList.add("error-visible");
        EveNameError.classList.remove("error-hidden");
        EveNameError.innerText = "Field cannot be blank";
        EveNameSubmit = false;
    } else {
        EveNameError.classList.add("error-visible");
        EveNameError.classList.remove("error-hidden");
        EveNameError.innerText = "Name should not contain numbers";
        EveNameSubmit = false;
    }
});
//Event Type Error
evetype.addEventListener("input", () => {
    if (evetype.value.match(nameChk)) {
        EveTypeError.classList.add("error-hidden");
        EveTypeError.classList.remove("error-visible");
        EveTypeSubmit = true;
    } else if (evetype.value == "") {
        EveTypeError.classList.add("error-visible");
        EveTypeError.classList.remove("error-hidden");
        EveTypeError.innerText = "Field cannot be blank";
        EveTypeSubmit = false;
    } else {
        EveTypeError.classList.add("error-visible");
        EveTypeError.classList.remove("error-hidden");
        EveTypeError.innerText = "Name should not contain numbers";
        EveTypeSubmit = false;
    }
});

// Event Description error
evedes.addEventListener("input", () => {
    if (evedes.value.match(nameChk)) {
        EveDesError.classList.add("error-hidden");
        EveDesError.classList.remove("error-visible");
        EveDessubmit = true;
    } else if (evedes.value == "") {
        EveDesError.classList.add("error-visible");
        EveDesError.classList.remove("error-hidden");
        EveDesError.innerText = "Field cannot be blank";
        EveDessubmit = false;
    } else {
        EveDesError.classList.add("error-visible");
        EveDesError.classList.remove("error-hidden");
        EveDesError.innerText = "Name should not contain numbers";
        EveDessubmit = false;
    }
});
//Event capacity validation
var numChk = /^\d*(\.\d+)?$/;
evecap.addEventListener("input", () => {
    if (evecap.value == "") {
        EveCapError.classList.add("error-visible");
        EveCapError.classList.remove("error-hidden");
        EveCapError.innerText = "Field cannot be blank";
        EveCapsubmit = false;
    }
});

//Event price validation
eveprice.addEventListener("input", () => {
    if (eveprice.value == "") {
        EvePriceError.classList.add("error-visible");
        EvePriceError.classList.remove("error-hidden");
        EvePriceError.innerText = "Field cannot be blank";
        EvePriceSubmit = false;
    }
});
//duration validation
// var timeChk = /^(2[0-3]|[0-1]?[\d]):[0-5][\d]:[0-5][\d]$/;
evedura.addEventListener("input", () => {
    if (evedura.value == "") {
        EveDuraError.classList.add("error-visible");
        EveDuraError.classList.remove("error-hidden");
        EveDuraError.innerText = "Field cannot be blank";
        EveDuraSubmit = false;
    } else if (evedura.value !== "") {
        EveDuraError.classList.remove("error-visible");
        EveDuraError.classList.add("error-hidden");
        EveDuraError.innerText = "";
        EveDuraSubmit = false;
    }
});

//date vaildation
var dateChk = /^([0-9]{2})-([0-9]{2})-([0-9]{4})$/;
evedate.addEventListener("input", () => {
    if (evedate.value.match(dateChk)) {
        EveDateError.classList.add("error-hidden");
        EveDateError.classList.remove("error-visible");
        EveDateSubmit = true;
    } else if (evedate.value == "") {
        EveDateError.classList.add("error-visible");
        EveDateError.classList.remove("error-hidden");
        EveDateError.innerText = "Field cannot be blank";
        EveDateSubmit = false;
    } else {
        EveDateError.classList.add("error-visible");
        EveDateError.classList.remove("error-hidden");
        EveDateError.innerText = "";
        EveDateSubmit = false;
    }
});

const wDatePicker = document.querySelector("#edate-id");
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1; //January is 0 so need to add 1 to make it 1!
var yyyy = today.getFullYear();
if (dd < 10) {
    dd = '0' + dd
}
if (mm < 10) {
    mm = '0' + mm
}

today = yyyy + '-' + mm + '-' + dd;
wDatePicker.setAttribute("min", today);


// const buttonCursor = document.querySelector(".button");//To avoid poniterevent and cursor problem
// regForm.addEventListener("keyup", () => {
//     console.log(EveNameSubmit);
//     if (EveNameSubmit == true && EveTypeSubmit == true && EveDessubmit == true && EveCapsubmit == true && EvePriceSubmit == true && EveDuraSubmit == true && EveDateSubmit == true) {
//         regSubBtn.classList.remove("disabled");
//         buttonCursor.classList.remove("cursor-disabled");
//     } else {
//         regSubBtn.classList.add("disabled");
//         buttonCursor.classList.add("cursor-disabled");
//     }
// });
