

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
  <script type="text/javascript">



function validateAlpha(){
    var textInput = document.getElementById("name").value;
    textInput = textInput.replace(/[^A-Za-z ]/g, "");
    document.getElementById("name").value = textInput;
}



       

        </script>
</head>
<style type="text/css">

@media ( max-width :320px) {
    #form {
         min-width: 240px;
         min-height: 120px;
    }
}

@media ( min-width :321px) {
    #form {
         min-width: 240px;
         min-height: 220px;
    }
}

@media ( min-width :640px) {
    #form {
         min-width: 240x;
         min-height: 320px;
    }
}

@media ( min-width :1200px) {
    #form {
         min-width: 300px;
         min-height: 400px;
    }
}

body {
    background: -webkit-linear-gradient(top, #eee, rgba(222,112,6,0.2), #de7006);
    background: linear-gradient(to bottom, rgb(238, 238, 238), rgba(222, 112, 6, 0.32), rgba(244, 206, 170, 0.52));
    overflow-x: hidden;
}
#form{
padding:15px;
padding-left: 40px;
padding-top: 30px;
display: table;

background-color:#8aacb8;
border: 2px solid black;
margin-left: auto;
margin-right: auto;
margin-top: 10%;

}

.row1{


  display: table-row;
  

}
.row1 label{

}
 .row1 input,select,submit{
padding:6px;
}
.row1 #submit{

    background-color: orange;
    color: white;
margin-top:8%;
}
#submit:hover
{
  background-color: white;
    color: orange;
}
 
</style>
<body>

<form id="form" name="theform" action="submit.php" method="post">
<div class='rows'>

  <div class="row1">
      <label for="name">Name:</label><br>
<input id="username" type="text" name="username" placeholder="Your name *" oninput="validateAlpha()" required><br><br>
</div>
  
  <div class="row1">
<label for ="password">Password:</label><br>
<input id="password" type="password" name="password" placeholder="Your password *" required><br><br>
</div>

  <div class="row1">
<label for ="remember">Remember Me:</label><br>
<input id="remeber" type="checkbox" name="remeber"><br><br>
</div>

<div class="row1">
<input id="submit"  name="submit" id="submit" type="submit" value="Submit" > 
</div>


</form>

</div>



</body>
</html>   

<?php
if(isset($_COOKIE['username']) AND isset($_COOKIE['password'])){
$username=$_COOKIE['username'];
$password=$_COOKIE['password'];
echo "<script> 
  document.getElementById('username').value='$username';
  document.getElementById('password').value='$password';

</script>";
}

?>