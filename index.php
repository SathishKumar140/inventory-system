<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Inventory Information System</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
    function add()
    {
    var xmlhttp;
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
        document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
        }
      }
    xmlhttp.open("GET","add.php",true);
    xmlhttp.send();
    }


 function view()
    {
    var xmlhttp;
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
        document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
        }
      }
    xmlhttp.open("GET","view.php",true);
    xmlhttp.send();
    }

     function edit()
    {
    var xmlhttp;
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
        document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
        }
      }
    xmlhttp.open("GET","update.php",true);
    xmlhttp.send();
    }
    function deleteinv()
    {
    var xmlhttp;
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
        document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
        }
      }
    xmlhttp.open("GET","delete.php",true);
    xmlhttp.send();
    }
    function result()
    {
    var xmlhttp;
    var bukpg1=document.getElementById("bukpg").value;
    var descp1=document.getElementById("descp").value;
    var bf1=document.getElementById("bf").value;
    var bv1=document.getElementById("bv").value;
    var av1=document.getElementById("av").value;
    var sp1=document.getElementById("sp").value;
    var bd1=document.getElementById("bd").value;
    var wd1=document.getElementById("wd").value;

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
        document.getElementById("my").innerHTML=xmlhttp.responseText;
        }
      }
    xmlhttp.open("GET","add_result.php?bukpg="+ bukpg1 +"&descp="+descp1 +"&bf="+bf1+"&bv="+bv1+"&av="+av1+"&sp="+sp1+"&bd="+bd1+"&wd="+wd1+"",true);
    xmlhttp.send();
    }
        function update(ss)
    {
    var xmlhttp;
    var dat=ss;

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
        document.getElementById("my").innerHTML=xmlhttp.responseText;
        }
      }
    xmlhttp.open("GET","edit.php?eid="+ dat +"",true);
    xmlhttp.send();
    }
    function editresult()
    {
    var xmlhttp;
    var bukpg1=document.getElementById("bukpg").value;
    var descp1=document.getElementById("descp").value;
    var bf1=document.getElementById("bf").value;
    var bv1=document.getElementById("bv").value;
    var av1=document.getElementById("av").value;
    var sp1=document.getElementById("sp").value;
    var bd1=document.getElementById("bd").value;
    var wd1=document.getElementById("wd").value;
    var eid=document.getElementById("eid").value;

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
        document.getElementById("my").innerHTML=xmlhttp.responseText;
        }
      }
    xmlhttp.open("GET","update_result.php?eid="+eid+"&bukpg="+ bukpg1 +"&descp="+descp1 +"&bf="+bf1+"&bv="+bv1+"&av="+av1+"&sp="+sp1+"&bd="+bd1+"&wd="+wd1+"",true);
    xmlhttp.send();
    }
    </script>
    </script>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid invtop">
        <div class="navbar-header">
          <img src="images/anna.png" width="150" height= "150">
          <a style ="float:left;font-size:25px;width:100%;" href="www.annauniv.edu/rcc">RAMANUJAN COMPUTING CENTER</a>
           <a style ="font-size:20px;" href="www.annauniv.edu">ANNA UNIVERSITY CHENNAI</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right invnav">
            <li><a href="#">Consumable</a></li>
            <li><a href="#">Non-Consumable</a></li>
            <li><a href="#">Report Generation</a></li>
  
          </ul>
          
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-1 main">

          <h2 class="sub-header volume_head">Volume 1</h2>
          <center>
            <button class="btn btn-info btn-lg" type="button" onclick="add()">Add</button>
             <button class="btn btn-info btn-lg gap"type="button" onclick="view()">View</button>
              <button class="btn btn-info btn-lg gap"type="button" onclick="edit()">Edit</button>
              <button class="btn btn-info btn-lg gap"type="button" onclick="deleteinv()">Delete</button>
</center>

            <div id="myDiv">

            </div>
         
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
  </body>
</html>
