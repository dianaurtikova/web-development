let count=0;
const countElement=document.getElementById("div");
const butElement=document.getElementById("but")

butElement.addEventListener('click', function(){
    count++;
    countElement.textContent=`Счетчик: ${count}`;
}
)