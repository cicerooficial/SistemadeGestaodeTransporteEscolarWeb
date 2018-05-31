// JavaScript Document
function abrirPopup(url,w,h){

var newW = w + 100;
var newH = h + 100;
var left = (screen.width-newW)/2;
var top = (screen.height-newH)/2;
var newwindow = window.open(url, 'name', 'width='+newW+', heigth='+newH+', left='+left+', top='+top);
newwindow.resizeTo(newW, newH);

newwindow.moveTo(left,top);
newwindow.focus();
return false;

}