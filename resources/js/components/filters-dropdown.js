import gsap from 'gsap'

let filterDropdowns
let dropdownsContainer
function filtersDropdownInit() {
    if (document.querySelector('#Storefronts')) {
        dropdownsContainer = document.querySelector('#Storefronts')
        filterDropdowns = document.querySelector("[data-filter-dropdown]")
        showDropdown()
    }
}

function showDropdown() {
    dropdownsContainer.addEventListener('mouseover', e => {
        e.classList.add('active')
    })
}

export { filtersDropdownInit }