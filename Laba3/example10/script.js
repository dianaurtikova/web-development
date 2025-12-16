const ulElement = document.getElementById("List");
const butElement = document.getElementById("but");

ulElement.onclick = function (event) {
    let clickElement = event.target;
    if (clickElement.tagName === 'LI') {
        clickElement.textContent = "Нажато!";
        clickElement.classList.add('clicked');
    }
}
butElement.onclick = function () {
    const newLi = document.createElement("li");
    ulElement.appendChild(newLi);
}