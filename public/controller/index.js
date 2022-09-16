const collapsePlace = document.getElementById('collapse-right');
const collapsePlace2 = document.getElementById('navbarNav');
const container = document.querySelector('.container');
const checkWIndowWidth = () => {
    if (window.innerWidth < 990) {
        container.appendChild(collapsePlace2)
        collapsePlace.style.display = 'none'
    }else {
        collapsePlace.style.display = 'block'
    }
}

checkWIndowWidth()
addEventListener('resize', () => {
    checkWIndowWidth()
})

$(document).ready(function() {
    const collapseBtn = document.getElementById('collapse-btn')
    $(collapseBtn).click(function() {
        $(collapsePlace2).toggle()
    })
})