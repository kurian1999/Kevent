const regForm = document.querySelector("#reg-form");
const compname = document.querySelector("#text");
const phoneno = document.querySelector("#phname");
const city = document.querySelector("#ctyname");
const state = document.querySelector("#stname");
const pincode = document.querySelector("#zipid");
const Tinno = document.querySelector("#tincerfid");
const Vatno = document.querySelector("#vatcerfid");
const Serno = document.querySelector("#sercerfid");
const Username = document.querySelector("#user");
const Password = document.querySelector("#pass");



const CompNameError = document.querySelector(".comp .error");
const PhonenoError = document.querySelector(".phoname .error");
const CitynameError = document.querySelector(".cityna .error");
const StateError = document.querySelector(".statena .error");
const PincodeError = document.querySelector(".zipna .error");
const TinnoError = document.querySelector(".tinna .error");
const VatnoError = document.querySelector(".vatna .error");
const SernoError = document.querySelector(".serna .error");
const UsernameError = document.querySelector(".userna .error");
const PassError = document.querySelector(".passna .error");


compname.addEventListener("input", () => {
    if (compname.value == "") {
        CompNameError.classList.add("error-visible");
        CompNameError.classList.remove("error-hidden");
        CompNameError.innerText = "Field cannot be blank";

    }
    else if (compname.value !== "") {
        CompNameError.classList.remove("error-visible");
        CompNameError.classList.add("error-hidden");
        CompNameError.innerText = "";
    }
});


// phone number validation
var numberphChk = /^([0-9_\-]{10,13})+$/;
phoneno.addEventListener("input", () => {
    if (phoneno.value.match(numberphChk)) {
        PhonenoError.classList.add("error-hidden");
        PhonenoError.classList.remove("error-visible");

    } else if (phoneno.value == "") {
        PhonenoError.classList.add("error-visible");
        PhonenoError.classList.remove("error-hidden");
        PhonenoError.innerText = "Field cannot be blank";

    }
     else if (phoneno.value !== "") {
        PhonenoError.classList.remove("error-visible");
        PhonenoError.classList.add("error-hidden");
        PhonenoError.innerText = "";

    } 
    else {
        PhonenoError.classList.add("error-visible");
        PhonenoError.classList.remove("error-hidden");
        PhonenoError.innerText = "Invalid number";

    }
});

//city validation
var nameChk = /^[a-z A-Z]+$/;
city.addEventListener("input", () => {
    if (city.value.match(nameChk)) {
        CitynameError.classList.add("error-hidden");
        CitynameError.classList.remove("error-visible");

    } else if (city.value == "") {
        CitynameError.classList.add("error-visible");
        CitynameError.classList.remove("error-hidden");
        CitynameError.innerText = "Field cannot be blank";

    }
    else if (city.value !== "") {
        CitynameError.classList.remove("error-visible");
        CitynameError.classList.add("error-hidden");
        CitynameError.innerText = "";

    } 
    else {
        CitynameError.classList.add("error-visible");
        CitynameError.classList.remove("error-hidden");
        CitynameError.innerText = "invalid city";

    }
});

// state validation
state.addEventListener("input", () => {
    if (state.value.match(nameChk)) {
        StateError.classList.add("error-hidden");
        StateError.classList.remove("error-visible");

    } else if (state.value == "") {
        StateError.classList.add("error-visible");
        StateError.classList.remove("error-hidden");
        StateError.innerText = "Field cannot be blank";

    }
    else if (state.value !== "") {
        StateError.classList.remove("error-visible");
        StateError.classList.add("error-hidden");
        StateError.innerText = "";

    } 
    else {
        StateError.classList.add("error-visible");
        StateError.classList.remove("error-hidden");
        StateError.innerText = "invalid state";

    }
});

