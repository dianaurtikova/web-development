const formElement=document.getElementById("form")
const textElement=document.getElementById("text")
const errorElement=document.getElementById("error")
const emailElement=document.getElementById("email")

formElement.addEventListener('click', function(event){
    event.preventDefault();
    if(textElement.value==="" || emailElement.value===""){
        errorElement.textContent = "Поле текста и почты пустые!!";
        errorElement.style.color = 'red';
    }
    else{
        errorElement.textContent = "Форма успешно отправлена (в консоль)!";
        errorElement.style.color = 'green';
        const formData = new FormData(formElement);
        formData.append('text', textElement.value);
        formData.append('email', emailElement.value);
        formData.forEach((value, key)=>{
            console.log(`  ${key}: ${value || "(пусто)"}`);
        }
        )
    }
}
)