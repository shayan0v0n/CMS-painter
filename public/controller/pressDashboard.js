const titleInput = document.getElementById("titleInput")
const linkInput = document.getElementById("linkInput")
const fileInput = document.getElementById("formFile")
const externalCheckbox = document.getElementById("externalCheckbox")
const linkContainer = document.getElementById("linkContainer")
const formFileContainer = document.getElementById("formFileContainer")
const submitBtn = document.getElementById("submitBtn")

let externalCheckboxStatus = false

const formValidStatus = {
    link: false,
    title: false,
    file: false,
}

const checkExternalCheckbox = () => {
    if (externalCheckboxStatus) {
        linkContainer.style.display = 'block'
        formFileContainer.style.display = 'none'
    }else {
        formFileContainer.style.display = 'block'
        linkContainer.style.display = 'none'
    }
}

const checkFormValidate = () => {
    
    if (externalCheckboxStatus) {
        if (formValidStatus.link && formValidStatus.title) {
            submitBtn.classList.remove('disabled')
        }else {
            submitBtn.classList.add('disabled')
        }
    }else {
        if (formValidStatus.file && formValidStatus.title) {
            submitBtn.classList.remove('disabled')
        }else {
            submitBtn.classList.add('disabled')
        }
    }
}

linkInput.addEventListener('input', e => {
    if (e.target.value.trim().length > 5) formValidStatus.link = true 
    else formValidStatus.link = false
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

externalCheckbox.addEventListener("change", e => {
    externalCheckboxStatus = e.target.checked
    checkExternalCheckbox()
})


checkExternalCheckbox()
checkFormValidate()