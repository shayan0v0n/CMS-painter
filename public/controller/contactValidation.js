const nameInput = document.getElementById("nameInput")
const emailInput = document.getElementById("emailInput")
const subjectInput = document.getElementById("subjectInput")
const messageInput = document.getElementById("messageInput")
const submitBtn = document.getElementById("submitBtn")

const formValidStatus = {
    name: false,
    email: false,
    subjectInput: false,
    messageInput: false
}

const checkFormValidate = () => {
    if ((formValidStatus.name && formValidStatus.email) &&
     (formValidStatus.subjectInput && formValidStatus.messageInput)) {
        submitBtn.classList.remove('disabled')
    }else {
        submitBtn.classList.add('disabled')
    }
}

nameInput.addEventListener('input', e => {
    if (e.target.value.trim().length > 5) formValidStatus.name = true 
    else formValidStatus.name = false
    checkFormValidate()
})
emailInput.addEventListener('input', e => {
    if (e.target.value.trim().length > 5) formValidStatus.email = true 
    else formValidStatus.email = false
    checkFormValidate()
})
subjectInput.addEventListener('input', e => {
    if (e.target.value.trim().length > 5) formValidStatus.subjectInput = true 
    else formValidStatus.subjectInput = false
    checkFormValidate()
})
messageInput.addEventListener('input', e => {
    if (e.target.value.trim().length > 5) formValidStatus.messageInput = true 
    else formValidStatus.messageInput = false
    checkFormValidate()
})

checkFormValidate()