const nameInput = document.getElementById("nameInput")
const titleInput = document.getElementById("titleInput")
const fileInput = document.getElementById("formFile")
const submitBtn = document.getElementById("submitBtn")

const formValidStatus = {
    name: false,
    title: false,
    file: false,
}

const checkFormValidate = () => {
    if ((formValidStatus.name && formValidStatus.title) && formValidStatus.file) {
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
titleInput.addEventListener('input', e => {
    if (e.target.value.trim().length > 3) formValidStatus.title = true 
    else formValidStatus.title = false
    checkFormValidate()
})
fileInput.addEventListener('change', e => {
    if (e.target.value.trim() != '') formValidStatus.file = true 
    else formValidStatus.file = false
    checkFormValidate()
})

checkFormValidate()