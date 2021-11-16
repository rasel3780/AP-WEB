<!DOCTYPE html>
<html>
<body>

<div id="demo">
<h2>The XMLHttpRequest Object</h2>
<button type="button" onclick="loadDoc()">Change Content</button>
</div>

<table id = "emp">

</table>




<script>
function get(id){
  return document.getElementByName(id);
}

function loadDoc() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    //document.getElementById("demo").innerHTML = this.responseText;
    var json = this.responseText;
    var obj =  JSON.parse(json);
    var str = "";
    for(var i = 0 ; i<obj.length;i++){
      var x =           "<tr><td>"+obj[i].eName+
                        "</td><td>" +obj[i].pNumber+
                        "</td><td>"+obj[i].email+
                        "</td><td>"+obj[i].empType+
                        "</td></tr>"
      str+=x;
    }
    document.getElementById("emp").innerHTML = str;
  }
  xhttp.open("GET", "http://127.0.0.1:8000/api/employee/list",true);
  xhttp.send();
}
</script>

</body>
</html>