//pincode validation
var pinChk = /^\d{6}$/;
pincode.addEventListener("input", () => {
    if (pincode.value.match(pinChk)) {
        PincodeError.classList.add("error-hidden");
        PincodeError.classList.remove("error-visible");

    } else if (pincode.value == "") {
        PincodeError.classList.add("error-visible");
        PincodeError.classList.remove("error-hidden");
        PincodeError.innerText = "Field cannot be blank";

    }
    else if (pincode.value !== "") {
        PincodeError.classList.remove("error-visible");
        PincodeError.classList.add("error-hidden");
        PincodeError.innerText = "";

    } 
    else {
        PincodeError.classList.add("error-visible");
        PincodeError.classList.remove("error-hidden");
        PincodeError.innerText = " invalid pincode";

    }
});


// tinno validation

Tinno.addEventListener("input", () => {
    if (Tinno.value.match(numberphChk)) {
        TinnoError.classList.add("error-hidden");
        TinnoError.classList.remove("error-visible");

    } else if (Tinno.value == "") {
        TinnoError.classList.add("error-visible");
        TinnoError.classList.remove("error-hidden");
        TinnoError.innerText = "Field cannot be blank";

    }
    else if (Tinno.value !== "") {
        TinnoError.classList.remove("error-visible");
        TinnoError.classList.add("error-hidden");
        TinnoError.innerText = "";

    }  
    else {
        TinnoError.classList.add("error-visible");
        TinnoError.classList.remove("error-hidden");
        TinnoError.innerText = "Name should not contain character";

    }
});

//vatno validation
Vatno.addEventListener("input", () => {
    if (Vatno.value.match(numberphChk)) {
        VatnoError.classList.add("error-hidden");
        VatnoError.classList.remove("error-visible");

    } else if (Vatno.value == "") {
        VatnoError.classList.add("error-visible");
        VatnoError.classList.remove("error-hidden");
        VatnoError.innerText = "Field cannot be blank";

    }
    else if (Vatno.value !== "") {
        VatnoError.classList.remove("error-visible");
        VatnoError.classList.add("error-hidden");
        VatnoError.innerText = "";

    }  
    else {
        VatnoError.classList.add("error-visible");
        VatnoError.classList.remove("error-hidden");
        VatnoError.innerText = "invalid validno";

    }
});

//ser number validation

Serno.addEventListener("input", () => {
    if (Serno.value.match(numberphChk)) {
        SernoError.classList.add("error-hidden");
        SernoError.classList.remove("error-visible");

    } else if (Serno.value == "") {
        SernoError.classList.add("error-visible");
        SernoError.classList.remove("error-hidden");
        SernoError.innerText = "Field cannot be blank";

    }
    else if (Serno.value !== "") {
        SernoError.classList.remove("error-visible");
        SernoError.classList.add("error-hidden");
        SernoError.innerText = "";

    } 
    else {
        SernoError.classList.add("error-visible");
        SernoError.classList.remove("error-hidden");
        SernoError.innerText = "Name should not contain character";

    }
});


//username 

var emailChk = /^(([A-Za-z0-9]+_+)|([A-Za-z0-9]+\-+)|([A-Za-z0-9]+\.+)|([A-Za-z0-9]+\++))*[A-Za-z0-9]+@((\w+\-+)|(\w+\.))*\w{1,63}\.[a-zA-Z]{2,6}$/;
Username.addEventListener("input", () => {
    if (Username.value.match(emailChk)) {
        UsernameError.classList.add("error-hidden");
        UsernameError.classList.remove("error-visible");

    } else if (Username.value == "") {
        UsernameError.classList.add("error-visible");
        UsernameError.classList.remove("error-hidden");
        UsernameError.innerText = "Field cannot be blank";

    } else {
        UsernameError.classList.add("error-visible");
        UsernameError.classList.remove("error-hidden");
        UsernameError.innerText = "Invalid mail id";

    }
});

//password

var passChk = /^[a-zA-Z0-9!@#$%^&*]{6,20}$/;
Password.addEventListener("input", () => {
    if (Password.value.match(passChk)) {
        PassError.classList.add("error-hidden");
        PassError.classList.remove("error-visible");

    } else if (Password.value == "") {
        PassError.classList.add("error-visible");
        PassError.classList.remove("error-hidden");
        PassError.innerText = "Field cannot be blank";

    } else {
        PassError.classList.add("error-visible");
        PassError.classList.remove("error-hidden");
        PassError.innerText = "password should contain atleast one number and one special character";

    }
});