/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2018-03-30 09:30:02
 * @version $Id$
 */
 
function changecolor(){
	  var x = document.getElementById("tbl");
	  x.style.backgroundColor="red";
 
}
function nowtime() {
  var y = document.getElementById("q");
  var date = new Date();
  var year = date.getFullYear();
  var month = date.getMonth() + 1;
  var day = date.getDate();
  y.innerHTML = "(" + year + "-" + month + "-" + day + ")";
}
function insert()
{
  var newTr = tbl.insertRow(2);
  var cell1 = newTr.insertCell(0);
  var cell2 = newTr.insertCell(1);
}
function delete1()
{
	tbl.deleteRow(2);
}
function coords(event)
{
	x = event.clientX
    y = event.clientY
    var e=document.getElementById("w");
    w.innerHTML=("X : " + x + ", Y : " + y)
}
function open1()
{
	window.open("http://www.taobao.com");
}