const pElement = document.getElementById("text");
const selectElement = document.getElementById("selectID");

selectElement.addEventListener('change', function (event) {
    let el = selectElement.value;
    pElement.style.color = el;
})