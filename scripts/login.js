const form =document.getElementsByName("form")[0]
const username =document.getElementsByName("username")[0]
const password1 =document.getElementsByName("password_1")[0]
const password2 =document.getElementsByName("password_2")[0]
const email =document.getElementsByName("email")[0]

form.addEventListener("submit",function(e){
    if(!checkInputs()){
        e.preventDefault()
    }
})


function checkInputs(){
    const emailValue=email.value.trim()
    const password1Value=password1.value
    const password2Value=password2.value
    const usernameValue=username.value

    if(usernameValue === ''){
        setErrorFor(username, 'Numele de utilizator trebuie completat')
        return false
    }
    else{
        setSuccessFor(username)
    }

    if(emailValue === ''){
        setErrorFor(email, 'Emailul trebuie completat')
        return false
    }
    else if(!isValidEmail(emailValue)){
        setErrorFor(email,'Emailul nu este valid')
        return false
    }
    else{
        setSuccessFor(email)
    }

    if(password1Value === ''){
        setErrorFor(password1, 'Parola trebuie completata')
        return false
    }
    else if(password1Value.length < 8){
        setErrorFor(password1,'Parola trebuie sa aiba minim 8 caractere')
        return false
    }
    else{
        setSuccessFor(password1)
    }

    if(password1Value !== password2Value){
        setErrorFor(password2, 'Parolele trebuie sa conincida')
        return false
    }
    else{
        setSuccessFor(password2)
    }
    return true
}

function setErrorFor(input,message){
    const formControl=input.parentElement
    const small=formControl.querySelector('small')

    small.innerText=message
    formControl.className="form-control error"
}

function setSuccessFor(input){
    const formControl=input.parentElement
    formControl.className="form-control success"
}

function isValidEmail(email){
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}