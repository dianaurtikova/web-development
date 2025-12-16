const ulElement=document.getElementById("spisok")
const butElement=document.getElementById("but")


butElement.addEventListener('click', function(){
   const lastItem=ulElement.lastElementChild;
   if (lastItem){
    ulElement.removeChild(lastItem);
   }
}
)