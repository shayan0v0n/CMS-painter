const titleInput = document.getElementById("titleInput")
const fileInput = document.getElementById("fileInput")
const submitBtn = document.getElementById("submitBtn")

const formValidStatus = {
    title: false,
    file: false
}

const checkFormValidate = () => {
    if (formValidStatus.title && formValidStatus.file) {
        submitBtn.classList.remove('disabled')
    }else {
        submitBtn.classList.add('disabled')
    }
}

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