//미완성된 코드이므로 사용X
const image = [];
image.push("url('/image/About us1.jpeg')");
image.push("url('mainbackground.jpg')");

const length = image.length + 1;

const random = Math.floor(Math.random() * length) + 1;

const target = document.getElementsByClassName('container');

setInterval(function(){
    target.style.backgroundImage=image[random];
    const random = Math.floor(Math.random() * length) + 1;
}, 5000)
