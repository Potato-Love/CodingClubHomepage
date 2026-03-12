let screenPosition = window.innerHeight/2;
function scrollApear(targetClass, addClass) {
    let target = document.querySelector(targetClass)
    let targetPosition = target.getBoundingClientRect().top;
    if(targetPosition < screenPosition){
        target.classList.add(addClass);
    }
}

addEventListener('scroll', function(){scrollApear('.inf', 'infActive')});
addEventListener('scroll', function(){scrollApear('.img1', 'img1Active')});