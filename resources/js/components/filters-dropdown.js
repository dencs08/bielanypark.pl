import gsap from 'gsap'

let filterDropdowns
let dropdownsContainer
function filtersDropdownInit() {
    if (document.querySelector('#Storefronts')) {
        dropdownsContainer = document.querySelector('#Storefronts')
        filterDropdowns = document.querySelectorAll("[data-filter-dropdown]")
        showDropdown()
    }
}

function showDropdown() {
    dropdownsContainer.addEventListener('mouseover', e => {
        if (!e.target.classList.contains('filters')) return
        // console.log(e.target);
        e.target.classList.add('active')
    })
}

export { filtersDropdownInit }