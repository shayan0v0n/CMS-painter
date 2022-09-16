const locationInput = document.getElementById("locationInput")
const placeInput = document.getElementById("placeInput")
const dateInput = document.getElementById("dateInput")
const submitBtn = document.getElementById("submitBtn")

const formValidStatus = {
    locationInput: false,
    placeInput: false,
    dateInput: false,
}

const checkFormValidate = () => {
    if ((formValidStatus.name && formValidStatus.title) && formValidStatus.file) {
        submitBtn.classList.remove('disabled')
    }else {
        submitBtn.classList.add('disabled')
    }
}

locationInput.addEventListener('input', e => {
    if (e.target.value.trim().length > 3) formValidStatus.name = true 
    else formValidStatus.name = false
    checkFormValidate()
})
placeInput.addEventListener('input', e => {
    if (e.target.value.trim().length > 3) formValidStatus.title = true 
    else formValidStatus.title = false
    checkFormValidate()
})
dateInput.addEventListener('input', e => {
    if (e.target.value.trim().length > 3) formValidStatus.file = true 
    else formValidStatus.file = false
    checkFormValidate()
})

checkFormValidate()