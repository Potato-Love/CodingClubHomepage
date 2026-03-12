let screenPosition = window.innerHeight/1.3;
function scrollApear(targetClass, addClass) {
    let target = document.querySelector(targetClass)
    let targetPosition = target.getBoundingClientRect().top;
    if(targetPosition < screenPosition){
        target.classList.add(addClass);
    }
}

addEventListener('scroll', function(){scrollApear('.inf', 'infActive')});
addEventListener('scroll', function(){scrollApear('.img1', 'img1Active')});
addEventListener('scroll', function(){scrollApear('.inf2', 'inf2Active')});
addEventListener('scroll', function(){scrollApear('.imgArea1', 'imgArea1Active')});
addEventListener('scroll', function(){scrollApear('.imgArea2', 'imgArea2Active')});
addEventListener('scroll', function(){scrollApear('.inf3', 'inf3Active')});
addEventListener('scroll', function(){scrollApear('.inf4', 'inf4Active')});
addEventListener('scroll', function(){scrollApear('.imgArea3', 'imgArea3Active')});
addEventListener('scroll', function(){scrollApear('.inf5', 'inf5Active')});
addEventListener('scroll', function(){scrollApear('.imgArea4', 'imgArea4Active')});

