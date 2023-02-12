
<html>
 <head>
  <title>reg-auth</title>

  
 </head>
 <body>
<div class="row">

 <div class="col">
  <form action="/registration_ver.php" method="post">
    <h1>Registration</h1>
 <p style = "font-size:25px; width:50%";>Login: <input type="text" name="login" id="login" placeholder = "enter you're login" /></p>
 <p style = "font-size:25px; width:50%">Password: <input type="password" name="password" id="passwrod" placeholder = "enter you're password" /></p>
 <p style = "font-size:25px; width:50%">name: <input type="text" name="name" id="name" placeholder = "enter you're name" /></p>
 <button class="btn bnt-success" type="submit"> Sumbit </button><br>
 
 </form>
</div>

<div class="col">
  <form action="/auth_ver.php" method="post">
    <h1>Authorization</h1>
<p style = "font-size:25px; width:50%";>Login:<input type="text" class="form-control" name="login" id="login" placeholder="Enter youre login"></p>
<p style = "font-size:25px; width:50%">Password:<input type="password" class="form-control" name="password" id="password" placeholder="Enter youre password"></p>
 <button class="btn bnt-success" type="sumbit"> Sumbit </button>
 </form>
</div>

</div>

 </body>
</html>
