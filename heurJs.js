<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">
   function tS(){
x=new Date();
x.setTime(x.getTime());
return x;
}
function lZ(x){
return (x>9)?x:'0'+x;
}
function dT(){
if(fr==0){
fr=1;
document.write(" " + '<span id="tP">'+eval(oT)+'</span>');
}
document.getElementById("tP").innerHTML = eval(oT);
setTimeout('dT()',1000);
}
var fr=0;
oT=" 'Il est '+tS().getHours()+':'+lZ(tS().getMinutes())+':'+lZ(tS().getSeconds())"; 
</script>


