
    const form = document.getElementById("signinForm")
    const email = document.getElementById("emailInput")
    const emailErrorMsg = document.getElementById("emailErr")
    form.addEventListener('submit', (e) => {
        if(email.value === '' || email.value === null){
            email.classList.add('is-invalid')
            emailErrorMsg.classList.replace("valid-feedback","invalid-feedback")
            emailErrorMsg.innerHTML = "Please enter a valid email"
        }
        e.preventDefault()
        email.addEventListener('change', (e) =>{
            if(emailErrorMsg.className === "invalid-feedback"){
                emailErrorMsg.classList.replace("invalid-feedback","valid-feedback")
                email.classList.remove("is-invalid")
            }

        })
    })
