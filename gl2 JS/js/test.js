setTimeout(function () {
    console.log('Bonjour');
},2000);

var i=5;

var ampoule = document.getElementById('ampoule');

var id=setInterval(function () {

    ampoule.classList.toggle('white');
    ampoule.classList.toggle('black');

},1000);


function compare(a,b) {
    return(a-b);
}


function test() {
    console.log(arguments);
    var s=0;
    for(var i=0;i<arguments.length;i++){
        s+=arguments[i];
    }
    console.log(s);
}
