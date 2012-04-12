function getImage()
{
  document.write("hello Conner <br/>");	
  var string = document.getElementById("assKicking").innerHTML;
  document.write("This is string: " + string);	


if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("phrase").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","functions.php?q="+str,true);
xmlhttp.send();
}