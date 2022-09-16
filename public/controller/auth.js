const nameInput = document.getElementById("nameInput")
const passwordInput = document.getElementById("passwordInput")
const submitBtn = document.getElementById("submitBtn")

const formValidStatus = {
    name: false,
    password: false,
}

const checkFormValidate = () => {
    if ((formValidStatus.name && formValidStatus.password)) {
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
passwordInput.addEventListener('input', e => {
    if (e.target.value.trim().length > 5) formValidStatus.password = true 
    else formValidStatus.password = false
    checkFormValidate()
})

checkFormValidate()
