document.getElementById('ig').style.display = 'none';
document.bgColor = 'red';
var i = 0;

var colors;

$.getJSON( '/colors.json', function(data){
    console.log(data);
    colors = data;
})

function setBg( c ){
    document.bgColor = c;
}

function keyHandler(e){
    setBg( colors[e.keyCode] );
}