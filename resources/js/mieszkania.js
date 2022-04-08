let children = document.querySelector('#app').children;
let i = 0;

children[i].classList.add('selected');// Item default selection

document.getElementById("previous").addEventListener("click", previous);
document.getElementById("next").addEventListener("click", next);

function resetClass() {
    for (let j = 0; j < children.length; j++) {
        children[j].classList.add('d-none');
    }
}

function next() {
    // console.log("next");
    if (i >= children.length - 1) {
        return false;
    }
    resetClass();
    i++;
    children[i].classList.add('d-block')
    children[i].classList.remove('d-none')
}

function previous() {
    // console.log("prev");
    if (i <= 0) {
        return false;
    }
    resetClass();
    i--;
    children[i].classList.add('d-block')
    children[i].classList.remove('d-none')
}