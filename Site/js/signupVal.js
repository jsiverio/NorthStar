const form = document.getElementById("signupForm")
const firstname = document.getElementById("firstNameInput")
const lastname = document.getElementById("lastNameInput")
const badge = document.getElementById("badgeInput")
const email = document.getElementById("emailInput")

//Erro Feedback Elements
const firstnameerr = document.getElementById("firstNameErr")
const lastnameerr = document.getElementById("lastNameErr")
const badgeerr = document.getElementById("badgeErr")
const emailerr = document.getElementById("emailErr")

form.addEventListener("submit", (e)=>{
if(!form.checkValidity()){
    e.preventDefault()
    if(firstname.validity.valueMissing){
        firstnameerr.innerHTML = "This field is required"
    }
    if(lastname.validity.valueMissing) {
        lastnameerr.innerHTML = "This field is required"
    }
    if(badge.validity.valueMissing) {
        badgeerr.innerHTML = "This field is required"
    }
    if(email.validity.valueMissing) {
        emailerr.innerHTML = "This field is required"
    }
    if(email.validity.typeMismatch) {
        emailerr.innerHTML = "Invalid email"
    }
}
})
firstname.addEventListener("change", (e)=>{
    if (!firstname.validity.valueMissing){
        firstnameerr.innerHTML = ''
    }
})
lastname.addEventListener("change", (e)=>{
    if (!lastname.validity.valueMissing){
        lastnameerr.innerHTML = ''
    }
})
badge.addEventListener("change", (e)=>{
    if (!badge.valueMissing){
        badgeerr.innerHTML = ''
    }
})
email.addEventListener("change", (e)=>{
    if (!email.validity.valueMissing){
        emailerr.innerHTML = ''
    }
})
email.addEventListener("change", (e)=>{
    if (!email.validity.typeMismatch){
        emailerr.innerHTML = ''
    }
})



