/*
var a = document.querySelector('a');

a.addEventListener('click',function (e) {
    e.preventDefault();
    console.log(e);
})*/

var div = document.querySelector('#ampoule');

var input = document.querySelector('#color');

input.addEventListener('change',function () {
    console.log(input.value);
    div.style.backgroundColor = input.value;
})
