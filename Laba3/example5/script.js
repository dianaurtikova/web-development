const imgMass=['../../Laba1/images/kazan.webp', '../../Laba1/images/moscow.webp', '../../Laba1/images/oslo.webp'];
let currentImageIndex=0;
const picElement=document.getElementById("pic")
const butElement=document.getElementById("but")

butElement.addEventListener('click', function(){
    picElement.src=imgMass[currentImageIndex];
    currentImageIndex++;
    if (currentImageIndex >= imgMass.length) {
        currentImageIndex = 0;
    }
}
)