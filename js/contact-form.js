const form = document.querySelector("#form");
const yourName = document.querySelector("#name");
const email = document.querySelector("#email");
const textMessage = document.querySelector("#message");

form.addEventListener("submit", e => {
    // e.preventDefault();
    
    checkInputs();
});

function checkInputs(){
    // Trim to remove whitespaces
    const nameValue = name.value.trim();
    const emailValue = email.value.trim();
    const textMessageValue = textMessage.value.trim();

    if (nameValue === ""){
        setErrorFor(yourName, "Oops. You forgot to enter your name.");
    } else {
        setSuccessFor(yourName);
    }

    if (emailValue === ""){
        setErrorFor(email, "Please double check your email address.");
    } else {
        setSuccessFor(email);
    }

    if (textMessageValue === ""){
        setErrorFor(textMessage, "Something you forgot to say?");
    } else {
        setSuccessFor(textMessage);
    }
}

function setErrorFor(input, message){
    const formControl = input.parentElement;
    const small = formControl.querySelector("small");
    formControl.className = "form-control error";
    small.innerText = message;
}

function setSuccessFor(input){
    const formControl = input.parentElement;
    formControl.className = "form-control success";
}

function isEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}