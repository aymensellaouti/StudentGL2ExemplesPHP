
var site = prompt('Donne votre site perso');


var a = document.querySelector('a');

console.log('old link :',a.href);

a.setAttribute('href',site);
//a.href=site;