const ulElement=document.getElementById("spisok");
const inputElement=document.getElementById("text");
const butElement=document.getElementById("but");

butElement.addEventListener('click', function(){
    const newLi=document.createElement("li");
    newLi.textContent=inputElement.value;
     ulElement.appendChild(newLi);
    inputElement.value=' ';
}
)